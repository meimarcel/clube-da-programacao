<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Trabalhos') }}

            <x-button-add href="{{ route('trabalhos.create') }}" class="float-right"/>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Session message -->
                    <x-message class="mb-4 text-center"/>

                    <h1 class="text-lg mb-5 font-black">Filtros</h1>
                    <form id="form-filter" action="{{ route('trabalhos.filtroDashboard') }}" method="POST">
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


                                <label for="tipo"
                                    class="block tracking-wide font-black text-sm font-bold mb-2">Tipo</label>
                                <select name="tipo" id="tipo"
                                    class="block appearance-none w-full bg-white border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 cursor-pointer">
                                    <option
                                        {{ isset($filtros['tipo']) ? ($filtros['tipo'] == '' ? 'selected' : '') : 'selected' }}
                                        value="">Todos os tipo...</option>
                                    <option
                                        {{ isset($filtros['tipo']) ? ($filtros['tipo'] == 'tcc' ? 'selected' : '') : '' }}
                                        value="tcc">
                                        TCC</option>
                                    <option
                                        {{ isset($filtros['tipo']) ? ($filtros['tipo'] == 'artigo' ? 'selected' : '') : '' }}
                                        value="artigo">Artigo</option>
                                    <option
                                        {{ isset($filtros['tipo']) ? ($filtros['tipo'] == 'trabalho academico' ? 'selected' : '') : '' }}
                                        value="trabalho academico">Trabalho acadêmico</option>
                                </select>

                            </div>
                            <div class="w-20 md:w-1/4 px-3 mb-6 md:mb-0">
                                <label class="block tracking-wide font-black text-sm font-bold mb-2" for="ano">
                                    Ano
                                </label>
                                <input
                                    class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="ano" name="ano" type="text" placeholder="{{ date('Y') }}" maxlength="4"
                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                            </div>
                            <div class="w-20 md:w-1/4 px-3 mb-6 md:mb-0">
                                <label class="block tracking-wide font-black text-sm font-bold mb-2">
                                    &nbsp;
                                </label>
                                <x-button-filter type="submit" class="appearance-none block w-28 bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"/>
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
                                            name="select-all" id="select-all" {{$trabalhos->total()==0?'disabled':''}}>
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
                                            <a href="{{ route('trabalhos.edit', ['id' =>  $trabalho->id] ) }}">
                                                <button type="button">
                                                    <x-icon-edit />
                                                </button>
                                            </a>
                                            <button data-modal-toggle="delete-modal-confirm" data-modal-action="open"
                                                type="submit" onclick="excluirTrabalho({{ $trabalho->id}})">
                                                <x-icon-delete />
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                @if ($trabalhos->total() == 0)
                                    @if (isset($filtros))
                                        <td colspan="5">
                                            <div class="pt-20 pb-5 text-center">
                                                <p class="font-semibold mb-5">Nenhum trabalho foi encontrado.</p>
                                                <button onclick="history.back()"
                                                    class="bg-blue-500 hover:bg-blue-700 text-white text-center py-2 px-4 rounded uppercase">voltar</button>
                                            </div>
                                        </td>
                                    @else
                                        <td colspan="5">
                                            <div class="pt-20 pb-5 text-center">
                                                <p class="font-semibold mb-5">Nenhum trabalho foi adicionado.</p>
                                                <a href="{{ route('trabalhos.create') }}"
                                                    class="bg-green-500 hover:bg-green-700 text-white text-center py-2 px-4 rounded uppercase">adicionar</a>
                                            </div>
                                        </td>
                                    @endif
                                @endif

                            </tbody>
                        </table>
                    </div>
                    <div class="pt-10">
                        {{ isset($filtros) ? $trabalhos->appends($filtros)->links() : $trabalhos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if ($trabalhos->total()>0)
        <x-button-delete-selected />
        <x-delete-confirm-modal />
    @endif
    
</x-app-layout>
