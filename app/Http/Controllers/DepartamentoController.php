<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    //
    public function index() {

        return view('departamento');
    }

    public function cadastrar(Request $request) {

        $departamento = new Departamento();
        $departamento->nome = $request->input('nome');
        $departamento->sigla = $request->input('sigla');
        $departamento->save();

        echo('Departamento salvo');
    }
}
