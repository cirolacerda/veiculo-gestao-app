<h1>Cadastrar Veículo</h1>

<form action="veiculo.salvar" method="post">

    <input placeholder="Insira a Placa" type="text" name="placa" id="placa">
    <br>
    <select name="tipo" id="tipo">
        <option value="0">Selecione o tipo </option>
        <option value="1">AMBULANCIA </option>
        <option value="2">AUTOMÓVEL </option>
    </select>
    <br>
    <select name="marca" id="marca">
        <option value="0">Selecione a marca  </option>
        <option value="1">HONDA </option>
        <option value="2">FIAT </option>
    </select>
    <br>
    <select name="modelo" id="modelo">
        <option value="0">Selecione o modelo  </option>
        <option value="1">BROS 160 </option>
        <option value="2">GOL G VI </option>
    </select>
    <br>
    <select name="cor" id="cor">
        <option value="0">Selecione a cor  </option>
        <option value="1">AMARELO </option>
        <option value="2">BRANCO </option>
    </select>
    <br>
    <input placeholder="Número do Chassi" type="text" name="chassi" id="chassi">
    <br>
    <input placeholder="Renavam" type="text" name="renavam" id="renavam">
</form>

