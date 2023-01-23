@if (isset($motorista->id))
    <form action={{ route('motorista.update', ['motorista' => $motorista->id]) }} method="post">
        @method('PUT')
    @else
        <form action={{ route('motorista.store') }} method="post">
@endif
@csrf
<x-text-input placeholder="Insira o nome" name="nome" id="nome" value="{{ $motorista->nome ?? old('nome') }}"
    type="text" />
<x-input-error :messages="$errors->get('nome')" class="mt-2" />
<br />
<x-text-input placeholder="Insira a matricula" name="matricula" id="matricula"
    value="{{ $motorista->matricula ?? old('matricula') }}" type="text" />
<x-input-error :messages="$errors->get('matricula')" class="mt-2" />
<br />
<x-text-input placeholder="Insira o número CNH" name="registro_habilitacao" id="registro_habilitacao"
    value="{{ $motorista->registro_habilitacao ?? old('registro_habilitacao') }}" type="text" />
<x-input-error :messages="$errors->get('registro_habilitacao')" class="mt-2" />
<br />
<select name="categoria_cnh_id" id="categoria_cnh_id"
    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

    <option value="">Selecione a categoria da CNH </option>

    @foreach ($categorias_cnh as $categoria_cnh)
        <option value="{{ $categoria_cnh->id }}"> @selected(($motorista->categoria_cnh_id ?? old('categoria_cnh_id')) == $categoria_cnh->id) {{ $categoria_cnh->nome }} </option>
    @endforeach

</select>
<x-input-error :messages="$errors->get('categoria_cnh_id')" class="mt-2" />
<br />



<x-text-input placeholder="Insira a validade da CNH " name="validade_cnh" id="validade_cnh" type="date"
    value="{{ $motorista->validade_cnh ?? old('validade_cnh') }}" />
<x-input-error :messages="$errors->get('validade_cnh')" class="mt-2" />
<br />
<x-text-input placeholder="Insira a data da primeira habilitação" name="primeira_habilitacao" id="primeira_habilitacao"
    type="date" value="{{ $motorista->primeira_habilitacao ?? old('primeira_habilitacao') }}" />
<x-input-error :messages="$errors->get('primeira_habilitacao')" class="mt-2" />
<br />

<select name="departamento_id" id="departamento_id"
    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
    <option value="">Selecione o departamento</option>

    @foreach ($departamentos as $departamento)
        <option value="{{ $departamento->id }}" @selected(($motorista->departamento_id ?? old('departamento_id')) == $departamento->id)>
            {{ $departamento->nome }} </option>
    @endforeach

</select>
<x-input-error :messages="$errors->get('departamento_id')" class="mt-2" />

<br />
<br />

@if (isset($motorista->id))
    <x-primary-button class="ml-4">
        {{ __('Atualizar') }}
    </x-primary-button>
@else
    <x-primary-button class="ml-4">
        {{ __('Cadastrar') }}
    </x-primary-button>
@endif



</form>
