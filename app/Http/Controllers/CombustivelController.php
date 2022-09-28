<?php

namespace App\Http\Controllers;

use App\Models\Veiculo\Combustivel;
use Illuminate\Http\Request;

class CombustivelController extends Controller
{
    //
    public function index(){
        return view('veiculo.combustivel');
    }

    public function cadastrar(Request $request) {

        $combustivel = new Combustivel();
        $combustivel->nome = $request->input('nome');
        $combustivel->save();

        echo('Combustivel Salvo');

    }

}
