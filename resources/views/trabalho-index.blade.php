@extends('layouts.app-guest')
@section('title', 'Revista-CDP - trabalhos, artigos e trabalhos acadêmicos')
@section('content')
    <div class="container-fluid container-trabalho">
        <div class="container-filter">
            <h1 class="h1-list-works">Filtros</h1>
            <form action="{{ route('trabalhos.filtro') }}" name="form-filtro" method="post" autocomplete="off">
                @csrf
                <div class="row input-group">
                    <div class="col">
                        <label for="titulo" class="label-text">Título</label>
                        <input type="text" name="titulo" id="titulo"
                            value="{{ isset($filtros['titulo']) ? $filtros['titulo'] : '' }}"
                            placeholder="Título do trabalho" class="form-control">
                    </div>

                    <div class="col">
                        <label for="tipo" class="label-text">Tipo</label>
                        <select name="tipo" id="tipo" class="form-control">
                            <option
                                {{ isset($filtros['tipo']) ? ($filtros['tipo'] == '' ? 'selected' : '') : 'selected' }}
                                value="">Todos os tipo...</option>
                            <option {{ isset($filtros['tipo']) ? ($filtros['tipo'] == 'tcc' ? 'selected' : '') : '' }}
                                value="tcc">
                                TCC</option>
                            <option {{ isset($filtros['tipo']) ? ($filtros['tipo'] == 'artigo' ? 'selected' : '') : '' }}
                                value="artigo">Artigo</option>
                            <option
                                {{ isset($filtros['tipo']) ? ($filtros['tipo'] == 'trabalho academico' ? 'selected' : '') : '' }}
                                value="trabalho academico">Trabalho acadêmico</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="ano" class="label-text">Ano</label>
                        <input type="text" name="ano" id="ano" value="{{ isset($filtros['ano']) ? $filtros['ano'] : '' }}"
                            class="form-control" placeholder="2017">
                    </div>
                    <div class="btn-submit-filter">
                        <button type="submit" class="btn btn-primary btn-filtrar" id="btn-filtrar">Filtrar</button>
                    </div>

                </div>
            </form>
        </div>
        <hr>
        <div class="container-table">
            <h1 class="h1-list-works">Trabalhos</h1>
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
                    @if (isset($filtros))
                        {!! $trabalhos->total() == 0 ? "<td colspan='5'><div class='info-nao-encontrado'>Nenhum trabalho encontrado</div></td>" : '' !!}
                    @else
                        {!! $trabalhos->total() == 0 ? "<td colspan='5'><div class='info-nao-encontrado'>Nenhum trabalho foi adicionado</div></td>" : '' !!}
                    @endif
                </tbody>
            </table>
        </div>
        <div>
            {{ isset($filtros) ? $trabalhos->appends($filtros)->links() : $trabalhos->links() }}
        </div>
    </div>

@endsection
