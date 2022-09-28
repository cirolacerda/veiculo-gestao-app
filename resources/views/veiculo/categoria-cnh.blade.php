<h1>Cadastrar Categoria CNH</h1>

<form action={{ route('categoria.cnh.cadastrar') }} method="POST">
    @csrf
    <input placeholder="Insira o nome da Categoria da CNH" name="nome" id="nome" type="text"/>
    <br/>
    <br/>
    <button type="submit">Cadastrar</button>
</form>
