<?php

namespace App\Http\Controllers\Docs;

use File;
use App\Models\Docs\Doc;
use App\Models\Docs\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Cacheable;
use App\Http\Requests\SubjectsRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;

class SubjectsController extends Controller
{
    /**
     * Subjects Controller
     */
    public function __construct(Subject $sub)
    {
        parent::__construct();

        $this->middleware('auth');

        $this->middleware('subAuth');

        $this->sub = $sub;
    }

    /**
     * Specify the tags for caching.
     *
     * @return string
     */
    public function cacheTags()
    {
        return 'subjects';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Doc $doc, Request $request)
    {
        $subs = $doc->subjects()->get();

        $sub = ($subs) ? $doc->subjects()->first() : null;

        $results = null;

        if ($keyword = request()->input('q')) {
            $query = $doc->subjects();
            $raw = "MATCH(sub_title,content) AGAINST(? IN BOOLEAN MODE)";
            $query = $query->whereRaw($raw, [$keyword]);
            $results = $query->oldest()->get();
        }

        return view('docs.sub.page_view', compact('doc', 'subs', 'sub', 'results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Doc $doc)
    {
        $sub = new Subject;

        return view('docs.sub.create', compact('doc', 'sub'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubjectsRequest $request, Doc $doc)
    {
        $user = $request->user();

        $data = array_merge($request->all(), [
            'user_id' => $user->id,
        ]);

        $subject = $user->docs()
            ->find($doc->id)
            ->subjects()
            ->create($data);

        if (!$subject) {
            flash()->error('입력하신 내용이 저장되지 않았습니다.');

            return back()->withInput();
        }

        // 첨부파일 연결
        $request->getAttachments()->each(function ($attachment) use ($subject) {
            $attachment->subject()->associate($subject);
            $attachment->save();
        });

        event(new \App\Events\ModelChanged(['subjects'])); // 캐시 초기화 이벤트

        flash()->success('입력하신 내용이 저장되었습니다.');

        return redirect(
            route(
                'docs.sub.show',
                [$doc->id, $subject->id]
            )
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Doc $doc, Subject $sub)
    {
        $subs = $doc->subjects()->get();

        $cacheKey = cache_key("subjects.{$doc->id}.show.{$sub->id}");

        $query = $doc->subjects();

        $sub = $this->cache($cacheKey, 5, $query, 'find', $sub->id);

        return view('docs.sub.page_view', compact('doc', 'sub', 'subs'));
    }

    /**
     * Respond the requested image.
     *
     * @param $file
     * @return \Illuminate\Contracts\Routing\ResponseFactory
     */
    public function image($file)
    {

        $reqEtag = \Request::getEtags();
        $genEtag = $this->sub->etag($file);

        if (isset($reqEtag[0])) {
            if ($reqEtag[0] === $genEtag) {
                return response('', 304);
            }
        }

        $image = $this->sub->image($file);

        return response($image->encode('png'), 200, [
            'Content-Type' => 'image/png',
            'Cache-Control' => 'public, max-age=0',
            'Etag' => $genEtag,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Doc $doc, Subject $sub)
    {
        return view('docs.sub.edit', compact('doc', 'sub'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubjectsRequest $request, Doc $doc, Subject $sub)
    {
        $this->authorize('update', $sub);

        $user = $request->user();

        $data = array_merge($request->all(), [
            'user_id' => $user->id,
        ]);

        $sub->update($data);

        $doc->update($request->all());

        event(new \App\Events\ModelChanged(['subjects'])); // 캐시 초기화 이벤트

        flash()->success('수정하신 내용을 저장했습니다.');

        return redirect(route('docs.sub.show', [$doc->id, $sub->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        $this->authorize('delete', $subject);

        // soft delete

        $subject->delete();

        /** force delete */ // 테스트 및 디버깅 필요
        // $attachments = $subject->attachments;

        // foreach($attachments as $attach) {
        //     $path = attachments_path($attach->name);

        //     if (\File::exists($path)) {
        //         \File::delete($path);
        //     }
        // }
        // $this->deleteAttachments($attachments);
        /** force delete */

        $subject->forceDelete();

        event(new \App\Events\ModelChanged(['subjects'])); // 캐시 초기화 이벤트

        return redirect(route('docs.sub.index', $subject->doc_id));
        // return response()->json([], 204, [], JSON_PRETTY_PRINT);
    }
}
