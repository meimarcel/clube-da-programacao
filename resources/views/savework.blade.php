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
                    <form action="" method="post">
                        <div class="mb-3 form-group" >
                            <label for="" class="form-label">Título</label>
                            <input class="form-control" type="text" name="" id="">
                        </div>

                        <div class="mb-3">
                        <label lass="form-label" for="">Tipo</label>
                        <select class="form-control" name="" id="">
                            <option value="TCC">TCC</option>
                            <option value="Artigo">Artigo</option>
                            <option value="Trabalho Academico">Trabalho Academico</option>
                        </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="">Autor(a)(es)</label>
                            <input class="form-control" type="text" name="" id="">
                        </div>

                        <div class="mb-3"> 
                            <label class="form-label" for="">Orientador(es)</label>
                            <input class="form-control" type="text" name="" id="">
                        </div>
                        
                       
                        <div class="mb-3">
                            <label class="form-label" for="">Data</label>
                            <input class="form-control" type="date" name="" id="">
                            <label class="form-label"for="">Curso</label>
                            <input class="form-control" type="text" name="" id="">
                            <label class="form-label"for="">Idioma</label>
                            <input class="form-control" type="text" name="" id="">
                            <label class="form-label"for="">Paginas</label>
                            <input class="form-control" type="text" name="" id="">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="">Resumo</label>
                            <input class="form-control" type="text" name="" id="">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="">Link</label>
                            <input class="form-control" type="text" name="" id="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>