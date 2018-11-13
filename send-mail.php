<?php



//mail($to,$subject,$mensaje,$headers);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$email = $_POST["email"];
$nombre = $_POST["nombre"];
$subject = $_POST["tema"];
$mensaje = $_POST["mensaje"];





$mail= new PHPMailer();



$mail->isSMTP();
$mail->Port = 587;
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';

/*En estas dos siguientes lineas va el código de las credenciales de email que
 va hostear el enviar mensajes por correo electrónico */
$mail->Username = 'dleonmxn@gmail.com';
$mail->Password = '******';



$mail->CharSet = 'UTF-8';
$mail->setFrom($email , $nombre);
$mail->addAddress("angel.ygtp@gmail.com","Angel Acosta");
$mail->Subject = $subject;
$mail->Body =  $mensaje;
$mail->send();



?>
