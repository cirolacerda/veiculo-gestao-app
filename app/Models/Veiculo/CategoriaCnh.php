<?php

namespace App\Models\Veiculo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaCnh extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome'
    ];
}
