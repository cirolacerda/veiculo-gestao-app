<h1>Cadastrar Tipo</h1>

<form action={{ route('tipo.cadastrar') }} method="POST">
    @csrf
    <input placeholder="Insira o tipo" type="text" name="nome" id="nome">
    <br />
    <br />

    <button type="submit">Cadastrar</button>

</form>
