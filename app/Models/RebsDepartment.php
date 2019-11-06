<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RebsDepartment extends Model
{
    
    
    protected $fillable = [
        "rebs_company_id",
        "upper_departments_id",
        "departments_name",
        "description",
    
    ];
    
    protected $hidden = [
    
    ];
    
    protected $dates = [
        "created_at",
        "updated_at",
    
    ];
    
    
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute() {
        return url('/admin/rebs-departments/'.$this->getKey());
    }

    
}
