<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VeiculoRequest extends FormRequest
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
            'placa' => 'required|min:7|max:7',
            'tipo_id' => 'required|exists:tipos,id',
            'marca_id' => 'required|exists:marcas,id',
            'modelo_id' => 'required|exists:modelos,id',
            'cor_id' => 'required|exists:cores,id',
            'chassi' => 'required',
            'renavam' => 'required',
            'tipo_medida_id' => 'required|exists:tipos_medidas,id',
            'medida_atual' => 'required',
            'combustivel_id' => 'required|exists:combustiveis,id',
            'capacidade_tanque' => 'required',
            'capacidade_passageiros' => 'required|integer',
            'categoria_cnh_id' => 'required|exists:categoria_cnhs,id',
            'ano_fabricacao' => 'required',
            'ano_modelo' => 'required',
            'data_aquisicao' => 'required',
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
            'placa.min' => 'O campo placa deve ter no mínimo 7 caracteres',
            'placa.max' => 'O campo placa deve ter no máximo 7 caracteres',
            'capacidade_passageiros.integer' => 'O campo peso deve ser um número inteiro',
            'tipo_id.exists' => 'O tipo informado não existe',
            'marca_id.exists' => 'A marca informada não existe',
            'cor_id.exists' => 'A cor informada não existe',
            'modelo_id.exists' => 'O modelo informado não existe',
            'tipo_medida_id.exists' => 'O tipo de medida informado não existe',
            'combustivel_id.exists' => 'O combustivel informado não existe',
            'categoria_cnh_id.exists' => 'A categoria da cnh informada não existe',
            'departamento_id.exists' => 'O departamento informado não existe',
    ];
}
}
