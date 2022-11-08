<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Veículo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action={{ route('veiculo.cadastrar') }} method="post">
                        @csrf
                        <x-text-input placeholder="Insira a Placa" type="text" name="placa" id="placa" />
                        <br />
                        <select name="tipo_id" id="tipo_id"
                            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="">Selecione o tipo </option>

                            @foreach ($tipos as $tipo)
                                <option value="{{ $tipo->id }}"> {{ $tipo->nome }} </option>
                            @endforeach

                        </select>
                        <br />
                        <select name="marca_id" id="marca_id"
                            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="">Selecione a marca </option>

                            @foreach ($marcas as $marca)
                                <option value="{{ $marca->id }}"> {{ $marca->nome }} </option>
                            @endforeach

                        </select>
                        <br />
                        <select name="modelo_id" id="modelo_id"
                            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="">Selecione o modelo </option>

                            @foreach ($modelos as $modelo)
                                <option value="{{ $modelo->id }}"> {{ $modelo->nome }}</option>
                            @endforeach

                        </select>
                        <br />
                        <select name="cor_id" id="cor_id"
                            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="">Selecione a cor </option>

                            @foreach ($cores as $cor)
                                <option value="{{ $cor->id }}"> {{ $cor->nome }} </option>
                            @endforeach

                        </select>
                        <br />
                        <x-text-input placeholder="Número do Chassi" type="text" name="chassi" id="chassi" />
                        <br />
                        <x-text-input placeholder="Renavam" type="text" name="renavam" id="renavam" />
                        <br />
                        <select name="tipo_medida_id" id="tipo_medida_id"
                            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="">Selecione o tipo de medida </option>

                            @foreach ($tipo_medidas as $tipo_medida)
                                <option value="{{ $tipo_medida->id }}"> {{ $tipo_medida->nome }} </option>
                            @endforeach

                        </select>
                        <br />
                        <x-text-input placeholder="Medida Atual" type="text" name="medida_atual" id="medida_atual" />
                        <br />
                        <select name="combustivel_id" id="combustivel_id"
                            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="">Selecione o combústivel padrão </option>

                            @foreach ($combustiveis as $combustivel)
                                <option value="{{ $combustivel->id }}"> {{ $combustivel->nome }} </option>
                            @endforeach

                        </select>
                        <br />
                        <x-text-input placeholder="Capacidade do Tanque" type="text" name="capacidade_tanque"
                            id="capacidade_tanque" />
                        <br />
                        <x-text-input placeholder="Capacidade de Passageiros" type="text"
                            name="capacidade_passageiros" id="capacidade_passageiros" />
                        <br />
                        <select name="categoria_cnh_id" id="categoria_cnh_id"
                            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="">Selecione a categoria da CNH </option>

                            @foreach ($categoria_cnhs as $categoria_cnh)
                                <option value="{{ $categoria_cnh->id }}"> {{ $categoria_cnh->nome }} </option>
                            @endforeach

                        </select>
                        <br />
                        <x-text-input placeholder="Ano de Fabricação" type="number" name="ano_fabricacao"
                            id="ano_fabricacao" />
                        <br />
                        <x-text-input placeholder="Ano do Modelo" type="number" name="ano_modelo" id="ano_modelo" />
                        <br />
                        <x-text-input placeholder="Data de Aquisição" type="date" name="data_aquisicao"
                            id="data_aquisicao" />
                        <br />
                        <select name="departamento_id" id="departamento_id"
                            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="">Selecione o departamento</option>

                            @foreach ($departamentos as $departamento)
                                <option value="{{ $departamento->id }}"> {{ $departamento->nome }} </option>
                            @endforeach

                        </select>
                        <br />
                        <br />

                        <x-primary-button class="ml-4">
                            {{ __('Cadastrar') }}
                        </x-primary-button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
