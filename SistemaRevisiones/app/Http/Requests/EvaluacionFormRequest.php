<?php

namespace SistemaRevisiones\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EvaluacionFormRequest extends FormRequest
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
            'nombre_eval'=>'required|max:50',
            'fecha_eval'=>'required',
            'cant_puntos'=>'required',
            'num_parcial'=>'required|max:5',
            'activa'=>'required',
        ];
    }
}
