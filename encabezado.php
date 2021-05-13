<?php
if (isset($_REQUEST['titulo']))
    $titulo = $_REQUEST['titulo'];
else
    $titulo = "HARD GAMERS";

function activo($menu)
{
    echo strpos($_SERVER['PHP_SELF'], $menu) ? 'active' : 'Falso';
}

//require_once('login.php');

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title> <?php echo $titulo; ?> </title>

    <!--ICONO Favicon-->
    <link rel="icon" type="image/png" sizes="32x32" href="imagenes/favicon_io/favicon-32x32.png">
    

    <!--META-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  minimum-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@700&family=Assistant:wght@200;400&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/cedf025736.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <link rel="stylesheet" href="css/hardgamers.css">

</head>

<body>
    <header>

        <nav class="navbar navbar-expand-md navbar-light bg-dark navegacion d-flex flex-md-column flex-row fixed-top">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="index.php"> <img src="imagenes/logo.png" alt="imagen logo" class="logo mx-auto d-block"></a>

            <div class="collapse navbar-collapse z-index:2" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php activo('productos.php') ?>">
                        <a class="nav-link text-decoration-none" href="productos.php">Productos</a>
                    </li>
                    <li class="nav-item <?php activo('auriculares.php') ?>">
                        <a class="nav-link text-decoration-none" href="auriculares.php">Auriculares</a>
                    </li>

                    <li class="nav-item <?php activo('mouse.php') ?>">
                        <a class="nav-link text-decoration-none" href="mouse.php">Mouses</a>
                    </li>

                    <li class="nav-item <?php activo('teclado.php') ?>">
                        <a class="nav-link text-decoration-none" href="teclado.php">Teclados</a>
                    </li>

                    <li class="nav-item <?php activo('contacto.php') ?>">
                        <a class="nav-link text-decoration-none" href="contacto.php">Contacto</a>
                    </li>

                    <li class="nav-item <?php activo('login.php') ?>">
                        <a class="nav-link text-decoration-none" href="login.php">Login</a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>