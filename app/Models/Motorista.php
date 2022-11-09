<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorista extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'matricula',
        'registro_habilitacao',
        'categoria_cnh_id',
        'validade_cnh',
        'primeira_habilitacao',
        'departamento_id'
    ];
}
