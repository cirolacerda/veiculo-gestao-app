<h1>Cadastrar Marca</h1>

<form action={{ route('marca.cadastrar') }} method="POST">
@csrf
<input placeholder="Insira a marca" type="text" name="nome" id="nome">
<br/>
<br/>

<button type="submit">Cadastrar</button>

</form>
