<?php



//mail($to,$subject,$mensaje,$headers);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$emailFrom = $_POST["email"];
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
$mail->Password = 'tigres100%';



$mail->CharSet = 'UTF-8';
$mail->setFrom($emailFrom , $nombre);
$mail->addAddress("angel.ygtp@gmail.com","Angel Acosta");
$mail->Subject = $subject;
$mail->Body =  $mensaje;
$mail->send();



$email = new \SendGrid\Mail\Mail();
$email->setFrom("dleonmxn@hotmail.com", "Example User");
$email->setSubject("Sending with SendGrid is Fun");
$email->addTo("app115927986@heroku.com", "Example User");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent(
	"text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);
$sendgrid = new \SendGrid(getenv('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'));
try {
	$response = $sendgrid->send($email);
	print $response->statusCode() . "\n";
	print_r($response->headers());
	print $response->body() . "\n";
} catch (Exception $e) {
	echo 'Caught exception: '. $e->getMessage() ."\n";
}



?>
