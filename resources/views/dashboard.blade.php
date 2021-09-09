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
                    <h1 class="text-lg mb-5 font-black">Filtros</h1>
                    <form action="">
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
                                        <input class="form-checkbox" type="checkbox" name="select_all" id="select_all">
                                    </th>
                                    <th class="px-6 py-3 text-left">Título</th>
                                    <th class="px-6 py-3 text-left">Autor</th>
                                    <th class="px-6 py-3 text-left">Tipo</th>
                                    <th class="px-6 py-3 text-left whitespace-nowrap">Ano da publicação</th>
                                </tr>
                            </thead>
                            <tbody id="body-table">
                                @foreach ($trabalhos as $key => $trabalho)
                                    <tr>
                                        <th class="px-6 py-4">
                                            <input class="check-one" type="checkbox" name="items[]">
                                        </th>
                                        <td class="px-6 py-4">{{ $trabalho->titulo }}</td>
                                        <td class="px-6 py-4">{{ $trabalho->autor }}</td>
                                        <td class="px-6 py-4">{{ $trabalho->tipo }}</td>
                                        <td class="px-6 py-4">{{ date('Y', strtotime($trabalho->data)) }}</td>
                                        <td class="px-6 py-4 flex flex-row">
                                            <a href="{{ route('trabalhos.edit', $trabalho->id) }}">
                                                <x-icon-edit />
                                            </a>
                                            <a href="#" id="btn-table-delete-{{$key}}">
                                                <x-icon-delete />
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <x-button-delete-selected />
    <x-modal-delete-confirm/>
    
</x-app-layout>
