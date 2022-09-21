<?php

namespace App\Models\Veiculo;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Combustivel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome'
    ];
}
