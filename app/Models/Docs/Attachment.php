<?php

namespace App\Models\Docs;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'filename',
        'bytes',
        'mime',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'url',
    ];

    /* Relationships */

    public function subject() {
        return $this->belongsTo(\App\Models\Docs\Subject::class);
    }

    /* Accessors */

    public function getBytesAttribute($value) {
        return format_filesize($value);
    }

    public function getUrlAttribute() {
//        return url('img/'.$this->filename);
        return '/assets/docs/img/'.$this->filename;
    }
}
