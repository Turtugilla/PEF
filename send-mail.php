<?php



//mail($to,$subject,$mensaje,$headers);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';










/*
$mail= new PHPMailer();

$mail->isSMTP();
$mail->Port = 587;
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';


$mail->Username = 'dleonmxn@gmail.com';
$mail->Password = 'tigres100%';


$mail->isHTML(true);
$mail->CharSet = 'UTF-8';
$mail->setFrom($emailFrom , $nombre);
$mail->addAddress("pedro.deleon92@outlook.com","Pedro de León");
$mail->Subject = $subject;
$mail->Body =  "Correo enviado por: " . $emailFrom ."<br></br>".$mensaje;
$mail->send();
*/

$emailFrom = $_POST["email"];
$nombre = $_POST["nombre"];
$subject = $_POST["tema"];
$mensaje = $_POST["mensaje"];
$email = new \SendGrid\Mail\Mail();
$email->setFrom($emailFrom, $nombre);
$email->setSubject($subject);
$email->addTo("pedro.deleon92@outlook.com", "Pedro de León");
$email->addContent(
	"text/html", $mensaje
);
$sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
try {
	$response = $sendgrid->send($email);
	print $response->statusCode() . "\n";
	print_r($response->headers());
	print $response->body() . "\n";
} catch (Exception $e) {
	echo 'Caught exception: '. $e->getMessage() ."\n";
}



?>
