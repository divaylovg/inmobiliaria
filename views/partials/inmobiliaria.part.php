<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inmobiliaria Tu Casa</title>

    <!-- Bootstrap  -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Mis estilos -->
    <link href="css/mi.css" rel="stylesheet">

</head>

<body>

<div class="container">
    <div class="row text-center">
        <img src="img/tucasa.jpg" class="rounded mx-auto d-block">
    </div>


    <!-- Barra navegacion -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Tu casa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="comprarAlquilar.php">Buscar inmuebles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registrarUsuario.php">Registro usuarios</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contacto.html">Contacto</a>
                </li>

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="loguearUsuario.php">Entrar Usuario</a>
                        <a class="dropdown-item" href="loguearEmpleado.php">Entrar Empleado</a>
                        <a class="dropdown-item" href="loguearAdministrador.php">Entrar Administrador</a>
                    </div>
                </div>

            </ul>

        </div>
    </nav>