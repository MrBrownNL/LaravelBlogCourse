<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
            //

            'name'=>'required',
            'email'=>['required','email'],
            'password'=>'required',
            'role_id'=>'required',

        ];
    }

    public function messages() {
        return [
            'name.required'=>'Vul uw naam in',
            'email.required'=>'Vul een geldig e-mailadres in',
        ];
    }
}
