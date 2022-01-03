<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $trabalho->titulo }}

            <x-button-add href="{{ route('trabalhos.create') }}" class="float-right" />
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full">
                                        <tbody>
                                            <tr class="bg-gray-100">
                                                <td
                                                    class="w-44 px-6 py-4 whitespace-nowrap text-base font-semibold text-gray-900">
                                                    Título</td>
                                                <td
                                                    class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap text-left">
                                                    {{ $trabalho->titulo }}
                                                </td>
                                            </tr>
                                            <tr class="bg-white">
                                                <td
                                                    class="w-44 px-6 py-4 whitespace-nowrap text-base font-semibold text-gray-900">
                                                    Autor(a)(es)</td>
                                                <td
                                                    class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                                    {{ $trabalho->autor }}
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-100">
                                                <td
                                                    class="w-44 px-6 py-4 whitespace-nowrap text-base font-semibold text-gray-900">
                                                    Orientador(a)(es)</td>
                                                <td
                                                    class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                                    {{ $trabalho->orientador }}
                                                </td>
                                            </tr>
                                            <tr class="bg-white">
                                                <td
                                                    class="w-44 px-6 py-4 whitespace-nowrap text-base font-semibold text-gray-900">
                                                    Curso</td>
                                                <td
                                                    class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                                    {{ $trabalho->curso }}
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-100">
                                                <td
                                                    class="w-44 px-6 py-4 whitespace-nowrap text-base font-semibold text-gray-900">
                                                    Resumo</td>
                                                <td class="text-sm text-gray-900 font-medium px-6 py-4">
                                                    {{ $trabalho->resumo }}
                                                </td>
                                            </tr>
                                            <tr class="bg-white">
                                                <td
                                                    class="w-44 px-6 py-4 whitespace-nowrap text-base font-semibold text-gray-900">
                                                    Páginas</td>
                                                <td
                                                    class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                                    {{ $trabalho->paginas }}
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-100">
                                                <td
                                                    class="w-44 px-6 py-4 whitespace-nowrap text-base font-semibold text-gray-900">
                                                    Data</td>
                                                <td
                                                    class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                                    {{ date('d/m/Y', strtotime($trabalho->data)) }}
                                                </td>
                                            </tr>
                                            <tr class="bg-white">
                                                <td
                                                    class="w-44 px-6 py-4 whitespace-nowrap text-base font-semibold text-gray-900">
                                                    Tipo</td>
                                                <td
                                                    class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                                    {{ $trabalho->tipo }}
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-100">
                                                <td
                                                    class="w-44 px-6 py-4 whitespace-nowrap text-base font-semibold text-gray-900">
                                                    Idioma</td>
                                                <td
                                                    class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                                    {{ $trabalho->idioma }}
                                                </td>
                                            </tr>
                                            <tr class="bg-white">
                                                <td
                                                    class="w-44 px-6 py-4 whitespace-nowrap text-base font-semibold text-gray-900">
                                                    Link</td>
                                                <td
                                                    class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                                    <a class="text-blue-600 hover:text-blue-800"
                                                        href="{{ $trabalho->link }}">{{ $trabalho->link }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-6 flex flex-row justify-end gap-6">
                        <x-button-back href="{{ route('dashboard') }}" class="order-2" />
                        <x-button-edit href="{{ route('trabalhos.edit', ['id' => $trabalho->id]) }}"
                            class="order-2" />
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
