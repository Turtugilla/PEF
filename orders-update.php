<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

if(isset($_SESSION['cart'])) {

  $total = 0;

  foreach($_SESSION['cart'] as $product_id => $quantity) {

    $result = pg_query($db_connection, "SELECT * FROM products WHERE id=". $product_id);

    $array = pg_fetch_array($result);

    if($result){

        $cost = $array['price'] * $quantity;
        $date = date('Y-m-d H:i:s');
        $id = $_SESSION["id"];

        $query = pg_query($db_connection,
			"INSERT INTO orders  (price, units, total, date, idProduct, idUsuario)
					VALUES( " .$array['price'] .",$quantity, $cost  ,'2017-03-14',1 ,1 )");

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
