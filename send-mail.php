<?php
require 'vendor/autoload.php';

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
