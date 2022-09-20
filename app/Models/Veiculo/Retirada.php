<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retirada extends Model
{
    use HasFactory;

    protected $fillable = [
    'veiculo',
    'motorista',
    'departamento_solicitante',
    'ultima_medida',
    'medida_saida',
    'destino',
    'observacao'
    ];
}
