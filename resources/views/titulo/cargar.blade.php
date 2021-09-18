@extends('layouts.plantilla')

@section('contenido')
    <h1 class="titulo_inicio">SISTEMA WEB DE TRÁMITE DOCUMENTARIO</h1>
    <div class="titulo-dos">
        <h2>TRÁMITE DE OBTENCIÓN DE TÍTULO UNIVERSITARIO UNT</h2>
    </div>
    <div class="requisitos">
        <div class="subir">
            <h3>SUBIR DOCUMENTOS</h3>
            <form action="{{route('titulo.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="">
                    Formato <input type="file" name="formato" id="formato">
                </label><br>
                <label for="">
                    Recibo por carpeta título profesional <input type="file" name="recibo_carpeta" id="recibo_carpeta">
                </label><br>
                <label for="">
                    Constancia de no adeudo <input type="file" name="constancia_no_adeudo" id="constancia_no_adeudo">
                </label><br>
                <label for="">
                    Copia de Bachiller <input type="file" name="copia_bachiller" id="copia_bachiller">
                </label><br>
                <label for="">
                    Registro de práctica profesional <input type="file" name="registro_practicas" id="registro_practicas">
                </label><br>
                <label for="">
                    Copia de DNI <input type="file" name="copia_dni" id="copia_dni">
                </label><br>
                <input type="submit" value="GUARDAR">
            </form>
        </div>
    </div>
@endsection