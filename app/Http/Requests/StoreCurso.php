<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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
            'name' => 'required|max:20',
            'description' => 'required|min:20',
            'categoria' => 'required'
        ];
    }

    // Personalizar el nombre que se mostrara en el error
    public function attributes()
    {
        return [
            'name' => 'nombre de el curso',
        ];
    }

    // Personalizar los mensajes de error
    public function messages()
    {
        return [
            'description.required' => 'Debe Ingresar Una Descripcion De El Curso'
        ];
    }
}
