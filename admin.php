<?php
require_once('bd/login_bd.php');
//require_once('encabezado.php');

session_start();

if(isset($_GET['cerrar_sesion'])){
    session_unset();

    session_destroy();
}

if(isset($_SESSION['rol'])){
    switch($_SESSION['rol']){
        case 1:
            header('location: loginAdmin.php');
        break;

        case 2:
            header('location: loginUsuario.php');
        break;

        default:
    }
}

if(isset($_POST['username']) && isset($_POST['mail']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];

    $db = new Database();
    $query = $db->connect()->prepare('SELECT*FROM usuarios WHERE username = :username AND mail = :mail AND password = :password');
    $query->execute(['username'=>$username, 'mail'=>$mail, 'password'=>$password]);

    $row = $query->fetch(PDO::FETCH_NUM);
    if ($row == true) {
        //validar rol
        $rol = $row[3];
        $_SESSION['rol'] = $rol;

        switch($_SESSION['rol']){
            case 1:
                header('location: loginAdmin.php');
            break;
    
            case 2:
                header('location: loginUsuario.php');
            break;
    
            default:
                echo "<div style='margin-top: 300px;'>¡Bienvenido ".$username."!". 
                     "<p> Has iniciado sesión con ".$mail."</div>";
        }
    }else {
        // no existe el usuario
        echo "</div><center> El usuario, mail o contraseña son incorrectos.";
    }
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title> HARD GAMERS | Admin </title>

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
        <a href="admin.php"> 
            <img src="imagenes/logo.png" alt="imagen logo" class="logo mx-auto d-block"> 
        </a>
    </header>
    <!--
    <div class="container">
        <link rel="stylesheet" href="css/hardgamers.css"> 
           <form action="#" method="POST">
            <div class="box">
                <div class="login-box">
                Username: <br/><input type="text" name="username"><br/>
                Mail: <br/><input type="email" name="mail"><br/>
                Password: <br/><input type="password" name="password"><br/>
                <input type="submit" value="Iniciar sesión">
                </div>
            </div>
        </form>
        </div>  ANTERIOR FORM  -->

        <div id="Contacto"><br>
            <class="d-block auto img-fluid h-20">  
            <div class="container">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <form class="needs-validation" novalidate action="#" method="POST">
                    
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="username"> Username: </label>
                                <input type="text" class="form-control" id="username" placeholder="" name="username" required>

                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="email"> Mail: </label>
                                <input  class="form-control" id="email" type="email" placeholder="" name="mail" required>
                    
                            </div>
                        </div>
                            <div class="col-md-12 mb-3">
                                <label for="password"> Password: </label>
                                <input  class="form-control" id="password" type="password" name="password" required>
                            </div>
                    </div>
                </div>

                <input type="submit" value="Iniciar sesión" class="btn btn-primary">

            </div>

            </form>
        </div>
    </div>
</body>