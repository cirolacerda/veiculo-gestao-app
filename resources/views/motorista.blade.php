<h1>Cadastrar Motorista</h1>

<form action={{ route('motorista.cadastrar') }} method="POST">
    @csrf
    <input placeholder="Insira o nome" name="nome" id="nome" type="text">
    <br/>
    <input placeholder="Insira a matricula" name="matricula" id="matricula" type="text">
    <br/>
    <input placeholder="Insira o número CNH" name="registro_habilitacao" id="registro_habilitacao" type="text">
    <br/>
    <select name="categoria_cnh" id="categoria_cnh">
        <option value="">Selecione a categoria  </option>

        @foreach ($categorias_cnh as $categoria_cnh)
            <option value="{{$categoria_cnh->id}}"> {{$categoria_cnh->nome}} </option>
        @endforeach


    </select>
    <br/>
    <input placeholder="Insira a validade da CNH " name="validade_cnh" id="validade_cnh" type="date">
    <br/>
    <input placeholder="Insira a data da primeira habilitação" name="primeira_habilitacao" id="primeira_habilitacao" type="date">
    <br/>
    <select name="departamento" id="departamento">
        <option value="">Selecione o departamento  </option>

        @foreach ($departamentos as $departamento)
            <option value="{{$departamento->id}}"> {{$departamento->nome}} - {{$departamento->sigla}} </option>
        @endforeach

    </select>
    <br/>
    <br/>

    <button type="submit">Cadastrar</button>

</form>
