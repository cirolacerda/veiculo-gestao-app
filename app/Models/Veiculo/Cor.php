<?php

namespace App\Models\Veiculo;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cor extends Model
{
    use HasFactory;

    //para o laravel entender o nome da tabela (senao ele entenderia como cors)
    protected $table = 'cores';

    protected $fillable = [
        'nome'
    ];
}
