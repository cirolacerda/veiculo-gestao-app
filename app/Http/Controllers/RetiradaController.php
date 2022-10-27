<?php

namespace App\Http\Controllers;

use App\Models\Veiculo\Retirada;
use Illuminate\Http\Request;

class RetiradaController extends Controller
{
    //
    public function index() {

        return view('veiculo.retirada');
    }

    public function cadastrar(Request $request) {

        Retirada::create($request->all());

        echo('Retirada Cadastrada');
    }
}
