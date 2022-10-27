<?php

namespace App\Http\Controllers;

use App\Models\Veiculo\Marca;
use App\Models\Veiculo\Modelo;
use Illuminate\Http\Request;

class ModeloController extends Controller
{
    //
    public function index() {

        $marcas = Marca::all();

        return view('veiculo.modelo', ['marcas' => $marcas]);
    }

    public function cadastrar(Request $request){

        Modelo::create($request->all());

        echo('Modelo Salvo');


    }
}
