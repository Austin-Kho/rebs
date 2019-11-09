<?php

namespace App\Http\Requests\Admin\RebsCompany;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreRebsCompany extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('admin.rebs-company.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'registration_number' => ['required', 'string'],
            'ceo' => ['required', 'string'],
            'business_number' => ['required', 'string'],
            'business_type' => ['nullable', 'string'],
            'sectors' => ['nullable', 'string'],
            'main_tel' => ['nullable', 'string'],
            'main_fax' => ['nullable', 'string'],
            'establishment_date' => ['nullable', 'date'],
            'opening_date' => ['nullable', 'date'],
            'tax_invoice_email' => ['nullable', 'string'],
            'tax_office' => ['nullable', 'string'],
            'postcode' => ['required', 'string'],
            'address' => ['required', 'string'],
            'detail_address' => ['required', 'string'],
            'extra_address' => ['required', 'string'],
            
        ];
    }
}
