<?php

namespace App\Http\Controllers;

use App\Models\Veiculo\Tipo;
use Illuminate\Http\Request;

class TipoController extends Controller
{
    //
    public function index(){

        return view('veiculo.tipo-medida');
    }

    public function cadastrar(Request $request){

        $tipo = new Tipo();
        $tipo->nome = $request->input('nome');
        $tipo->save();

        echo('Tipo Salvo');

    }
}
