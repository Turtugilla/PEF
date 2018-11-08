<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CONOCENOS || POLLITOS EN FUGA</title>
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
          <li class="active"><a href="about.php">ACERCA</a></li>
          <li><a href="products.php">PRODUCTOS</a></li>
          <li><a href="cart.php">CARRITO</a></li>
          <li><a href="orders.php">ORDENES</a></li>
          <li><a href="contact.php">CONTACTO</a></li>
          <?php
    
          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">Mi cuenta</a></li>';
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

    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <p>POLLITOS EN FUGA es un proyecto de comercio electronico. Todos los productos listados son falsos. Este proyecto solo ofrece una vista previa de cómo será una implementación en el mundo real del sitio web de comercio electrónico.
        <footer>
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
