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
                    <div class="container-filter">
                        <h1 class="h1-list-works mb-5 font-black">Filtros</h1>
                        <form action="">
                            @csrf
                            <div class="flex mb-4">
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block tracking-wide font-black text-xs font-bold mb-2" for="grid-city">
                                        Título
                                    </label>
                                    <input
                                        class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-city" type="text" placeholder="Título do trabalho">
                                </div>
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0 ">
                                    <label class="block tracking-wide font-black text-xs font-bold mb-2"
                                        for="grid-state">
                                        Tipo
                                    </label>
                                    <div class="relative">
                                        <select
                                            class="block appearance-none w-full bg-white border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            id="grid-state">
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
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block tracking-wide font-black text-xs font-bold mb-2" for="grid-zip">
                                        Ano
                                    </label>
                                    <input
                                        class="appearance-none block w-20 bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
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
                                            <input type="checkbox" name="select_all" id="select_all">
                                        </th>
                                        <th class="px-6 py-3 text-left">Título</th>
                                        <th class="px-6 py-3 text-left">Autor</th>
                                        <th class="px-6 py-3 text-left">Tipo</th>
                                        <th class="px-6 py-3 text-left">Ano da publicação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($trabalhos as $trabalho)
                                        <tr>
                                            <th class="px-6 py-4">
                                                <input class="shadow-2xl" type="checkbox" name="select_one"
                                                    id="select_one">
                                            </th>
                                            <td class="px-6 py-4">{{ $trabalho->titulo }}</td>
                                            <td class="px-6 py-4">{{ $trabalho->autor }}</td>
                                            <td class="px-6 py-4">{{ $trabalho->tipo }}</td>
                                            <td class="px-6 py-4">{{ date('Y', strtotime($trabalho->data)) }}
                                            </td>
                                            <td class="px-6 py-4">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 m-2"
                                                        viewBox="0 0 20 20" fill="#35CD4D">
                                                        <path
                                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                        <path fill-rule="evenodd"
                                                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </a>
                                            </td>
                                           
                                                <td class="px-6 py-4"> 
                                                    <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 m-2"
                                                        viewBox="0 0 20 20" fill="#35CD4D">
                                                        <path fill-rule="evenodd"
                                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                            clip-rule="evenodd" />
                                                    </svg>
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
    </div>
</x-app-layout>
