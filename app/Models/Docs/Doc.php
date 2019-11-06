<?php

namespace App\Models\Docs;

use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    use \Illuminate\Database\Eloquent\SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'title',
        'author',
        'translator',
        'publisher',
        'pub_date',
        'description'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['user_id'];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    // protected $with = ['user'];

    /**
     * 일시 형식으로 저장할 컬럼 추가
     *
     * @var array
     */
    protected $dates = ['deleted_at'];


    /** Releation ship */

    public function user() {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function subjects() {
        return $this->hasMany(\App\Models\Docs\Subject::class);
    }
}
