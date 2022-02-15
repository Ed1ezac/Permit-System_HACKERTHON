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
            'applicant_names' => 'required|min:4',
            'physical_address' => 'required|string',
            'postal_address' => 'required|string',
            'licence_no' => 'required|numeric|min:6',
            'identity_no' => 'required|numeric|min:9',
            'permit_type' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'identity_no.numeric' => 'The Identity number must be a number',
            'identity_no.required' => 'The Identity number is required',
            'identity_no.min'=>'The Identity number should be at least 9 digits',
            'licence_no.numeric' => 'The Licence number must be a number',
            'licence_no.required' => 'The Licence number is required',
            'licence_no.min'=>'The Licence number should be at least 9 digits'
        ];
    }
}
