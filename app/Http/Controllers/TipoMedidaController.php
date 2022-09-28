<?php

namespace App\Http\Controllers;

use App\Models\Veiculo\TipoMedida;
use Illuminate\Http\Request;

class TipoMedidaController extends Controller
{
    //
    public function index() {

        return view('veiculo.tipo-medida');
    }

    public function cadastrar(Request $request) {

        $tipoMedida = new TipoMedida();
        $tipoMedida->nome = $request->input('nome');
        $tipoMedida->save();

        echo('Tipo Medida Salvo');

    }
}
