<h1>Cadastrar Departamento</h1>

<form action={{ route('departamento.cadastrar') }} method="POST">
    @csrf
    <input placeholder="Insira o nome do departamento" name="nome" id="nome" type="text"/>
    <br/>
    <input placeholder="Insira a sigla do departamento" name="sigla" id="sigla" type="text"/>
    <br/>
    <br/>
    <button type="submit">Cadastrar</button>
</form>
