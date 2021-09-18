<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo-seg.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Seguimiento</title>
</head>

<body>
    <h1 class="titulo_inicio">SISTEMA WEB DE TRÁMITE DOCUMENTARIO</h1>
    <div class="formulario">
        <form action="">
            <label for="">N° DOCUMENTO </label>
            <input type="text" placeholder="Ingrese documento">
            <button type="submit">BUSCAR</button>
        </form>
    </div>
    <div class="tabla">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Ciclo</th>
                    <th scope="col">Escuela</th>
                    <th scope="col">Trámite</th>
                    <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Chavez Cerna Luis Adonis</td>
                    <td>V</td>
                    <td>Ing. de Sistemas</td>
                    <td>Matrícula</td>
                    <td>Pendiente</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="salida">
        <a href="{{route('inicio')}}">REGRESAR</a>
    </div>
</body>
</html>