<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'email'=>'required|unique:users,email',
            'password'=>'required',
        ];
    } 

    public function messages(): array
    {
        return [
            'name.required' => '*ادخل الحقل رجاءً.',
            'phone.required'=>'*ادخل الحقل رجاءً.',
            'address.required'=>'*ادخل الحقل رجاءً.',
            'email.required'=>'*ادخل الحقل رجاءً.',
            'email.unique'=>' الحساب مسجل من قبل ',
            'password.required'=>'*ادخل الحقل رجاءً.',

        ];
    }
}
