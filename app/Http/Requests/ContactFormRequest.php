<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'email' => 'required|email',
            'phone' => 'nullable|numeric|digits:10',
            'message' => 'required|string',
            'terms' => 'required|accepted'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'El campo nombre es obligatorio',
            'name.string' => 'El campo nombre debe ser una cadena de texto',
            'email.required' => 'El campo correo electrónico es obligatorio',
            'email.email' => 'El campo correo electrónico debe ser un correo electrónico válido',
            'phone.numeric' => 'El campo teléfono debe ser un número',
            'phone.digits' => 'El campo teléfono debe tener 10 dígitos',
            'message.required' => 'El campo mensaje es obligatorio',
            'message.string' => 'El campo mensaje debe ser una cadena de texto',
            'terms.required' => 'Debes aceptar los términos y condiciones',
            'terms.accepted' => 'Debes aceptar los términos y condiciones'
        ];
    }

}
