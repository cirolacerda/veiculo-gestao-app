<h1>Retirar Veículo</h1>

<form action={{ route('retirada.cadastrar') }} method="POST">
    @csrf
    <br/>
    <input placeholder="Veiculo ID" name="veiculo_id" id="veiculo_id" type="text"/>
    <br/>
    <input placeholder="Motorista ID" name="motorista_id" id="motorista_id" type="text"/>
    <br/>
    <input placeholder="Departamento ID" name="departamento_id" id="departamento_id" type="text"/>
    <br/>
    <input placeholder="Data da Retirada" name="data_retirada" id="data_retirada" type="date"/>
    <br/>
    <input placeholder="Hora da Retirada" name="hora_retirada" id="hora_retirada" type="time"/>
    <br/>
    <input placeholder="Medida de Saída" name="medida_saida" id="medida_saida" type="text"/>
    <br/>
    <textarea placeholder="Destino" name="destino" id="destino"></textarea>
    <br/>
    <textarea placeholder="Observação" name="observacao" id="observacao"></textarea>
    <br/>
    <br/>

    <button type="submit">Cadastrar</button>
</form>
