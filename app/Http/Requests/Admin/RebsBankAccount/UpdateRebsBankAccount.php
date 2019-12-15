<?php

namespace App\Http\Requests\Admin\RebsBankAccount;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateRebsBankAccount extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('admin.rebs-bank-account.edit', $this->rebsBankAccount);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'company' => ['sometimes'],
            'name' => ['sometimes', 'string'],
            'bank' => ['sometimes', 'string'],
            'account_number' => ['sometimes', 'string'],
            'manager' => ['sometimes', 'string'],
            'creation_date' => ['sometimes', 'date'],
            'description' => ['sometimes', 'string'],

        ];
    }

    /**
     * @return |null
     */
    public function getCompanyId() {
        if ($this->has('company')) {
            return $this->get('company')['id'];
        }

        return null;
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
