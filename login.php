<?php
require_once('login_bd.php');

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
        }
    }else {
        // no existe el usuario
        echo "El usuario, mail o contraseña son incorrectos";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="css/hardgamers.css">

</head>
<body>
    <form action="#" method="POST">
    <div class="container">
        <div class="row">
          <!-- class="float-right z-index:1" -->
        Username: <br/><input type="text" name="username"><br/>
        Mail: <br/><input type="text" name="mail"><br/>
        Password: <br/><input type="text" name="password"><br/>
        <input type="submit" value="Iniciar sesión">
        </div>
    </div>
    </form>
</body>
</html>