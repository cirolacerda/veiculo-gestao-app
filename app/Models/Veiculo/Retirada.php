<?php

namespace App\Models\Veiculo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retirada extends Model
{
    use HasFactory;

    protected $fillable = [
    'veiculo_id',
    'motorista_id',
    'departamento_id',
    'data_retirada',
    'hora_retirada',
    'medida_saida',
    'destino',
    'observacao'
    ];
}
