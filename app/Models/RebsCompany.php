<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RebsCompany extends Model
{
    
    
    protected $fillable = [
        "name",
        "registration_number",
        "ceo",
        "business_number",
        "business_type",
        "sectors",
        "main_tel",
        "main_fax",
        "establishment_date",
        "opening_date",
        "tax_invoice_email",
        "tax_office",
        "postcode",
        "address",
        "detail_address",
        "extra_address",
    
    ];
    
    protected $hidden = [
    
    ];
    
    protected $dates = [
        "establishment_date",
        "opening_date",
        "created_at",
        "updated_at",
    
    ];
    
    
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute() {
        return url('/admin/rebs-companies/'.$this->getKey());
    }

    
}
