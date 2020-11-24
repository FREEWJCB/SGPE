<?php

namespace App\Http\Requests\Update;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class updateParentesco extends FormRequest
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
            'parentescos' => ['required','max:255','min:3',Rule::unique('parentesco')->where('status', 1)->ignore($this->Parentesco)]
        ];
    }

    public function attributes()
    {
        return [
            'parentescos' => 'parentesco'
        ];
    }
}
