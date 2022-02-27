<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class StoreFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|unique:vaccine_forms|email|string',
            'age' => "required|gte:15",
            'address' => 'required|string',
            'nrc' => 'required|unique:vaccine_forms',
            'vaccine_id' => 'required',
            'rule' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'age.gte:15' => 'Minimum age for covid vaccine is 15 or greater',
            'rule.required' => "You need read and agree the rule",
        ];
    }
}
