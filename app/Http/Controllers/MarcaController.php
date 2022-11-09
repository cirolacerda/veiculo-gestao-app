<?php

namespace App\Http\Controllers;

use App\Models\Veiculo\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    //
    public function index()
    {
        return view('veiculo.marca');
    }

    public function cadastrar(Request $request)
    {
        $marca = new Marca();
        $marca->nome = $request->input('nome');
        $marca->save();

        echo('Marca Salva');
    }
}
