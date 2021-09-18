<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <!--Boxicons CDN Link-->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="main.js"></script>
    <title>Sistema Web de trámite documentario</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <i class='bx bxs-home'></i>
                <div class="logo_name">SISTEMA TRÁMITE DOCUMENTARIO</div>
            </div>
            <i class='bx bx-menu' id="menu"></i>
        </div>
        <ul class="nav_list">
            <li>
                <a href="{{route('descarga.index')}}">
                    <i class='bx bx-search'></i>
                    <span class="links_name">Descarga</span>
                </a>
                <span class="tooltip">Descarga</span>
            </li>
            {{-- <li>
                <a href="{{route('seguimiento')}}">
                    <i class='bx bx-search'></i>
                    <span class="links_name">Seguimiento</span>
                </a>
                <span class="tooltip">Seguimiento</span>
            </li> --}}
            <li>
                <a href="{{route('matricula.index')}}">
                    <i class='bx bx-folder' ></i>
                    <span class="links_name">Matrícula</span>
                </a>
                <span class="tooltip">Matrícula</span>
            </li>
            <li>
                <a href="{{route('regularizacion.index')}}">
                    <i class='bx bx-folder' ></i>
                    <span class="links_name">Regularización</span>
                </a>
                <span class="tooltip">Regularización</span>
            </li>
            <li>
                <a href="{{route('tesis.index')}}">
                    <i class='bx bx-folder' ></i>
                    <span class="links_name">Tesis</span>
                </a>
                <span class="tooltip">Tesis</span>
            </li>
            <li>
                <a href="{{route('bachiller.index')}}">
                    <i class='bx bx-folder' ></i>
                    <span class="links_name">Bachiller</span>
                </a>
                <span class="tooltip">Bachiller</span>
            </li>
            <li>
                <a href="{{route('titulo.index')}}">
                    <i class='bx bx-folder' ></i>
                    <span class="links_name">Título</span>
                </a>
                <span class="tooltip">Título</span>
            </li>
        </ul>
        <div class="profile_content">
            <div class="profile">
                <div class="profile_details">
                    <img src="logo_unt.png" alt="">
                    <div class="name_job">
                        <div class="name">{{auth()->user()->name}}</div>
                    </div>
                </div>
                <form action="/logout" method="POST">
                    @csrf
                    <a href="#" onclick="this.closest('form').submit()">
                        <i class='bx bx-log-out' id="log_out"></i>
                    </a>
                </form>
            </div>
        </div>
    </div>
    <div class="home_content">
        <div class="text">@yield('contenido')</div>
    </div>
</body>
</html>