<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Veiculo\CategoriaCnh;
use App\Models\Veiculo\Combustivel;
use App\Models\Veiculo\Cor;
use App\Models\Veiculo\Marca;
use App\Models\Veiculo\Modelo;
use App\Models\Veiculo\Tipo;
use App\Models\Veiculo\TipoMedida;
use App\Models\Veiculo\Veiculo;
use App\Http\Requests\VeiculoRequest;

class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $veiculos = Veiculo::all();

        return view('veiculo.index', ['veiculos' => $veiculos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos = Tipo::all();
        $marcas = Marca::all();
        $modelos = Modelo::all();
        $cores = Cor::all();
        $tipo_medidas = TipoMedida::all();
        $combustiveis = Combustivel::all();
        $categoria_cnhs = CategoriaCnh::all();
        $departamentos = Departamento::all();

        return view('veiculo.create', ['tipos' => $tipos, 'marcas' => $marcas, 'modelos' => $modelos, 'cores' => $cores, 'tipo_medidas' => $tipo_medidas, 'combustiveis' => $combustiveis, 'categoria_cnhs' => $categoria_cnhs, 'departamentos' => $departamentos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VeiculoRequest $request)
    {
        Veiculo::create($request->all());

        return redirect()->route('veiculos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Veiculo $veiculo)
    {
        //
        return view('veiculo.show', ['veiculo' => $veiculo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Veiculo $veiculo)
    {
        //
        $tipos = Tipo::all();
        $marcas = Marca::all();
        $modelos = Modelo::all();
        $cores = Cor::all();
        $tipo_medidas = TipoMedida::all();
        $combustiveis = Combustivel::all();
        $categoria_cnhs = CategoriaCnh::all();
        $departamentos = Departamento::all();

        return view('veiculo.edit', ['veiculo' => $veiculo, 'tipos' => $tipos, 'marcas' => $marcas, 'modelos' => $modelos, 'cores' => $cores, 'tipo_medidas' => $tipo_medidas, 'combustiveis' => $combustiveis, 'categoria_cnhs' => $categoria_cnhs, 'departamentos' => $departamentos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VeiculoRequest $request, Veiculo $veiculo)
    {
        //
        $veiculo->update($request->all());

        return view('veiculo.show', ['veiculo' => $veiculo]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Veiculo::destroy($id);

        return redirect()->route('veiculos.index');
    }
}
