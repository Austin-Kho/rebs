<?php

namespace App\Http\Controllers\Docs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AttachmentsController extends Controller
{
    /**
     * AttachmentsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attachments = [];

        if ($request->hasFile('files')) {
            $files = $request->file('files');

            foreach($files as $file) {
                $filename = str_random().filter_var($file->getClientOriginalName(), FILTER_SANITIZE_URL);

                $payload = [
                    'filename' => $filename,
                    'bytes' => $file->getClientSize(),
                    'mime' => $file->getClientMimeType()
                ];

                $file->move(attachments_path(), $filename);

                $attachments[] = ($id = $request->input('subject_id'))
                    ? \App\Models\Docs\Subject::findOrFail($id)->attachments()->create($payload) // 수정 시
                    : \App\Models\Docs\Attachment::create($payload);                             // 쓰기 시
            }
        }

        return response()->json($attachments, 200, [], JSON_PRETTY_PRINT);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(\App\Models\Docs\Attachment $attachment)
    {
        $path = attachments_path($attachment->name);

        if (\File::exists($path)) {
            \File::delete($path);
        }

        $attachment->delete();

        return response()->json(
            $attachment,
            200,
            [],
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Display the specified resource.
     *
     * @param $file
     * @return \Illuminate\Contracts\Routing\ResponseFactory
     */
    public function show($file)
    {
        $path = attachments_path($file);

        if (! \File::exists($path)) {
            abort(404);
        }

        $image = \Image::make($path);

        return response($image->encode('png'), 200, [
            'Content-Type' => 'image/png'
        ]);
    }
}
