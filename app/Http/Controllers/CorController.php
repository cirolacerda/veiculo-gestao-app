<?php

namespace App\Http\Controllers;

use App\Models\Veiculo\Cor;
use Illuminate\Http\Request;


class CorController extends Controller
{
    //
    public function index() {

        return view('veiculo.cor');
    }

    public function cadastrar(Request $request) {

        $cor = new Cor();
        $cor->nome = $request->input('nome');
        $cor->save();

        echo('Cor Salva');
    }
}
