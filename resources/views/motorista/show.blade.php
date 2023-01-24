<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Visualizar Motorista') }}
        </h2>
    </x-slot>



    <!-- Table -->
    <div class="overflow-x-auto">
        <div class="min-w-screen min-h-screen flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-full lg:w-5/6">
                <div class="flex items-end justify-end">
                    <a href="{{ route('motoristas.create') }}">
                        <x-primary-button>
                            {{ __('Cadastrar') }}
                        </x-primary-button>
                    </a>

                </div>

                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">CAMPOS</th>
                                <th class="py-3 px-6 text-left">DADOS</th>

                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">

                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">NOME:</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{ $motorista->nome }}</span>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">MATRICULA:</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span>{{ $motorista->matricula }}</span>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">Nº. CNH:</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span>{{ $motorista->registro_habilitacao }}</span>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">CATEGORIA CNH:</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span>{{ $motorista->categoriaCnh->nome }}</span>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">VALIDADE:</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span>{{ $motorista->validade_cnh }}</span>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">1ª HABILITAÇÃO:</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span>{{ $motorista->primeira_habilitacao }} </span>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">VALIDADE:</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span>{{ $motorista->validade_cnh }} </span>
                                    </div>
                                </td>
                            </tr>

                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">DEPARTAMENTO:</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span>{{ $motorista->departamento->nome }} </span>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">STATUS:</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span
                                        class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">Active</span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">DATA DA CRIAÇÃO:</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span>{{ $motorista->created_at }} </span>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">DATA DA ÚLTIMA ATUALIZAÇÃO:</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span>{{ $motorista->updated_at }} </span>
                                    </div>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
