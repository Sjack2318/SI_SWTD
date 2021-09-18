<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo-login.css">
    <title>Login</title>
</head>
<body>
    <h1 class="titulo_inicio">SISTEMA WEB DE TRÁMITE DOCUMENTARIO</h1>
    <main class="contenedor">
        <form action="" class="formulario" method="POST">
            @csrf
            <label for="name">Ingrese usuario</label><br>
            <input type="text" name="name" placeholder="Usuario"><br>
            <label for="password">Ingrese contraseña</label><br>
            <input type="password" name="password" placeholder="Contraseña"><br>
            <input type="submit" value="INGRESAR" class="boton"><br>
        </form>
    </main>
    <div class="salida">
        <a href="{{route('inicio')}}">REGRESAR</a>
    </div>
</body>
</html>