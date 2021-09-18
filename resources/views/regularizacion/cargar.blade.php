@extends('layouts.plantilla')

@section('contenido')
    <h1 class="titulo_inicio">SISTEMA WEB DE TRÁMITE DOCUMENTARIO</h1>
    <div class="titulo-dos">
        <h2>PROCESO DE REGULARIZACIÓN UNT</h2>
    </div>
    <div class="requisitos">
        <div class="subir">
            <h3>SUBIR DOCUMENTOS</h3>
            <form action="{{route('regularizacion.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="">
                    Solicitud de regularización <input type="file" name="solicitud" id="solicitud">
                </label><br>
                <label for="">
                    Recibo de pago ($20.00) <input type="file" name="recibo_pago" id="recibo_pago">
                </label><br>
                <label for="">
                    Recibo 2° o 3° matrícula* <input type="file" name="recibo_matricula" id="recibo_matricula">
                </label><br>
                <label for="">
                    Solicitud curso por 3° o 4° matrícula <input type="file" name="solicitud_matricula" id="solicitud_matricula">
                </label><br>
                <label for="">
                    Solicitud de convalidación* <input type="file" name="solicitud_convalidacion" id="solicitud_convalidacion">
                </label><br>
                <input type="submit" value="GUARDAR">
            </form>
            <p>* De ser necesario</p>
        </div>
    </div>
@endsection