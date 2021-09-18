@extends('layouts.plantilla')

@section('contenido')
    <h1 class="titulo_inicio">SISTEMA WEB DE TRÁMITE DOCUMENTARIO</h1>
    <div class="titulo-dos">
        <h2>PROCESO DE MATRÍCULA UNT</h2>
    </div>
    <div class="requisitos">
        <div class="subir">
            <h3>SUBIR DOCUMENTOS</h3>
            <form action="{{route('matricula.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="">
                    Boucher de pago <input type="file" name="boucher" id="boucher">
                </label><br>
                <label for="">
                    Ficha de matrícula <input type="file" name="ficha" id="ficha">
                </label><br>
                <label for="">
                    Otro documento* <input type="file" name="otro" id="otro">
                </label><br>
                <input type="submit" value="GUARDAR">
            </form>
            <p>* De ser necesario</p>
        </div>
    </div>
@endsection