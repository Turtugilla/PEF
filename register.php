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

    <link rel="stylesheet" href="css/main.css"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="css/font-awesome.min.css">

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
                              <a href="mailto:facpya@gmail.com">facpya@gmail.com</a>
                          </div>
                      </div>
                      <div class="info-box">
                          <i class="fa fa-phone"></i>
                          <div class="info-text">
                              <h5>Teléfono:</h5>
                              <span>+21 34345678</span>
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

  <!-- 
  <div class="contact-form-section section-padding">
    <div class="container">
         <form method="POST" action="insert.php">
            <div class="row">
            <div class="col-sm-4">
              <label for="right-label" class="right inline">Nombre(s)</label>
              <input type="text" id="right-label" name="fname">
                </div></div>
             
             <div class="row">
            <div class="col-sm-4">
              <label for="right-label" class="right inline">Apellido(s)</label>
              <input type="text" id="right-label" name="lname">
                 </div></div>
             
              <div class="row">
            <div class="col-sm-4">
                <label for="right-label" class="right inline">Pais</label>
              <input type="text" id="right-label" name="address">
                 </div></div>
             
                <div class="row">
            <div class="col-sm-4">
            <label for="right-label" class="right inline">Ciudad</label>
              <input type="text" id="right-label" name="city">
                 </div></div>
             
        <div class="row">
            <div class="col-sm-4">
             <label for="right-label" class="right inline">Codigo Postal</label>
              <input type="number" id="right-label" name="pin">
                 </div></div>
             
                 <div class="row">
            <div class="col-sm-4">
             <label for="right-label" class="right inline">E-Mail</label>
              <input type="email" id="right-label" name="email">
                 </div></div>
             
            <div class="row">
            <div class="col-sm-4">
            <label for="right-label" class="right inline">Password</label>
              <input type="password" id="right-label" name="pwd">
                 </div></div>
             
        </form>
    </div>
    </div>-->
    <div class="contact-form-section section-padding">
        <div class="container">
            <div class="section-title text-center">
                <div class="container">
                   <form action="insert.php" method="post">
                       <div class="col-sm-4">
                        <div class="form-group">
                            <i aria-hidden="true"></i>
                            <input id="nombre"
                                   name="fname"
                                   type="text"
                                   class="form-control control-1"
                                   required="required"
                                   placeholder="Nombre(s)"
                            >
                        </div>
                    </div>
                    
                      <div class="col-sm-4">
                        <div class="form-group">
                            <i aria-hidden="true"></i>
                            <input id="apellido"
                                   name="lname"
                                   type="text"
                                   class="form-control control-1"
                                   required="required"
                                   placeholder="Apellido(s)"
                            >
                        </div>
                    </div>
                    
                      <div class="col-sm-4">
                        <div class="form-group">
                            <i aria-hidden="true"></i>
                            <input id="pais"
                                   name="address"
                                   type="text"
                                   class="form-control control-1"
                                   required="required"
                                   placeholder="Pais"
                            >
                        </div>
                    </div>
                    
                      <div class="col-sm-4">
                        <div class="form-group">
                            <i aria-hidden="true"></i>
                            <input id="ciudad"
                                   name="city"
                                   type="text"
                                   class="form-control control-1"
                                   required="required"
                                   placeholder="Ciudad"
                            >
                        </div>
                    </div>
                    
                      <div class="col-sm-4">
                        <div class="form-group">
                            <i aria-hidden="true"></i>
                            <input id="codigopostal"
                                   name="pin"
                                   type="number"
                                   class="form-control control-1"
                                   required="required"
                                   placeholder="Codigo Postal"
                            >
                        </div>
                    </div>
                    
                      <div class="col-sm-4">
                        <div class="form-group">
                            <i aria-hidden="true"></i>
                            <input id="email"
                                   name="email"
                                   type="email"
                                   class="form-control"
                                   required="required"
                                   placeholder="E-Mail"
                            >
                        </div>
                    </div>
                    <! --
                      <div class="col-sm-4">
                        <div class="form-group">
                            <i aria-hidden="true"></i>
                            <input id="pago"
                                   name="pago"
                                   type="text"
                                   class="form-control"
                                   required="required"
                                   placeholder="Metodo de Pago"
                            >
                        </div>
                    </div>
			 -->  
			          <div class="col-sm-4">
                        <div class="form-group">
                            <i aria-hidden="true"></i>
                            <input id="password"
                                   name="password"
                                   type="password"
                                   class="form-control"
                                   required="required"
                                   placeholder="Password"
                            >
                        </div>
                    </div>

					<div class="submit-button">
                      <button type="submit"  class="btn btn-primary">Enviar</button>
                      <input type="reset" id="right-label" value="Reset" class="btn btn-primary" >
					</div>

                    
                </form>
            </div>
        </div>
    </div>
    
    <footer class="footer">
      <div class="contact-section">
          <div class="container">
              <div class="row">
                  <div class="col-sm-3">
                      <div class="contact-widget">

                          <img class="img-responsive" src="images/logo2.png" alt="">

                          <p> </p>
                          
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="contact-widget">
                          <h3>Horas de Trabajo</h3>
                          <p>Soporte disponible para ayudarte 24/7.</p>
                          <p>Lunes-Jueves @ 09.00 - 17.30</p>
                          <p>Viernes & Sabado @ 10.00 - 16.00</p>
                          <p>Domingo - <span> Cerrado </span></p>
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="contact-widget">
                          <h3>Enlaces rapido</h3>
                          <ul>
                              <li><a href="inicio.php">Inicio</a></li>
                              <li><a href="about.php">Acerca</a></li>
                              <li><a href="contact.php">Contacto</a></li>
                              <li><a href="register.php">Registrarse</a></li>
                              <li><a href="login.php">LogIn</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="contact-widget">
                          <h3>Our Office</h3>
                          <address>
                              <ul>
                                  <li><span class="address">Address:</span>Carretera a Garcia Km 1.3 Parque Stiva Santa Catarina N.L., Santa Catarina, Nuevo León</li>
                                  <li><span>Phone: </span>+210 2234 546 78</li>
                                  <li><span>Email: </span><a href="#">facpya@gmail.com</a></li>
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
                  <p>&copy; Diagram 2018 </p>
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
