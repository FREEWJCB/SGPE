<?php

namespace App\Http\Requests\Store;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class storeEmpleado extends FormRequest
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
            'persona_v' => 'required|bool',
            'cedula' => ['exclude_if:persona_v,true','required','max:8','min:7'],
            'nombre' => ['exclude_if:persona_v,true','required','max:255','min:3'],
            'apellido' => ['exclude_if:persona_v,true','required','max:255','min:3'],
            'sex' => ['exclude_if:persona_v,true','required',new NotNull()],
            'telefono' => ['exclude_if:persona_v,true','required','max:11','min:11'],
            'state' => ['exclude_if:persona_v,true','required',new NotNull()],
            'municipality' => ['exclude_if:persona_v,true','required',new NotNull()],
            'parroquia' => ['exclude_if:persona_v,true','required',new NotNull()],
            'direccion' => ['exclude_if:persona_v,true','required'],
            'cargo' => ['required',new NotNull()],
            'email' => 'email:rfc,dns',Rule::unique('empleado')->where('status', 1)
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
            'direccion' => 'dirección'
        ];
    }
}
