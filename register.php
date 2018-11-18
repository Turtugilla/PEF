<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if (isset($_SESSION["username"])) {header ("location:inicio.php");}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro || POLLITOS EN FUGA</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="inicio.php">POLLITOS EN FUGA</a></h1>
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
            echo '<li class="active"><a href="register.php">Registrarse</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>





    <form method="POST" action="insert.php" style="margin-top:30px;">
      <div class="row">
        <div class="small-8">

          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Nombre(s)</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Nayan" name="fname">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Apellido(s)</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Seth" name="lname">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Pais</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Infinite Loop" name="address">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Ciudad</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Mumbai" name="city">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Codigo Postal</label>
            </div>
            <div class="small-8 columns">
              <input type="number" id="right-label" placeholder="400056" name="pin">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">E-Mail</label>
            </div>
            <div class="small-8 columns">
              <input type="email" id="right-label" placeholder="nayantronix@gmail.com" name="email">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Password</label>
            </div>
            <div class="small-8 columns">
              <input type="password" id="right-label" name="pwd">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">

            </div>
            <div class="small-8 columns">
              <input type="submit" id="right-label" value="Registrarse" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              <input type="reset" id="right-label" value="Resetear" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
            </div>
          </div>
        </div>
      </div>
    </form>


    <div class="row" style="margin-top:10px;">
      <div class="small-12">
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
