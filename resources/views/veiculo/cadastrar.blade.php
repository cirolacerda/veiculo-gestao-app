<h1>Cadastrar Veículo</h1>

<form action={{ route('veiculo.cadastrar')}} method="post">
    @csrf
    <input placeholder="Insira a Placa" type="text" name="placa" id="placa">
    <br/>
    <select name="tipo_id" id="tipo_id">
        <option value="">Selecione o tipo </option>

        @foreach ($tipos as $tipo)
            <option value="{{ $tipo->id }}"> {{ $tipo->nome }} </option>
        @endforeach

    </select>
    <br/>
    <select name="marca_id" id="marca_id">
        <option value="">Selecione a marca  </option>

        @foreach ($marcas as $marca)
            <option value="{{ $marca->id }}"> {{ $marca->nome }} </option>
        @endforeach

    </select>
    <br/>
    <select name="modelo_id" id="modelo_id">
        <option value="">Selecione o modelo  </option>

        @foreach ($modelos as $modelo)
            <option value="{{ $modelo->id }}"> {{ $modelo->nome }}</option>
        @endforeach

    </select>
    <br/>
    <select name="cor_id" id="cor_id">
        <option value="">Selecione a cor  </option>

        @foreach ($cores as $cor)
        <option value="{{ $cor->id }}"> {{ $cor->nome }} </option>
        @endforeach

    </select>
    <br/>
    <input placeholder="Número do Chassi" type="text" name="chassi" id="chassi">
    <br/>
    <input placeholder="Renavam" type="text" name="renavam" id="renavam">
    <br/>
    <select name="tipo_medida_id" id="tipo_medida_id">
        <option value="">Selecione o tipo de medida  </option>

        @foreach ($tipo_medidas as $tipo_medida)
        <option value="{{ $tipo_medida->id }}"> {{ $tipo_medida->nome }} </option>
        @endforeach

    </select>
    <br/>
    <input placeholder="Medida Atual" type="text" name="medida_atual" id="medida_atual">
    <br/>
    <select name="combustivel_id" id="combustivel_id">
        <option value="">Selecione o combústivel padrão </option>

        @foreach ($combustiveis as $combustivel)
        <option value="{{ $combustivel->id }}"> {{ $combustivel->nome }} </option>
        @endforeach

    </select>
    <br/>
    <input placeholder="Capacidade do Tanque" type="text" name="capacidade_tanque" id="capacidade_tanque">
    <br/>
    <input placeholder="Capacidade de Passageiros" type="text" name="capacidade_passageiros" id="capacidade_passageiros">
    <br/>
    <select name="categoria_cnh_id" id="categoria_cnh_id">
        <option value="">Selecione a categoria da CNH </option>

        @foreach ($categoria_cnhs as $categoria_cnh)
        <option value="{{ $categoria_cnh->id }}"> {{ $categoria_cnh->nome }} </option>
        @endforeach

    </select>
    <br/>
    <input placeholder="Ano de Fabricação" type="number" name="ano_fabricacao" id="ano_fabricacao">
    <br/>
    <input placeholder="Ano do Modelo" type="number" name="ano_modelo" id="ano_modelo">
    <br/>
    <input placeholder="Data de Aquisição" type="date" name="data_aquisicao" id="data_aquisicao">
    <br/>
    <select name="departamento_id" id="departamento_id">
        <option value="">Selecione o departamento</option>

        @foreach ($departamentos as $departamento)
        <option value="{{ $departamento->id }}"> {{ $departamento->nome }} </option>
        @endforeach

    </select>
    <br/>
    <br/>
    <button type="submit">Cadastrar</button>

</form>

