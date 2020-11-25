<?php

namespace App\Http\Requests\Update;

use App\Rules\NotNull;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class updateEstudiante extends FormRequest
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
            'state' => ['required',new NotNull()],
            'municipality' => ['required',new NotNull()],
            'parroquia' => ['required',new NotNull()],
            'direccion' => ['required'],
            'persona_v' => 'required|bool',
            'representante_v' => 'required|bool',
            'cedula_r' => ['exclude_if:persona_v,true','required','max:8','min:7'],
            'nombre_r' => ['exclude_if:persona_v,true','required','max:255','min:3'],
            'apellido_r' => ['exclude_if:persona_v,true','required','max:255','min:3'],
            'sex_r' => ['exclude_if:persona_v,true','required',new NotNull()],
            'telefono_r' => ['exclude_if:persona_v,true','required','max:11','min:11'],
            'ocupacion_laboral' => ['exclude_if:representante_v,true','required',new NotNull()],
            'state_r' => ['exclude_if:persona_v,true','required',new NotNull()],
            'municipality_r' => ['exclude_if:persona_v,true','required',new NotNull()],
            'parroquia_r' => ['exclude_if:persona_v,true','required',new NotNull()],
            'direccion_r' => ['exclude_if:persona_v,true','required'],
            'parentesco' => ['required',new NotNull()],
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
            'fecha_nacimiento' => 'fecha de nacimiento',
            'lugar_nacimiento' => 'lugar de nacimiento',
            'descripcion' => 'descripción',
            'cedula_r' => 'cédula',
            'nombre_r' => 'nombre',
            'apellido_r' => 'apellido',
            'sex_r' => 'sexo',
            'telefono_r' => 'teléfono',
            'ocupacion_laboral' => 'ocupación laboral',
            'state_r' => 'estado',
            'municipality_r' => 'municipio',
            'parroquia_r' => 'parroquia',
            'direccion_r' => 'dirección'
        ];
    }
}
