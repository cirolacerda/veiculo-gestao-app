<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Veiculo\CategoriaCnh;
use App\Models\Veiculo\Combustivel;
use App\Models\Veiculo\Cor;
use App\Models\Veiculo\Marca;
use App\Models\Veiculo\Modelo;
use App\Models\Veiculo\Tipo;
use App\Models\Veiculo\TipoMedida;
use App\Models\Veiculo\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    //
    public function index() {

        $tipos = Tipo::all();
        $marcas = Marca::all();
        $modelos = Modelo::all();
        $cores = Cor::all();
        $tipo_medidas = TipoMedida::all();
        $combustiveis = Combustivel::all();
        $categoria_cnhs = CategoriaCnh::all();
        $departamentos = Departamento::all();

        return view('veiculo.cadastrar',
            [ 'tipos' => $tipos,
              'marcas' => $marcas,
              'modelos' => $modelos,
              'cores' => $cores,
              'tipo_medidas' => $tipo_medidas,
              'combustiveis' => $combustiveis,
              'categoria_cnhs' => $categoria_cnhs,
              'departamentos' => $departamentos
            ]);
    }

    public function cadastrar(Request $request){

        Veiculo::create($request->all());

        echo('Veiculo Salvo');


    }
}
