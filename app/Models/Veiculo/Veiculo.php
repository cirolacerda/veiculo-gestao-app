<?php

namespace App\Models\Veiculo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'placa',
        'tipo_id',
        'marca_id',
        'modelo_id',
        'cor_id',
        'tipo_medida_id',
        'combustivel_id',
        'departamento_id',
        'categoria_cnh_id',
        'chassi',
        'renavam',
        'medida_atual',
        'data_aquisicao',
        'ano_fabricacao',
        'ano_modelo',
        'capacidade_tanque',
        'capacidade_passageiros'

    ];
}
