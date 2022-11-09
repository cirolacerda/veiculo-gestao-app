<h1>Cadastrar Cor</h1>

<form action={{ route('cor.cadastrar') }} method="POST">
    @csrf
    <input placeholder="Insira o nome da Cor" type="text" name="nome" id="nome" />
    <br />
    <br />

    <button type="submit">Cadastrar</button>

</form>
