<?php

namespace App\Http\Controllers\Docs;

use App\Models\Docs\Doc;
use Illuminate\Http\Request;
use App\Http\Requests\DocsRequest;
use App\Http\Controllers\Controller;

class DocsController extends Controller
{
    /**
     * DocsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Doc::whereUserId(auth()->user()->id)
                    ->orWhere('is_public', 1);

        if (auth()->user()->isAdmin()) {
            $query = new Doc;
        }

        $query = $query->orderBy(
            $request->input('sort', 'created_at'),
            $request->input('order', 'desc')
        );

        if ($keyword = request()->input('q')) {
            $raw = "title LIKE '%{$keyword}%' OR author LIKE '%{$keyword}%' OR publisher LIKE '%{$keyword}%'";
            $query = $query->whereRaw($raw, [$keyword]);
        }

        $docs = $query->paginate(5);

        return view('docs.list.index', compact('docs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doc = new Doc;

        return view('docs.list.create', compact('doc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocsRequest $request)
    {
        $user = $request->user();

        $doc = $user->docs()->create($request->all());

        if ($request->has('is_public')) {
            $doc->is_public = 1;
            $doc->save();
        }

        if (!$doc) {
            flash()->error('정상 등록되지 않았습니다.');

            return back()->withInput();
        }

        flash('정상적으로 등록되었습니다.');

        return redirect(route('docs.show', $doc->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Doc $doc)
    {
        return view('docs.list.show', compact('doc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Doc $doc)
    {
        $this->authorize('update', $doc);

        return view('docs.list.edit', compact('doc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DocsRequest $request, Doc $doc)
    {
        $doc->is_public = $request->has('is_public') ? 1 : 0;

        $data = array_merge($request->all(), [
            'is_public' => $doc->is_public,
        ]);

        $doc->update($data);

        flash()->success('수정하신 내용을 저장했습니다.');

        return redirect(route('docs.show', $doc->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doc $doc)
    {
        $this->authorize('delete', $doc);

        $doc->delete();

        return response()->json([], 204);
    }
}
