@if (isset($departamento->id))
    <form action={{ route('departamentos.update', ['departamento' => $departamento->id]) }} method="post">
        @method('PUT')
    @else
        <form action={{ route('departamentos.store') }} method="post">
@endif
@csrf
<x-text-input placeholder="Insira o nome do departament" name="nome" id="nome"
    value="{{ $departamento->nome ?? old('nome') }}" type="text" />
<x-input-error :messages="$errors->get('nome')" class="mt-2" />
<br />
<x-text-input placeholder="Insira a sigla do departamento" name="sigla" id="sigla"
    value="{{ $departamento->sigla ?? old('sigla') }}" type="text" />
<x-input-error :messages="$errors->get('sigla')" class="mt-2" />

<br />
<br />

@if (isset($departamento->id))
    <x-primary-button class="ml-4">
        {{ __('Atualizar') }}
    </x-primary-button>
@else
    <x-primary-button class="ml-4">
        {{ __('Cadastrar') }}
    </x-primary-button>
@endif



</form>
