<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BasicDetailsRequest extends FormRequest
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
            'full_name' => 'required|min:4',
            'email' => 'required|email',
            'identity_no' => 'required|numeric|min:9',
            'permit_type' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'identity_no.numeric' => 'The Identity number must be a number',
            'identity_no.required' => 'The Identity number is required',
            'identity_no.min'=>'The Identity number should be at least 9 digits'
        ];
    }
}
