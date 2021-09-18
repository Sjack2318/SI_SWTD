<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos.css">
    <title>Sistema Web de Trámite Documentario</title>
</head>
<body>
    <h1 class="titulo_inicio">SISTEMA WEB DE TRÁMITE DOCUMENTARIO</h1>
    <div class="portada">
        <img src="portada.png" alt="">
    </div>
    <div class="bienvenida">
        <P class="bienvenida texto">Aquí podrás encontrar la lista de requisitos de los trámites que requieran, así mismo descargar los documentos que necesiten ser llenados por ustedes. Además aquí mismo podrán subir sus documentos correctamente llenados y listos para su verificación por su escuela. Y para facilitar el proceso tambuén podrán hacer el respectivo seguimiento al trámite en cuestión. ¡UNT a su servicio!</P>
    </div>
    <div class="elegir">
        <a href="{{route('login')}}">Ingresar</a>
        {{-- <a href="{{route('seguimiento')}}">Seguimiento</a> --}}
    </div>
</body>
</html>