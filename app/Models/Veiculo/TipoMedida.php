<?php

namespace App\Models\Veiculo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoMedida extends Model
{
    use HasFactory;

    //ODÔMETRO  HORÍMETRO
    protected $fillable = [
        'nome'
    ];
}
