@extends('layouts.main')
@section('title', 'Revista-CDP - trabalhos, artigos e trabalhos acadêmicos')
@section('content')


    <div class="container-works">
        <h1>Filtros</h1>
        <form action="{{ route('trabalhos.filtro') }}" name="form-filtro" method="post" autocomplete="off">
            @csrf
            <div class="row input-group">
                <div class="col">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" placeholder="Nome do artigo" class="form-control">
                </div>

                <div class="col">
                    <label for="tipo">Tipo</label>
                    <select name="tipo" id="tipo" class="form-control">
                        <option selected value="">Todos os tipos</option>
                        <option value="TCC">TCC</option>
                        <option value="Artigo">Artigo</option>
                        <option value="Trabalho Academico">Trabalho acadêmico</option>
                    </select>
                </div>
                <div class="col">
                    <label for="ano">Ano</label>
                    <input type="text" name="ano" id="ano" class="form-control" placeholder="2017">
                </div>
                <div class="btn-submit-filter">
                    <button type="submit" class="btn btn-primary btn-filtrar" id="btn-filtrar">Filtrar</button>
                </div>

            </div>
        </form>
    </div>
    <hr>
    <div class="container-works">
        <h1>Trabalhos</h1>
        <table class="table tabela-trabalhos">
            <thead class="table-thead">
                <tr>
                    <th scope="col" class="col-4">Título</th>
                    <th scope="col" class="col-3">Autor</th>
                    <th scope="col" class="col-2">Tipo</th>
                    <th scope="col" class="col-2">Ano da publicação</th>
                </tr>
            </thead>
            <tbody id="table-body-content">
                @foreach ($trabalhos as $trabalho)
                    <tr class="tabela-hover">
                        <td>{{ $trabalho->titulo }}</td>
                        <td>{{ $trabalho->autor }}</td>
                        <td>{{ $trabalho->tipo }}</td>
                        <td>{{ date('Y', strtotime($trabalho->data)) }} </td>
                    </tr>
                @endforeach

            </tbody>
            <tbody id="table-body-loading">
                <tr>
                    <td class="justify-content-center" colspan='5'>
                        <div class="d-flex justify-content-center loading">
                            <div class="spinner-border" role="status">
                                <span class="sr-only">Carregando...</span>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div id="paginate">
            {{ $trabalhos->links() }}
        </div>
        {{-- @if (isset($filters))
            {{ $trabalhos->appends($filters)->links() }}
        @else
            {{ $trabalhos->links() }}
        @endif --}}
    </div>
    @push('scripts-filtro')
        <script src="{{ asset('js/filtro.js') }}"></script>
    @endpush

@endsection
