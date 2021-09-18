@extends('layouts.plantilla')

@section('contenido')
    <h1 class="titulo_inicio">SISTEMA WEB DE TRÁMITE DOCUMENTARIO</h1>
    <div class="titulo-dos">
        <h2>TRÁMITE DE OBTENCIÓN DE GRADO BACHILLER UNT</h2>
    </div>
    <div class="requisitos">
        <div class="subir">
            <h3>SUBIR DOCUMENTOS</h3>
            <form action="{{route('descarga.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="">
                    Formato <input type="file" name="descarga" id="descarga">
                </label><br>
                <input type="submit" value="GUARDAR">
            </form>
        </div>
    </div>
@endsection