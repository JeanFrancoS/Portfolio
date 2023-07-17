<?php ob_start(); #esto evita los errores de envios de headers
set_error_handler("var_dump");
include 'conexion.php';
session_start(); #inicializamos variables de sesion
 #si esta logueado lo dejo trabajar y sino lo mando al login de nuevo 
 if ( isset( $_SESSION['usuario'] )!='Admin'){
    header("location:login.php");
    die();
} ?>
<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&family=Dongle&family=Edu+VIC+WA+NT+Beginner:wght@500&family=Fjalla+One&family=Lato:ital@1&family=Montserrat:wght@300&family=Oswald:wght@200&family=Poppins:ital,wght@0,400;0,600;0,700;1,700&family=Roboto:wght@300&family=The+Nautigal:wght@700&family=Updock&display=swap&family=Edu+SA+Beginner:wght@500" rel="stylesheet"> -->
     <!-- Bootstrap CSS -->
     <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
     <link rel="stylesheet" href="./css/style-admin.css"> 
     <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->
     <title>Portfolio</title>
</head>
<body>
    <header class="header">
        <div class="menu">
            <div class="logo">
                <h2>JFS</h2>
            </div>
            <nav class="navHeader">
                <ul class="navLista">
                    <li class="listaItem">
                        <a class="link" aria-current="page"  href="index_admin.php">Ver proyectos</a>
                    </li>
                    <li class="listaItem">
                        <a class="link" aria-current="page"  href="galeria.php">Abm</a>
                    </li>
                    <li class="listaItem">
                        <a class="link" href="cerrar.php">Cerrar Sesión de User: <span><?php echo $_SESSION['usuario']; ?></span> </a> 
                    </li>
                </ul>
            </nav>
        </div>
    </header>