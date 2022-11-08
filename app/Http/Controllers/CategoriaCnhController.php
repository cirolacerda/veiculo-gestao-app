<?php

namespace App\Http\Controllers;

use App\Models\Veiculo\CategoriaCnh;
use Illuminate\Http\Request;

class CategoriaCnhController extends Controller
{
    //

    public function index()
    {
        return view('veiculo.categoria-cnh');
    }

    public function cadastrar(Request $request)
    {
        $categoriaCnh = new CategoriaCnh();
        $categoriaCnh->nome = $request->input('nome');
        $categoriaCnh->save();

        echo('Categoria Salva!');
    }
}
