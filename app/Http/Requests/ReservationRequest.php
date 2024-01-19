<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }



    public function rules(): array
    {
        return [
            'title' => 'required',
            'interval'=>'required',
            'date_from' => 'required|date',
            'date_to'=> 'required|date|after_or_equal:date_from',
            // 'type_of_event',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => '*ادخل الحقل رجاءً.',
            'interval.required' => '*يرجى تحديد الفترة',
            'date_from.required' => '*ادخل الحقل رجاءً.',
            'date_from.date' => '*ادخل الحقل رجاءً.',
            'date_to.required'=>'*ادخل الحقل رجاءً.',
            'date_to.date'=>'*يجب ان يكون الحقل تاريخ',
            'date_to.after_or_equal'=>'*لا يمكن ان يكون تاريخ الانتهاء قبل تاريخ البدء',
            // 'type_of_event'=>''

        ];
    }



}
