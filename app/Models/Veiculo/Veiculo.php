<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'placa',
        'tipo',
        'marca',
        'modelo',
        'cor',
        'chassi',
        'renavam',
        'tipo_medida',
        'medida_atual',
        'combustivel',
        'data_aquisicao',
        'categoria_cnh',
        'ano_fabricacao',
        'ano_modelo',
        'capacidade_tanque',
        'capacidade_passageiros',
        'departamento'
    ];

}
