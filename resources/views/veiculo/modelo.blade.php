<h1>Cadastrar Modelo</h1>

<form action={{ route('modelo.cadastrar') }} method="POST">
    @csrf
    <br />
    <select name="marca_id" id="marca_id">
        <option value="">Selecione a marca </option>

        @foreach ($marcas as $marca)
            <option value="{{ $marca->id }}"> {{ $marca->nome }} </option>
        @endforeach

    </select>
    <br />
    <br />
    <input placeholder="Insira o nome do modelo" name="nome" id="nome" type="text" />
    <br />
    <br />

    <button type="submit">Cadastrar</button>
</form>
