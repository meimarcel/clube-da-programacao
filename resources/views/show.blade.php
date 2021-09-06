@extends('layouts.app-guest')
@section('title', 'Revista-CDP - ' . $trabalho->titulo)
@section('content')


<tr>
    <td>Título: {{$trabalho-> titulo}} </td>
    <td>Autor(a)(es): {{$trabalho-> autor}} </td>
    <td>Orientador(a)(es): {{$trabalho-> orientador}} </td>
    <td>Curso: {{$trabalho-> curso}} </td>
    <td>Resumo: {{$trabalho-> resumo}} </td>
    <td>Páginas: {{$trabalho-> paginas}} </td>
    <td>Data: {{$trabalho-> data}} </td>
    <td>Tipo: {{$trabalho-> tipo}} </td>
    <td>Idioma: {{$trabalho-> idioma}} </td>
    <td>Link: {{$trabalho-> link}} </td>
</tr>





<div class="mostrar-dados">
    <tr>
        <td>Título: {{$trabalho-> titulo}} </td> <br>
        <hr></hr>
        <td>Autor(a)(es): {{$trabalho-> autor}} </td> <br>
        <hr></hr>
        <td>Orientador(a)(es): {{$trabalho-> orientador}} </td> <br>
        <hr></hr>
        <td>Curso: {{$trabalho-> curso}} </td> <br>
        <hr></hr>
        <td>Resumo: {{$trabalho-> resumo}} </td> <br>
        <hr></hr>
        <td>Páginas: {{$trabalho-> paginas}} </td> <br>
        <hr></hr>
        <td>Data: {{$trabalho-> data}} </td> <br>
        <hr></hr>
        <td>Tipo: {{$trabalho-> tipo}} </td> <br>
        <hr></hr>
        <td>Idioma: {{$trabalho-> idioma}} </td> <br>
        <hr></hr>
        <td>Link:<a href="{{$trabalho-> link}}"> {{$trabalho-> link}}</a> </td> <br>
    </tr>
   
    
    <x-button-back class="btn-back" href="/trabalhos"/>                

    <div class="vitrine"></div>
</div>

@endsection