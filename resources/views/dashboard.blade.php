<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Trabalhos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    {{-- <div id="container-message" class="mb-4 text-center mb-4 text-center hidden">
                        <div id="content-message-success" class="border border-green-200 hidden">
                            <div class="bg-green-100 py-3">
                                <span class="py-3 font-medium text-green-600">
                                </span>
                            </div>
                        </div>
                        <div id="content-message-error" class="border border-red-200 hidden">
                            <div class="bg-red-100 py-3">
                                <span class="py-3 font-medium text-red-600">
                                </span>
                            </div>
                        </div>
                    </div> --}}

                    <h1 class="text-lg mb-5 font-black">Filtros</h1>
                    <form id="form-filter" action="{{route('trabalhos.filtroDashboard')}}" method="POST">
                        @csrf
                        <div class="flex mb-4">
                            <div class="w-full md:w-3/5 px-3 mb-6 md:mb-0">
                                <label class="block tracking-wide font-black text-sm font-bold mb-2" for="titulo">
                                    Título
                                </label>
                                <input
                                    class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="titulo" name="titulo" type="text" placeholder="Título do trabalho">
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0 ">
                                <label class="block tracking-wide font-black text-sm font-bold mb-2" for="tipo">
                                    Tipo
                                </label>
                                <div class="relative">
                                    <select
                                        class="block appearance-none w-full bg-white border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="tipo" name="tipo">
                                        <option selected disabled>Escolha um tipo</option>
                                        <option>TCC</option>
                                        <option>Artigo</option>
                                        <option>Trabalho acadêmico</option>
                                    </select>
                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">

                                    </div>
                                </div>
                            </div>
                            <div class="w-20 md:w-1/4 px-3 mb-6 md:mb-0">
                                <label class="block tracking-wide font-black text-sm font-bold mb-2" for="ano">
                                    Ano
                                </label>
                                <input
                                    class="appearance-none block w-28 bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="ano" name="ano" type="text" placeholder="2017" maxlength="4"
                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                            </div>
                        </div>
                    </form>
                    <hr>
                    <div class="overflow-auto">
                        <table class="w-full divide-y">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3">
                                        <input class="form-checkbox shadow-md cursor-pointer" type="checkbox"
                                            name="select-all" id="select-all">
                                    </th>
                                    <th class="px-6 py-3 text-left">Título</th>
                                    <th class="px-6 py-3 text-left">Autor</th>
                                    <th class="px-6 py-3 text-left">Tipo</th>
                                    <th class="px-6 py-3 text-left whitespace-nowrap">Ano da publicação</th>
                                </tr>
                            </thead>
                            <tbody id="body-table">
                                @foreach ($trabalhos as $trabalho)
                                    <tr id="trabalho-id-{{ $trabalho->id }}"
                                        class="cursor-pointer hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-200 focus:ring-opacity-50">
                                        <th class="px-6 py-4">
                                            <input class="check-one shadow-md cursor-pointer" type="checkbox" name="ids"
                                                value="{{ $trabalho->id }}">
                                        </th>
                                        <td class="px-6 py-4 text-base">{{ $trabalho->titulo }}</td>
                                        <td class="px-6 py-4 text-base">{{ $trabalho->autor }}</td>
                                        <td class="px-6 py-4 text-base whitespace-nowrap">{{ $trabalho->tipo }}</td>
                                        <td class="px-6 py-4 text-base">{{ date('Y', strtotime($trabalho->data)) }}
                                        </td>
                                        <td class="px-6 py-4 text-base flex flex-row">
                                            <button type="button" onclick="editarTrabalho({{ $trabalho->id }})">
                                                <x-icon-edit />
                                            </button>
                                            <button data-modal-toggle="delete-modal-confirm" data-modal-action="open"
                                                type="submit" onclick="excluirTrabalho({{ $trabalho->id }})">
                                                <x-icon-delete />
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                   <div class="pt-60 pb-20">
                    {{ isset($filtros) ? $trabalhos->appends($filtros)->links() : $trabalhos->links() }}
                </div>
                </div>
            </div>
        </div>
    </div>
    <x-button-delete-selected />
    <x-delete-confirm-modal />
</x-app-layout>
