
@extends('layouts.plantilla')

@section('contenido')
    <h1 class="titulo_inicio">SISTEMA WEB DE TRÁMITE DOCUMENTARIO</h1>
    <div class="titulo-dos">
        <h2>DESCARGAR DOCUMENTOS REQUERIDOS</h2>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</td>
                <th scope="col">Nombre del archivo</td>
                <th scope="col">Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($descargas as $descarga)
                <tr>
                    <th scope="row">{{$descarga->id}}</th>
                    <td>{{$descarga->nombre}}</td>
                    <td>
                        <a href="{{route('descarga.download', $descarga)}}">Descargar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection