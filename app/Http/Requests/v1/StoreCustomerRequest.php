<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCustomerRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'type' => ['required', Rule::in(['I','B','i','b'])],
            'email' => ['required', 'email'],
            'city' => ['required'],
            'state' => ['required'],
            'postalCode' => ['required'],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge ([
            'postal_code' => $this->postalCode
        ]);
    }
}

/*
{
	'name : "Mohamed Brakus",
	'type': "I",
	'email' :"manuela.beatty@von.com",
	'address' :"76184 Travis Ferry",
	'city' :"Bartellbury",
	'state' :"Massachusetts",
	'postalCode': "62663-1886",
}

*/