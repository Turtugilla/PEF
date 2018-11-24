<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';
require 'vendor/autoload.php';
if(isset($_SESSION['cart'])) {

  $total = 0;

  foreach($_SESSION['cart'] as $product_id => $quantity) {

  	$idUsuario = $_SESSION["id"];
    $resultUsuario = pg_query($db_connection,"SELECT * FROM users WHERE id =".$idUsuario);
    $row = pg_fetch_row($resultUsuario);
    $emailUsuarioLogeado = $_SESSION['email'];
    $nombreUsuarioLogeado = $_SESSION['fname'];




    $result = pg_query($db_connection, "SELECT * FROM products WHERE id=". $product_id);
    $array = pg_fetch_array($result);

    if($result){

        $cost = $array['price'] * $quantity;
        $date = date('Y-m-d H:i:s');

        $price = $array['price'];
        $insert ="INSERT INTO orders  (price, units, total, date, idproduct, idusuario)
					VALUES($price, $quantity , $cost ,'".$date."' ,$product_id ,$idUsuario)";

        $query = pg_query($db_connection, $insert);

		$email = new \SendGrid\Mail\Mail();
		$email->setFrom("pedro.deleon92@outlook.com", "Pollito Mayor");
		$email->setSubject("Orden en Camino");
		$email->addTo($emailUsuarioLogeado, $nombreUsuarioLogeado);
		$email->addContent(
			"text/html", "<strong>Tu orden fue realizada con éxito</strong><br></br>								  													  										  
										  <p><strong>Fecha de compra</strong>: ".$date."</p>
										  <p><strong>Unidades</strong>: ".$quantity."</p>
										  <p><strong>Costo Total</strong>: ".$cost."</p>
										  <p><strong>Producto</strong>: ". $product_id ."</p>
										  <p><strong>Usuario</strong>: ".$idUsuario."</p>												
										  <p><hr></p>							
								  </div>
								</div>"
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

        if($query){
          $newqty = $array['qty'] - $quantity;
          pg_query($db_connection,"UPDATE products SET qty = ". $newqty." 
          WHERE id = ". $product_id);
        }

        //send mail script
        /*$query = $mysqli->query("SELECT * from orders order by date desc");
        if($query){
          while ($obj = $query->fetch_object()){
            $subject = "Your Order ID ".$obj->id;
            $message = "<html><body>";
            $message .= '<p><h4>Order ID ->'.$obj->id.'</h4></p>';
            $message .= '<p><strong>Date of Purchase</strong>: '.$obj->date.'</p>';
            $message .= '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
            $message .= '<p><strong>Product Name</strong>: '.$obj->product_name.'</p>';
            $message .= '<p><strong>Price Per Unit</strong>: '.$obj->price.'</p>';
            $message .= '<p><strong>Units Bought</strong>: '.$obj->units.'</p>';
            $message .= '<p><strong>Total Cost</strong>: '.$obj->total.'</p>';
            $message .= "</body></html>";
            $headers = "From: support@techbarrack.com";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            $sent = mail($user, $subject, $message, $headers) ;
            if($sent){
              $message = "";
            }
            else {
              echo 'Failure';
            }
          }
        }*/

      }
    }

}

unset($_SESSION['cart']);
header("location:success.php");

?>
