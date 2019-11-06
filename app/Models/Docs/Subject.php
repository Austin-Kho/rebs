<?php

namespace App\Models\Docs;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use \Illuminate\Database\Eloquent\SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'seq',
        'user_id',
        'doc_id',
        'sub_title',
        'sub_level',
        'content'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_id',
        'doc_id',
    ];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['doc'];

    /**
     * 타임스탬프 형식으로 저장할 컬림 추가
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Create intervention image instance from the given file.
     *
     * @param [type] $file
     * @return \Intervention\Image\Image
     */
    public function image($file)
    {
        return \Image::make($this->path($file, 'public/assets/docs/img'));
    }

    /**
     * Generate path of the given file.
     *
     * @param [type] $file
     * @param string $dir
     * @return string
     */
    protected function path($file, $dir = 'public/assets/docs/img')
    {
        $path = base_path($dir.DIRECTORY_SEPARATOR.$file);

        if (! File::exists($path)) {
            abort(404, '요청하신 파일이 없습니다.');
        }

        return $path;
    }

    /**
     * Calculate etag value.
     *
     * @param $file
     * @return string
     */
    public function etag($file)
    {
        $lastModified = File::lastModified($this->path($file, 'public/assets/docs/img'));

        return md5($file . $lastModified);
    }


    /** Releation ship */

    public function user() {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function doc() {
        return $this->belongsTo(\App\Models\Docs\Doc::class);
    }

    public function attachments() {
        return $this->hasMany(\App\Models\Docs\Attachment::class);
    }
}
