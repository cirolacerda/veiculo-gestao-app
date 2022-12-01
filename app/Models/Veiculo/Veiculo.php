<?php

namespace App\Models\Veiculo;

use App\Models\Departamento;
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

    public function tipo()
    {
        return $this->belongsTo(Tipo::class);
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

    public function modelo()
    {
        return $this->belongsTo(Modelo::class);
    }

    public function cor()
    {
        return $this->belongsTo(Cor::class);
    }

    public function tipoMedida()
    {
        return $this->belongsTo(TipoMedida::class);
    }

    public function combustivel()
    {
        return $this->belongsTo(Combustivel::class);
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    public function categoriaCnh()
    {
        return $this->belongsTo(CategoriaCnh::class);
    }
}
