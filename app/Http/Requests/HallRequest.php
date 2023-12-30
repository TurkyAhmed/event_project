<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HallRequest extends FormRequest
{
     /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {   // set ture if validation for all or false for only that authorized and for other not open the page and show page expired page
        return true;
    }


    public function rules(): array
    {
        return [
            'name' => 'required',
            'capacity' => 'required',
            'price' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => '*ادخل الحقل رجاءً.',
            'capacity.required' => '*ادخل الحقل رجاءً.',
            'price.required' => '*ادخل الحقل رجاءً.',

        ];
    }
}
