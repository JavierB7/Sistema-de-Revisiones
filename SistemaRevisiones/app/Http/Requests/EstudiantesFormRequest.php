<?php

namespace SistemaRevisiones\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstudiantesFormRequest extends FormRequest
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
            'cedula'=>'required',
            'nombre'=>'required|max:80',
            'apellido'=>'required|max:80',
            'comentario'=>'required|max:255',
            'enlace'=>'required|max:80',
            'num_parcial'=>'required',
        ];
    }
}
