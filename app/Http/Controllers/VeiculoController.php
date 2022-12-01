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
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        $regras = [
            'placa' => 'required|min:7|max:7',
            'tipo_id' => 'required|exists:tipos,id',
            'marca_id' => 'required|exists:marcas,id',
            'modelo_id' => 'required|exists:modelos,id',
            'cor_id' => 'required|exists:cores,id',
            'chassi' => 'required',
            'renavam' => 'required',
            'tipo_medida_id' => 'required|exists:tipos_medidas,id',
            'medida_atual' => 'required',
            'combustivel_id' => 'required|exists:combustiveis,id',
            'capacidade_tanque' => 'required',
            'capacidade_passageiros' => 'required|integer',
            'categoria_cnh_id' => 'required|exists:categoria_cnhs,id',
            'ano_fabricacao' => 'required',
            'ano_modelo' => 'required',
            'data_aquisicao' => 'required',
            'departamento_id' => 'required|exists:departamentos,id',
        ];

        $feedbacks = [
            'required' => 'O campo :attribute deve ser preenchido',
            'placa.min' => 'O campo placa deve ter no mínimo 7 caracteres',
            'placa.max' => 'O campo placa deve ter no máximo 7 caracteres',
            'capacidade_passageiros.integer' => 'O campo peso deve ser um número inteiro',
            'tipo_id.exists' => 'O tipo informado não existe',
            'marca_id.exists' => 'A marca informada não existe',
            'cor_id.exists' => 'A cor informada não existe',
            'modelo_id.exists' => 'O modelo informado não existe',
            'tipo_medida_id.exists' => 'O tipo de medida informado não existe',
            'combustivel_id.exists' => 'O combustivel informado não existe',
            'categoria_cnh_id.exists' => 'A categoria da cnh informada não existe',
            'departamento_id.exists' => 'O departamento informado não existe',
        ];

        $request->validate($regras, $feedbacks);

        Veiculo::create($request->all());

        return redirect()->route('veiculo.index');
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
    public function update(Request $request, Veiculo $veiculo)
    {
        //
        $veiculo->update($request->all());

        return view('veiculo.show', ['veiculo' => $veiculo] );
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

        return redirect()->route('veiculo.index');
    }
}
