<?php

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

require ('PHPMailer-master\src\PHPMailer.php');
require ('PHPMailer-master\src\Exception.php');
require ('PHPMailer-master\src\SMTP.php');
require ('contacto.php');

$nombre = $_POST['nombre'];
$mail = new PHPMailer();
$mail->IsSMTP();
    // 0 = off (producción)
    // 1 = client messages
    // 2 = client and server messages
$mail->SMTPDebug  = 2;
$mail->Host       = 'smtp.gmail.com';
$mail->Port       = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth   = true;
$mail->Username   = 'probandolacajanegra@gmail.com';
$mail->Password   = 'estodosuyoamigo';
$mail->SetFrom('probandolacajanegra@gmail.com','La Caja');
$mail->AddAddress($email = $_POST['correo']);
$mail->Subject = 'Su consulta sera atendida muy pronto por uno de nuestros soportes';
$mail->Body =
    "\n".'¡De parte de HARD GAMERS queremos comentarle que estamos trabajando en su consulta!' .
    "\n".
    "\n".'Si alguno de los siguientes datos no es correcto, por favor vuelva a contactarnos y complete los espacios en blanco.'.
    "\n".'• Nombre: '. $_POST['nombre'].
    "\n".'• Apellido: '. $_POST['apellido'].
    "\n".'• Mail: '. $_POST['correo'] .
    "\n".'• Telefono: '.$_POST['telefono'].
    "\n".'• Area que deseas contactar: '. $_POST['area_consulta'] .
    "\n".'• Su consulta: ' . $_POST['comentario'] .
    "\n".
    "\n".'Atte.'.
    "\n".'Gonzalo Monzon, Ramiro Vita, Ian Mercado.';
if(!$mail->Send()) {
  echo '<script language="javascript">';
  echo 'alert("Surgió un error inesperado, inténtelo de nuevo por favor.")';
  echo '</script>'; 
} else {
  echo '<script language="javascript">';
  echo 'alert("Se envió la consulta con éxito.")';
  echo '</script>';
}

?>