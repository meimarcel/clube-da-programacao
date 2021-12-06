<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Trabalhos') }}

            <x-button-add href="{{ route('trabalhos.create') }}" class="float-right"/>
        </h2>
    </x-slot>

    <div class="py-12 clear-both">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">                
                <div class="p-6 bg-white border-b border-gray-200">
                   
                    <!-- Session message -->
                    <x-message class="mb-4 text-center"/>

                    @if(Route::currentRouteName() == 'trabalhos.edit')
                    <form action="{{ route('trabalhos.update', $trabalho->id)}}" method="POST">
                        @method('PUT')
                    @else
                    <form action="{{ route('trabalhos.store')}}" method="POST">
                    @endif
                        @csrf

                        <div class="mb-3" >
                            <label for="inputTitulo" class="mb-2.5">Título</label>
                            <input class="w-full bg-gray-100" type="text" name="titulo" id="inputTitulo" 
                                value="{{ old('titulo', $trabalho->titulo ?? '') }}" required/>
                        </div>

                        <div class="mb-3">
                            <label class="mb-2.5" for="selectTipo">Tipo</label>
                            <select class="w-full bg-gray-100" name="tipo" id="selectTipo" 
                                value="{{ old('tipo', $trabalho->tipo ?? '') }}" required>

                                <option value="Trabalho Academico">Trabalho Acadêmico</option>
                                <option value="TCC">TCC</option>
                                <option value="Artigo">Artigo</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="mb-2.5" for="inputAutor">Autor(a)(es)</label>
                            <input class="w-full bg-gray-100" type="text" name="autor" id="inputAutor"
                                value="{{ old('autor', $trabalho->autor ?? '') }}" required>
                        </div>

                        <div class="mb-3"> 
                            <label class="mb-2.5" for="inputOrientador">Orientador(es)</label>
                            <input class="w-full bg-gray-100" type="text" name="orientador" id="inputOrientador"
                                value="{{ old('orientador', $trabalho->orientador ?? '') }}" required>
                        </div>
                        
                        <div class="mb-3 grid grid-cols-1 md:grid-cols-4 md:gap-10 md:pr-8">
                            <div>
                                <label class="block" for="inputData">Data</label>
                                <input class="bg-gray-100 w-full" type="date" name="data" id="inputData"
                                    value="{{ old('data', $trabalho->data ?? '') }}" required>
                            </div>
                            <div>
                                <label class="block" for="inputCurso">Curso</label>
                                <input class="bg-gray-100 w-full" type="text" name="curso" id="inputCurso"
                                    value="{{ old('curso', $trabalho->curso ?? '') }}" required>
                            </div>
                            <div>
                                <label class="block" for="inputIdioma">Idioma</label>
                                <input class="bg-gray-100 w-full" type="text" name="idioma" id="inputIdioma" class="bg-gray-100"
                                    value="{{ old('idioma', $trabalho->idioma ?? '') }}" required>
                            </div>
                            <div>                                
                                <label class="block" for="InputPaginas">Paginas</label>
                                <input class="bg-gray-100 w-full" type="number" name="paginas" id="InputPaginas"
                                    value="{{ old('paginas', $trabalho->paginas ?? '') }}" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="py-2" for="textResumo">Resumo</label>
                            <textarea style ="resize:none;" class="w-full bg-gray-100" rows="6" name="resumo" 
                                id="textResumo" required>{{ old('titulo', $trabalho->resumo ?? '') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="mb-2.5" for="inputLink">Link</label>
                            <input class="w-full bg-gray-100" type="text" name="link" id="inputLink"
                                value="{{ old('link', $trabalho->link ?? '') }}" required>
                        </div>

                        <div class="my-6 flex flex-row justify-end gap-6">
                            <x-button-back href="{{ route('dashboard') }}" class="order-2"/>
                            <x-button-save type="submit" class="order-3"/>

                            @if(Route::currentRouteName() == 'trabalhos.edit')
                            <x-button-visualizar class="order-1"/>
                            
                            <x-button-delete class="order-4"/>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>