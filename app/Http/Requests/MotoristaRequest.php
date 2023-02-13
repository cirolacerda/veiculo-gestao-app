<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MotoristaRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:3|max:250',
            'matricula' => 'required',
            'registro_habilitacao' => 'required',
            'categoria_cnh_id' => 'required|exists:categoria_cnhs,id',
            'validade_cnh' => 'required',
            'primeira_habilitacao' => 'required',
            'departamento_id' => 'required|exists:departamentos,id',
        ];
    }

    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array
 */
    public function messages()
    {
        return [
            'required' => 'O campo :attribute deve ser preenchido',
            'nome.min' => 'O campo nome deve ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome deve ter no máximo 250 caracteres',
            'categoria_cnh_id.exists' => 'A categoria da cnh informada não existe',
            'departamento_id.exists' => 'O departamento informado não existe',
        ];
    }
}
