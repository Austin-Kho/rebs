<?php

namespace App\Http\Requests;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Http\FormRequest;

class SubjectsRequest extends FormRequest
{
    /**
     * The input keys that should not be flashed on redirect.
     *
     * @var array
     */
    protected $dontFlash = [
        'files',
    ];

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $mimes = implode(',', config('settings.mimes'));

        return [
            'sub_title' => ['required', 'min:2'],
            'seq' => ['required', 'numeric'],
            'content' => ['required', 'min:5'],
            'files' => ['array'],
            'files.*' => ["mimes:{$mimes}", 'max:30000'],
            // 'attachments' => ['array'],
            // 'attachments.*' => ['integer', 'exists:attachments,id'],
        ];
    }

    /**
     * 사용자 입력 값으로부터 첨부파일 객체를 조회합니다.
     *
     * @return Collection
     */
    public function getAttachments()
    {
        return \App\Models\Docs\Attachment::whereIn(
            'id',
            $this->input('attachments', [])
        )->get();
    }
}
