<?php

namespace App\Http\Requests\Update;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class updateRepresentante extends FormRequest
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
            'nombre' => ['required','max:255','min:3'],
            'apellido' => ['required','max:255','min:3'],
            'sex' => ['required',new NotNull()],
            'telefono' => ['required','max:11','min:11'],
            'ocupacion_laboral' => ['required',new NotNull()],
            'state' => ['required',new NotNull()],
            'municipality' => ['required',new NotNull()],
            'parroquia' => ['required',new NotNull()],
            'direccion' => ['required']
        ];
    }

    public function attributes()
    {
        return [
            'cedula' => 'cédula',
            'sex' => 'sexo',
            'telefono' => 'teléfono',
            'state' => 'estado',
            'municipality' => 'municipio',
            'direccion' => 'dirección',
            'ocupacion_laboral' => 'ocupación laboral'
        ];
    }
}
