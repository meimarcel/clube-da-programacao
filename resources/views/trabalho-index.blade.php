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
                            <option value="Trabalho acadêmico">Trabalho acadêmico</option>
                    </select>
                </div>
                <div class="col">
                    <label for="ano">Ano</label>
                    <input type="text" name="ano" id="ano" class="form-control" placeholder="2017">
                </div>
                <div class="btn-submit-filter">
                    <button type="submit" class="btn btn-primary " id="btn-filtrar">Filtrar</button>
                </div>

            </div>
        </form>
    </div>
    <hr>
    <div class="container-works">
        <h1>Trabalhos</h1>
        <table class="table table-hover">
            <thead class="table-thead">
                <tr>
                    <th scope="col">Título</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Ano da publicação</th>
                </tr>
            </thead>
            <tbody>
                {{-- @if (!isset($filters)) --}}
                    @foreach ($trabalhos as $trabalho)
                        <tr>
                            <td>{{ $trabalho->titulo }}</td>
                            <td>{{ $trabalho->autor }}</td>
                            <td>{{ $trabalho->tipo }}</td>
                            <td>{{ date('Y', strtotime($trabalho->data)) }} </td>
                        </tr>
                    @endforeach
                {{-- @endif --}}

            </tbody>
        </table>
        {{-- @if (isset($filters))
            {{ $trabalhos->appends($filters)->links() }}
        @else
            {{ $trabalhos->links() }}
        @endif --}}
    </div>

    {{-- <div class="trabalhos-container-title">
        <h1>Filtros</h1>
    </div>

    <form action="/trabalhos" method="get">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>

            <div class="form-group col-md-3">
                <label for="tipo">Tipo</label>
                <select class="form-control" id="tipo" name="tipo">
                    <option selected disabled>Selecione um tipo...</option>
                    <option value="tcc">TCC</option>
                    <option value="artigo">Artigo</option>
                    <option value="trabalho-academico">Trabalho acadêmico</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="ano">Ano</label>
                <input type="text" class="form-control" id="ano" name="ano">
            </div>
            <div class="btn-submit-filter">
                <button type="button" class="btn btn-primary " id="btn-filtrar">Filtrar</button>
            </div>
        </div>

    </form>
    <div class="trabalhos-container-list">
        <h1>Trabalhos</h1>
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Tipo</th>
                <th scope="col">Ano da publicação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trabalhos as $trabalho)
                <tr>
                    <td>{{ $trabalho->titulo }}</td>
                    <td>{{ $trabalho->autor }}</td>
                    <td>{{ $trabalho->tipo }}</td>
                    <td>{{ date('Y', strtotime($trabalho->data)) }}</td>
                </tr>
            @endforeach

        </tbody>
    </table> --}}

@endsection
