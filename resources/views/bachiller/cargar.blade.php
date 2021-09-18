@extends('layouts.plantilla')

@section('contenido')
    <h1 class="titulo_inicio">SISTEMA WEB DE TRÁMITE DOCUMENTARIO</h1>
    <div class="titulo-dos">
        <h2>TRÁMITE DE OBTENCIÓN DE GRADO BACHILLER UNT</h2>
    </div>
    <div class="requisitos">
        <div class="subir">
            <h3>SUBIR DOCUMENTOS</h3>
            <form action="{{route('bachiller.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="">
                    Formato <input type="file" name="formato" id="formato">
                </label><br>
                <label for="">
                    Recibo por carpeta título profesional <input type="file" name="recibo" id="recibo">
                </label><br>
                <label for="">
                    Certificado de estudios <input type="file" name="cert_estudios" id="cert_estudios">
                </label><br>
                <label for="">
                    Certificado de no adeudo <input type="file" name="cert_no_adeudo" id="cert_no_adeudo">
                </label><br>
                <label for="">
                    Copia de bachiller <input type="file" name="copia_bachiller" id="copia_bachiller">
                </label><br>
                <label for="">
                    Copia autenticada de título pedagógico <input type="file" name="copia_titulo" id="copia_titulo">
                </label><br>
                <input type="submit" value="GUARDAR">
            </form>
        </div>
    </div>
@endsection