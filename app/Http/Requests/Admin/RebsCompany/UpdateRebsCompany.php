<?php

namespace App\Http\Requests\Admin\RebsCompany;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateRebsCompany extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('admin.rebs-company.edit', $this->rebsCompany);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'string'],
            'registration_number' => ['sometimes', 'string'],
            'ceo' => ['sometimes', 'string'],
            'business_number' => ['sometimes', 'string'],
            'business_type' => ['nullable', 'string'],
            'sectors' => ['nullable', 'string'],
            'main_tel' => ['nullable', 'string'],
            'main_fax' => ['nullable', 'string'],
            'establishment_date' => ['nullable', 'date'],
            'opening_date' => ['nullable', 'date'],
            'tax_invoice_email' => ['nullable', 'string'],
            'tax_office' => ['nullable', 'string'],
            'postcode' => ['sometimes', 'string'],
            'address' => ['sometimes', 'string'],
            'detail_address' => ['sometimes', 'string'],
            'extra_address' => ['sometimes', 'string'],
            
        ];
    }

    /**
     * Modify input data
     *
     * @return array
     */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();


        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
