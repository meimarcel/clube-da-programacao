@extends('layouts.app-guest')
@section('title', 'Revista-CDP - ' . $trabalho->titulo)
@section('content')

    <div class="container-fluid container-trabalho">
        <div class="table-responsive">
            <table class="table show-trabalhos">
                <tbody>
                    <tr>
                        <th scope="row" class="border-top-0">Título: </th>
                        <td class="col-10 border-top-0"> {{ $trabalho->titulo }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Autor(a)(es): </th>
                        <td class="col-10"> {{ $trabalho->autor }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Orientador(a)(es): </th>
                        <td class="col-10"> {{ $trabalho->orientador }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Curso: </th>
                        <td class="col-10"> {{ $trabalho->curso }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Resumo: </th>
                        <td class="col-10"> {{ $trabalho->resumo }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Páginas: </th>
                        <td class="col-10"> {{ $trabalho->paginas }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Data: </th>
                        <td class="col-10"> {{ date('d/m/Y', strtotime($trabalho->data)) }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Tipo: </th>
                        <td class="col-10"> {{ $trabalho->tipo }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Idioma: </th>
                        <td class="col-10"> {{ $trabalho->idioma }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Link: </th>
                        <td class="col-10"><a href="{{ $trabalho->link }}">{{ $trabalho->link }}</a></a:hre>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-end">
            <x-button-back class="btn-back" href="/trabalhos" />
        </div>

        {{-- <tr>
            <td class="col-10">Título: {{ $trabalho->titulo }} </td> <br>
            <hr>
            </hr>
            <td class="col-10">Autor(a)(es): {{ $trabalho->autor }} </td> <br>
            <hr>
            </hr>
            <td class="col-10">Orientador(a)(es): {{ $trabalho->orientador }} </td> <br>
            <hr>
            </hr>
            <td class="col-10">Curso: {{ $trabalho->curso }} </td> <br>
            <hr>
            </hr>
            <td class="col-10">Resumo: {{ $trabalho->resumo }} </td> <br>
            <hr>
            </hr>
            <td class="col-10">Páginas: {{ $trabalho->paginas }} </td> <br>
            <hr>
            </hr>
            <td class="col-10">Data: {{ $trabalho->data }} </td> <br>
            <hr>
            </hr>
            <td class="col-10">Tipo: {{ $trabalho->tipo }} </td> <br>
            <hr>
            </hr>
            <td class="col-10">Idioma: {{ $trabalho->idioma }} </td> <br>
            <hr>
            </hr>
            <td class="col-10">Link:<a href="{{ $trabalho->link }}" target="_blank" rel="noreferrer noopener"> {{ $trabalho->link }}</a> </td> <br>
        </tr>
        <x-button-back class="btn-back" href="/trabalhos" /> --}}
    </div>

@endsection
