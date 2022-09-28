<h1>Cadastrar Tipo Medida</h1>

<form action={{ route('tipo.medida.cadastrar') }} method="POST">
    @csrf
    <input placeholder="Insira o tipo de medida" type="text" name="nome" id="nome">
    <br/>
    <br/>

    <button type="submit">Cadastrar</button>

</form>
