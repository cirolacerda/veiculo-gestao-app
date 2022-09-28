<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Motorista;
use App\Models\Veiculo\CategoriaCnh;
use Illuminate\Http\Request;

class MotoristaController extends Controller
{
    //
    public function index() {

        $categorias_cnh = CategoriaCnh::all();

        $departamentos = Departamento::all();

        return view('motorista', ['categorias_cnh' => $categorias_cnh, 'departamentos' => $departamentos]);
    }

    public function cadastrar(Request $request) {

        $motorista = new Motorista();
        $motorista->nome = $request->input('nome');
        $motorista->matricula = $request->input('matricula');
        $motorista->registro_habilitacao = $request->input('registro_habilitacao');
        $motorista->categoria_cnh_id = $request->input('categoria_cnh');
        $motorista->validade_cnh = $request->input('validade_cnh');
        $motorista->primeira_habilitacao = $request->input('primeira_habilitacao');
        $motorista->departamento_id = $request->input('departamento');
        $motorista->save();

        echo('Motorista Salvo');
    }
}
