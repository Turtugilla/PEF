<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])) {
  header("location:inicio.php");
}

if($_SESSION["type"]!="admin") {
  header("location:inicio.php");
}

include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>POLLITOS EN FUGA</title>

      <link rel="stylesheet" href="css/main.css"/>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/owl.carousel.css">
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/responsive.css">

      <!-- icons -->
      <link rel="icon" href="images/ico/favicon.ico">
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="57x57" href="../images/ico/apple-touch-icon-57-precomposed.png">
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

  <header id="header">
      <div class="top-bar">
          <div class="container">
              <div class="row">
                  <div class="col-sm-8">
                      <div class="info-box">
                          <i class="fa fa-envelope"></i>
                          <div class="info-text">
                              <h5>Correo electrónico:</h5>
                              <a href="mailto:cofee@diagram.com">cofee@diagram.com</a>
                          </div>
                      </div>
                      <div class="info-box">
                          <i class="fa fa-phone"></i>
                          <div class="info-text">
                              <h5>Teléfono:</h5>
                              <span>+121 2134345678</span>
                          </div>
                      </div>
                      <div class="info-box">
                          <i class="fa fa-clock-o"></i>
                          <div class="info-text">
                              <h5>Horario Atención:</h5>
                              <a href="#">Lun-Vie: 9:00 am - 6:00 pm</a>
                          </div>
                      </div>
                  </div>

                  <div class="col-sm-4">

                  </div>
              </div>
          </div><!-- container -->
      </div><!-- top-bar -->

      <div class="main-menu">
          <nav class="navbar navbar-default">
              <div class="container">
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="index.html"><img class="img-responsive" src="images/logo.png" alt="Logo"></a>
                  </div>
                  <div class="collapse navbar-collapse" id="navbar-collapse">
                      <ul class="nav navbar-nav navbar-right">
                          <li class="active"><a href="inicio.php">Inicio</a></li>
                          <li><a href="about.php">Quiénes Somos</a></li>
                          <li><a href="products.php">Productos</a></li>
                          <li><a href="cart.php">Carrito</a></li>
                          <li><a href="orders.php">Ordenes</a></li>
                          <li><a href="contact.php">Contacto</a></li>
                          <?php

                          if(isset($_SESSION['email'])){
                              echo '<li><a href="account.php">Mi cuenta</a></li>';
                              echo '<li><a href="logout.php">Salir</a></li>';
                          }
                          else{
                              echo '<li><a href="login.php">Log In</a></li>';
                              echo '<li><a href="register.php">Registrarse</a></li>';
                          }
                          ?>
                      </ul>
                  </div>
              </div><!-- container -->
          </nav><!-- navbar -->
      </div><!-- main menu -->
  </header><!-- Header -->

  <div class="breadcrumb-section image-bg ">
	  <div class="overlay"></div>
	  <div class="breadcrumb-content container">
		  <h1>Mi cuenta</h1>
		  <ol class="breadcrumb">
			  <li><a href="inicio.php">Regresar</a></li>
			  <li class="active">Account</li>
		  </ol>
	  </div>
  </div><!-- breadcrumb-section -->



  <!--
      <img data-interchange="[images/bolt-retina.jpg, (retina)], [images/bolt-landscape.jpg, (large)], [images/bolt-mobile.jpg, (mobile)], [images/bolt-landscape.jpg, (medium)]">
      <noscript><img src="images/bolt-landscape.jpg"></noscript>
  -->

	  <div class="container">
		  <div class="section-title text-center">
			  <h1>Adminstrador</h1>
		  </div>
       <div class="section-padding">
		  <button  onclick="window.location.replace('index.php/examples/users_management')"
				   type="button">Configuración de Usuarios</button>

		  <button  onclick="window.location.replace('index.php/examples/orders_management')"
				   type="button">Configuración de Ordenes</button>

		  <button  onclick="window.location.replace('index.php/examples/products_management')"
				   type="button">Configuración de Productos</button>
	   </div>

	  </div><!-- container -->



<footer class="footer">
      <div class="contact-section">
          <div class="container">
              <div class="row">
                  <div class="col-sm-3">
                      <div class="contact-widget">

                          <img class="img-responsive" src="images/logo2.png" alt="">

                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                          <p>Sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="contact-widget">
                          <h3>Business Hours</h3>
                          <p>Our support available to help you 24 hours a day, seven days a week.</p>
                          <p>Monday - Thursday @ 09.00 - 17.30</p>
                          <p>Friday & Saturday @ 10.00 - 16.00</p>
                          <p>Sunday - <span> Closed </span></p>
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="contact-widget">
                          <h3>Quick Links</h3>
                          <ul>
                              <li><a href="#">About Us</a></li>
                              <li><a href="#">Projects</a></li>
                              <li><a href="#">Services</a></li>
                              <li><a href="#">Latest News</a></li>
                              <li><a href="#">Shop</a></li>
                          </ul>
                          <ul>
                              <li><a href="#">Who We Are</a></li>
                              <li><a href="#">Creer</a></li>
                              <li><a href="#">Contac Us</a></li>
                              <li><a href="#">Features</a></li>
                              <li><a href="#">FAQ</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="contact-widget">
                          <h3>Our Office</h3>
                          <address>
                              <ul>
                                  <li><span class="address">Address:</span>1052 – 1054 Christchurch Road, Bournemouth, BH7 6DS</li>
                                  <li><span>Phone: </span>+210 2234 546 78</li>
                                  <li><span>Email: </span><a href="#">support@diagram.com</a></li>
                              </ul>
                          </address>
                          <ul class="footer-social list-inline">
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                              <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                              <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                          </ul>
                      </div>
                  </div>
              </div><!-- row -->

          </div><!-- container -->
      </div><!-- contact informetion -->

      <div class="footer-bottom">
          <div class="container">
              <div class="copyright-text text-center">
                  <p>&copy; Diagram 2017 | Design & Developed By <a href="http://www.gridbootstrap.com/">GridBootstrap</a></p>
              </div>
          </div>
      </div><!-- footer bottom -->
  </footer><!-- footer -->
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/bienvenida.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
