<?php

namespace App\Http\Requests\Admin\RebsBankAccount;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreRebsBankAccount extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
//    public function authorize()
//    {
//        return Gate::allows('admin.rebs-bank-account.create');
//    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'company' => ['required'],
            'name' => ['required', 'string'],
            'bank' => ['required', 'string'],
            'account_number' => ['required', 'string'],
            'manager' => ['required', 'string'],
            'creation_date' => ['required', 'date'],
            'description' => ['required', 'string'],

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
}
