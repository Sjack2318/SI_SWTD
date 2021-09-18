@extends('layouts.plantilla')

@section('contenido')
    <h1 class="titulo_inicio">SISTEMA WEB DE TRÁMITE DOCUMENTARIO</h1>
    <div class="titulo-dos">
        <h2>TRÁMITE DE TESIS UNT</h2>
    </div>
    <div class="requisitos">
        <div class="subir">
            <h3>SUBIR DOCUMENTOS</h3>
            <form action="{{route('tesis.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="">
                    Solicitud inscripción (firmado) <input type="file" name="solicitud" id="solicitud">
                </label><br>
                <label for="">
                    Boucher por revisión e inscripción <input type="file" name="boucher" id="boucher">
                </label><br>
                <label for="">
                    Constancia del asesor <input type="file" name="constancia_asesor" id="constancia_asesor">
                </label><br>
                <label for="">
                    Constancia de no adeudo <input type="file" name="constancia_no_adeudo" id="constancia_no_adeudo">
                </label><br>
                <label for="">
                    01 ejemplar del proyecto (firmado)<input type="file" name="ejemplar" id="ejemplar">
                </label><br>
                <label for="">
                    Copia simple de bachiller* <input type="file" name="copia_bachiller" id="copia_bachiller">
                </label><br>
                <input type="submit" value="GUARDAR">
            </form>
            <p>* De ser necesario</p>
        </div>
    </div>
@endsection