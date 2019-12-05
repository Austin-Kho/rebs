<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RebsDepartment extends Model
{
    protected $fillable = [
        'rebs_company_id',
        'name',
        'description',

    ];


    protected $dates = [
        'created_at',
        'updated_at',

    ];

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['company'];

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/rebs-departments/'.$this->getKey());
    }

    public function company() {
        return $this->belongsTo(RebsCompany::class, 'rebs_company_id');
    }
}
