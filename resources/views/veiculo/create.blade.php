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

                    <form action={{ route('veiculos.store') }} method="post">
                        @csrf
                        <x-text-input placeholder="Insira a Placa" value="{{ old('placa') }}" type="text" name="placa"
                            id="placa" />
                        <x-input-error :messages="$errors->get('placa')" class="mt-2" />
                        <br />
                        <select name="tipo_id" id="tipo_id"
                            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="">Selecione o tipo </option>

                            @foreach ($tipos as $tipo)
                                <option value="{{ $tipo->id }}" @selected(old('tipo_id') == $tipo->id)> {{ $tipo->nome }}
                                </option>
                            @endforeach

                        </select>
                        <x-input-error :messages="$errors->get('tipo_id')" class="mt-2" />
                        <br />
                        <select name="marca_id" id="marca_id"
                            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="">Selecione a marca </option>

                            @foreach ($marcas as $marca)
                                <option value="{{ $marca->id }}" @selected(old('marca_id') == $marca->id)> {{ $marca->nome }}
                                </option>
                            @endforeach

                        </select>
                        <x-input-error :messages="$errors->get('marca_id')" class="mt-2" />
                        <br />
                        <select name="modelo_id" id="modelo_id"
                            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="">Selecione o modelo </option>

                            @foreach ($modelos as $modelo)
                                <option value="{{ $modelo->id }}" @selected(old('modelo_id') == $modelo->id)> {{ $modelo->nome }}
                                </option>
                            @endforeach

                        </select>
                        <x-input-error :messages="$errors->get('modelo_id')" class="mt-2" />
                        <br />
                        <select name="cor_id" id="cor_id"
                            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="">Selecione a cor </option>

                            @foreach ($cores as $cor)
                                <option value="{{ $cor->id }}" @selected(old('cor_id') == $cor->id)> {{ $cor->nome }}
                                </option>
                            @endforeach

                        </select>
                        <x-input-error :messages="$errors->get('cor_id')" class="mt-2" />
                        <br />
                        <x-text-input placeholder="Número do Chassi" value="{{ old('chassi') }}" type="text"
                            name="chassi" id="chassi" />
                        <x-input-error :messages="$errors->get('chassi')" class="mt-2" />
                        <br />
                        <x-text-input placeholder="Renavam" value="{{ old('renavam') }}" type="text" name="renavam"
                            id="renavam" />
                        <x-input-error :messages="$errors->get('renavam')" class="mt-2" />
                        <br />
                        <select name="tipo_medida_id" id="tipo_medida_id"
                            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="">Selecione o tipo de medida </option>

                            @foreach ($tipo_medidas as $tipo_medida)
                                <option value="{{ $tipo_medida->id }}" @selected(old('tipo_medida_id') == $tipo_medida->id)>
                                    {{ $tipo_medida->nome }} </option>
                            @endforeach

                        </select>
                        <x-input-error :messages="$errors->get('tipo_medida_id')" class="mt-2" />
                        <br />
                        <x-text-input placeholder="Medida Atual" value="{{ old('medida_atual') }}" type="text"
                            name="medida_atual" id="medida_atual" />
                        <x-input-error :messages="$errors->get('medida_atual')" class="mt-2" />
                        <br />
                        <select name="combustivel_id" id="combustivel_id"
                            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="">Selecione o combústivel padrão </option>

                            @foreach ($combustiveis as $combustivel)
                                <option value="{{ $combustivel->id }}" @selected(old('combustivel_id') == $combustivel->id)>
                                    {{ $combustivel->nome }} </option>
                            @endforeach

                        </select>
                        <x-input-error :messages="$errors->get('combustivel_id')" class="mt-2" />
                        <br />
                        <x-text-input placeholder="Capacidade do Tanque" value="{{ old('capacidade_tanque') }}"
                            type="text" name="capacidade_tanque" id="capacidade_tanque" />
                        <x-input-error :messages="$errors->get('capacidade_tanque')" class="mt-2" />
                        <br />
                        <x-text-input placeholder="Capacidade de Passageiros"
                            value="{{ old('capacidade_passageiros') }}" type="text" name="capacidade_passageiros"
                            id="capacidade_passageiros" />
                        <x-input-error :messages="$errors->get('capacidade_passageiros')" class="mt-2" />

                        <br />
                        <select name="categoria_cnh_id" id="categoria_cnh_id"
                            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="">Selecione a categoria da CNH </option>

                            @foreach ($categoria_cnhs as $categoria_cnh)
                                <option value="{{ $categoria_cnh->id }}" @selected(old('categoria_cnh_id') == $categoria_cnh->id)>
                                    {{ $categoria_cnh->nome }} </option>
                            @endforeach

                        </select>
                        <x-input-error :messages="$errors->get('categoria_cnh_id')" class="mt-2" />

                        <br />
                        <x-text-input placeholder="Ano de Fabricação" value="{{ old('ano_fabricacao') }}"
                            type="number" name="ano_fabricacao" id="ano_fabricacao" />
                        <x-input-error :messages="$errors->get('ano_fabricacao')" class="mt-2" />

                        <br />
                        <x-text-input placeholder="Ano do Modelo" value="{{ old('ano_modelo') }}" type="number"
                            name="ano_modelo" id="ano_modelo" />
                        <x-input-error :messages="$errors->get('ano_modelo')" class="mt-2" />

                        <br />
                        <x-text-input placeholder="Data de Aquisição" value="{{ old('data_aquisicao') }}"
                            type="date" name="data_aquisicao" id="data_aquisicao" />
                        <x-input-error :messages="$errors->get('data_aquisicao')" class="mt-2" />

                        <br />
                        <select name="departamento_id" id="departamento_id"
                            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="">Selecione o departamento</option>

                            @foreach ($departamentos as $departamento)
                                <option value="{{ $departamento->id }}" @selected(old('departamento_id') == $departamento->id)>
                                    {{ $departamento->nome }} </option>
                            @endforeach

                        </select>
                        <x-input-error :messages="$errors->get('departamento_id')" class="mt-2" />

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
