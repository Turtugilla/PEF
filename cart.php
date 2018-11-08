<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CARRITO || POLLITOS EN FUGA</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">POLLITOS EN FUGA</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="about.php">ACERCA</a></li>
          <li><a href="products.php">PRODUCTOS</a></li>
          <li class="active"><a href="cart.php">CARRITO</a></li>
          <li><a href="orders.php">ORDENES</a></li>
          <li><a href="contact.php">CONTACTO</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>




    <div class="row" style="margin-top:10px;">
      <div class="large-12">
        <?php

          echo '<p><h3>Carrito de Compras</h3></p>';

          if(isset($_SESSION['cart'])) {

            $total = 0;
            echo '<table>';
            echo '<tr>';
            echo '<th>Codigo</th>';
            echo '<th>Nombre</th>';
            echo '<th>Cantidad</th>';
            echo '<th>Costo</th>';
            echo '</tr>';
            foreach($_SESSION['cart'] as $product_id => $quantity) {

            $result = $mysqli->query("SELECT product_code, product_name, product_desc, qty, price FROM products WHERE id = ".$product_id);


            if($result){

              while($obj = $result->fetch_object()) {
                $cost = $obj->price * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost

                echo '<tr>';
                echo '<td>'.$obj->product_code.'</td>';
                echo '<td>'.$obj->product_name.'</td>';
                echo '<td>'.$quantity.'&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="update-cart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id='.$product_id.'">-</a></td>';
                echo '<td>'.$cost.'</td>';
                echo '</tr>';
              }
            }

          }



          echo '<tr>';
          echo '<td colspan="3" align="right">Total</td>';
          echo '<td>'.$total.'</td>';
          echo '</tr>';

          echo '<tr>';
          echo '<td colspan="4" align="right"><a href="update-cart.php?action=empty" class="button alert">Carro Vacio</a>&nbsp;<a href="products.php" class="button [secondary success alert]">Continuar comprando</a>';
          if(isset($_SESSION['username'])) {
            echo '<a href="orders-update.php"><button style="float:right;">COD</button></a>';
          }

          else {
            echo '<a href="login.php"><button style="float:right;">Login</button></a>';
          }

          echo '</td>';

          echo '</tr>';
          echo '</table>';
        }

        else {
          echo "No has agregado productos al carrito.";
        }





          echo '</div>';
          echo '</div>';
          ?>



    <div class="row" style="margin-top:10px;">
      <div class="small-12">




        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;clear:both;">&copy; Tienda. Todos los derechos reservados.</p>
        </footer>

      </div>
    </div>





    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
