<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Veículo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @component('veiculo._components.form_create_edit',
                        [
                            'veiculo' => $veiculo,
                            'tipos' => $tipos,
                            'marcas' => $marcas,
                            'modelos' => $modelos,
                            'cores' => $cores,
                            'tipo_medidas' => $tipo_medidas,
                            'combustiveis' => $combustiveis,
                            'categoria_cnhs' => $categoria_cnhs,
                            'departamentos' => $departamentos,
                        ])
                    @endcomponent

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
