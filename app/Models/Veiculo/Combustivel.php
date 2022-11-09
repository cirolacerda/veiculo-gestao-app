<?php

namespace App\Models\Veiculo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Combustivel extends Model
{
    use HasFactory;

    //para o laravel entender o nome da tabela (senao ele entenderia como combustivels)
    protected $table = 'combustiveis';

    protected $fillable = [
        'nome'
    ];
}
