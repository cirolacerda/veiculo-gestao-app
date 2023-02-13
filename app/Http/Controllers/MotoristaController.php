<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Motorista;
use App\Models\Veiculo\CategoriaCnh;
use App\Http\Requests\MotoristaRequest;

class MotoristaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $motoristas = Motorista::all();

        return view('motorista.index', ['motoristas' => $motoristas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorias_cnh = CategoriaCnh::all();

        $departamentos = Departamento::all();

        return view('motorista.create', ['categorias_cnh' => $categorias_cnh, 'departamentos' => $departamentos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MotoristaRequest $request)
    {
        //
        Motorista::create($request->all());

        return redirect()->route('motoristas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Motorista $motorista)
    {
        //
        return view('motorista.show', ['motorista' => $motorista]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Motorista $motorista)
    {
        //
        $categorias_cnh = CategoriaCnh::all();
        $departamentos = Departamento::all();

        return view('motorista.edit', ['motorista' => $motorista, 'categorias_cnh' => $categorias_cnh, 'departamentos' => $departamentos ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MotoristaRequest $request, Motorista $motorista)
    {
        //
        $motorista->update($request->all());

        return view('motorista.show', ['motorista' => $motorista]);
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
        Motorista::destroy($id);

        return redirect()->route('motoristas.index');
    }
}
