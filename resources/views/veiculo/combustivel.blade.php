<h1>Cadastrar Combustível</h1>

<form action={{ route('combustivel.cadastrar') }} method="POST">
    @csrf
    <input placeholder="Insira o nome do Combustível" type="text" name="nome" id="nome"/>
    <br/>
    <br/>

    <button type="submit">Cadastrar</button>


</form>
