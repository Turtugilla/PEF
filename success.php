<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>POLLITOS EN FUGA</title>
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
          <li><a href="cart.php">CARRITO</a></li>
          <li><a href="orders.php">ORDENES</a></li>
          <li><a href="contact.php">CONTACTO</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">Mi Cuenta</a></li>';
            echo '<li><a href="logout.php">Salir</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Registrarse</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>

    <div class="row" style="margin-top:10px;">
      <div class="small-12">
        <p> Éxito. Cualquier tarea que haya realizado, se ha ejecutado con éxito. Felicidades! </p>
         <p> En caso de que haya comprado un producto, revise su correo electrónico no deseado para el recibo. </p>

        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">&copy; Tienda. Todos los derechos reservados.</p>
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
