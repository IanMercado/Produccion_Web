<?php
require_once('login_bd.php');
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
                echo "</div><center> ¡Bienvenido ".$username."!". 
                     "<p> Has iniciado sesión con ".$mail;
        }
    }else {
        // no existe el usuario
        echo "</div><center> El usuario, mail o contraseña son incorrectos.";
    }
}

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="css/hardgamers.css">

</head> 
<body> -->
<link rel="stylesheet" href="css/hardgamers.css"> 
    <form action="#" method="POST">
        <div class="container">
            <div class="login-box">
            <!-- class="float-right z-index:1" -->
            Username: <br/><input type="t   ext" name="username"><br/>
            Mail: <br/><input type="email" name="mail"><br/>
            Password: <br/><input type="password" name="password"><br/>
            <input type="submit" value="Iniciar sesión">
            </div>
        </div>
    </form>

<!-- </body>
</html> -->

<?php
//require_once('pie.php');
?>