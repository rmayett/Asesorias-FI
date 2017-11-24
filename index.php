<?php
session_start();
if (isset($_SESSION['logged']) === FALSE) {
  header("Location: login.php");
}
$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];
?>
<!DOCTYPE html>
<html lang="es" manifest="aps.appcache">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Asesorías Facultad de Ingeniería</title>
  <link rel="shortcut icon" href="https://www.unam.mx/sites/default/files/favicon_0.ico" type="image/vnd.microsoft.icon" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/sites/all/themes/unam/apple_icon.png" /> 
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="css/uikit.css">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">  
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <script src="js/vendor/modernizr.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="js/uikit.min.js"></script>
  <script src="js/mapa.js"></script>
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<!--[if lte IE 8]>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
<![endif]-->
<!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
<!--<![endif]-->
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/marketing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/marketing.css">
    <!--<![endif]-->
</head>
<body>
  <div class="custom-menu-wrapper">
          <div class="pure-menu custom-menu custom-menu-top">
              <a href="http://www.ingenieria.unam.mx" class="pure-menu-heading custom-menu-brand"><img src="img/fib.png" width="40" height="40"></a>
              <a href="#" class="custom-menu-toggle" id="toggle"><s class="bar"></s><s class="bar"></s></a>
          </div>
          <div class="pure-menu pure-menu-horizontal pure-menu-scrollable custom-menu custom-menu-bottom custom-menu-tucked" id="tuckedMenu">
              <div class="custom-menu-screen"></div>
              <ul class="pure-menu-list">
                  <li class="pure-menu-item"><a href="#" data-reveal-id="Reg" class="pure-menu-link">Registrarse</a></li>
                  <li class="pure-menu-item"><a href="#" data-reveal-id="Log" class="pure-menu-link">Iniciar Sesión</a></li>
                  <li class="pure-menu-item"><a href="mailto:rmayett@comunidad.unam.mx?Subject=Soporte%20Asesorias" class="pure-menu-link"><i class="fa fa-inbox"></i>Contacto</a></li>
              </ul>
          </div>
      </div>
<center>
    <div class="row">
      <h1 class="content-head is-center" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">Asesorías</h1>
      <hr>
    </div>
</center>
</div>
     <div class="row">
       <div class="large-12 columns">
          <div class="row">
            <div class="large-3 small-6 columns">
               <a href="#" data-reveal-id="Ciencias"> <img src="img/cb.jpg" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}"/></a>
                <h6 class="panel"><a href="#" data-reveal-id="Ciencias" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">Ciencias Básicas</a></h6>
            </div>
            <div class="large-3 small-6 columns">
              <a href="#" data-reveal-id="Prog"> <img src="img/prog.jpg" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}"/></a>             
             <h6 class="panel"><a href="#" data-reveal-id="Prog" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">Programación</a></h6>
            </div>
            <div class="large-3 small-6 columns">
              <a href="#" data-reveal-id="Elec"> <img src="img/elec.jpg" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}"/></a>              
              <h6 class="panel"><a href="#" data-reveal-id="Elec" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">Electrónica</a></h6>
            </div>
            <div class="large-3 small-6 columns">
            <a href="#" data-reveal-id="CH"> <img src="img/ch.jpg" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}"/></a>             
             <h6 class="panel"><a href="#" data-reveal-id="CH" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">Ciencias y Humanidades</a></h6>
            </div>
          </div>
        </div>
      </div>
<center>
<div class="row">
      <h1 class="content-head is-center" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">¿Donde encontrarnos?</h1>
      <hr>
      <div id="map" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}"></div>
    </div>
</center>
<div class="content">
        <h2 class="content-head is-center" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">Información de Contacto.</h2>
              <hr>
        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
              <p>
                <a href="mailto:rmayett@comunidad.unam.mx?Subject=Soporte%20Asesorias" class="pure-menu-link"><img src="img/ro.jpg" alt="" name="aboutme" width="140" height="140" class="img-circle" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}" /> </a>
                <dl>
                  <dt data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">Rodrigo Mayett Guzmán</dt>
                  <a href="mailto:#@comunidad.unam.mx?Subject=Soporte%20Asesorias" class="pure-menu-link"><img src="img/ge.jpg" alt="" name="aboutme" width="140" height="140" class="img-circle" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}" /> </a>
                  <dt data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">Gerardo Castillo</dt>
                  <dd></dd>
                </dl>
              </p>

            </div>


            <div class="l-box-lrg pure-u-1 pure-u-md-3-5">

                <h4 data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">Mas Información</h4>
                <p data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
                    Datos 
                </p>
                <h4 data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">Siguenos</h4>
                <div class="col-md-12">
                          <ul class="social-network social-circle">
                              <li data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}"><a href="https://www.facebook.com/fi.unam.mx/" class="icoFacebook fondo" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                              <li data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}"><a href="https://twitter.com/unam_fi?lang=es" class="icoTwitter fondo" title="Twitter"><i class="fa fa-twitter"></i></a></li>                              
                          </ul>
              </div>
            </div>
        </div>

    </div>

    <div class="footer l-box is-center" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
      <p data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
        BestIt Solutions © 
      </p>
      <p data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}" class="hide-for-medium-only">
        Powered by <a href="http://rmayett27.azurewebsites.net/">BestIt Solutions</a>
      </p>
      <p class="show-for-medium-only">
        Powered by <a href="http://rmayett27.azurewebsites.net/">BestIt Solutions</a>
      </p>
    </div>
</div>

</div>
<!-- Modals Registro -->
<div id="Reg" class="reveal-modal small" data-reveal aria-labelledby="RegTitle" aria-hidden="true" role="dialog">
  <h3 id="RegTitle">Registro</h3>
  <hr>
  <center>
  <img src="img/reg.png" alt="" width="100" height="100" class="img-circle" />
  <form>
  <div>    
    <label>Correo</label>
    <input type="text" id="sign-in-form-correo">
    <label>Usuario</label>
    <input type="text" id="sign-in-form-user">
    <label>Generación </label>
    <input type="text" id="sign-in-form-generacion">
    <button type="submit">Registrarse</button>
  </div>
</form>
</center>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
<!-- Modal -->
<!-- Modals sesion -->
<div id="Log" class="reveal-modal small" data-reveal aria-labelledby="LogTitle" aria-hidden="true" role="dialog">
  <h3 id="LogTitle">Iniciar Sesión</h3>
  <hr>
  <center>
  <img src="img/reg.png" alt="" width="100" height="100" class="img-circle" />
  <form>
  <div>    
    <label>Correo</label>
    <input type="text" id="sign-in-form-correo">
    <label>Usuario</label>
    <input type="text" id="sign-in-form-user">
    <button type="submit">Iniciar Sesión</button>
  </div>
</form>
</center>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
<!-- Modal -->
<!-- Modals CienciasB -->
<div id="Ciencias" class="reveal-modal medium" data-reveal aria-labelledby="CienciasTitle" aria-hidden="true" role="dialog">
  <h3 id="CienciasTitle">Ciencias Básicas</h3>
  <hr>
  <center>
  <img src="img/cb.jpg" alt="" width="200" height="200" class="img-circle" />
  <h3>Horarios</h3>
  <span><strong>Asesorías: </strong></span>
</center>
<hr>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
<!-- Modal -->
<!-- Modals Programacion -->
<div id="Prog" class="reveal-modal medium" data-reveal aria-labelledby="ProgTitle" aria-hidden="true" role="dialog">
  <h3 id="ProgTitle">Programación</h3>
  <hr>
  <center>
  <img src="img/prog.jpg" alt="" width="200" height="200" class="img-circle" />
  <h3>Horarios</h3>
  <span><strong>Asesorías: </strong></span>
</center>
<hr>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
<!-- Modal -->
<!-- Modals Electronica -->
<div id="Elec" class="reveal-modal medium" data-reveal aria-labelledby="ElecTitle" aria-hidden="true" role="dialog">
  <h3 id="ElecTitle">Electrónica</h3>
  <hr>
  <center>
  <img src="img/elec.jpg" alt="" width="200" height="200" class="img-circle" />
  <h3>Horarios</h3>
  <span><strong>Asesorías: </strong></span>
</center>
<hr>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
<!-- Modal -->
<!-- Modals Humanidades -->
<div id="CH" class="reveal-modal medium" data-reveal aria-labelledby="CHTitle" aria-hidden="true" role="dialog">
  <h3 id="CHTitle">Ciencias y Humanidades</h3>
  <hr>
  <center>
  <img src="img/ch.jpg" alt="" width="200" height="200" class="img-circle" />
  <h3>Horarios</h3>
  <span><strong>Asesorías: </strong></span>
</center>
<hr>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
<!-- Modal -->
<script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAM7XSGE6WzWrRFPcMZfrhud02TdJlxowU&callback=initMap">
    </script>
  <script>
    $(document).foundation();
  </script>
<script>
    (function (window, document) {
    document.getElementById('toggle').addEventListener('click', function (e) {
        document.getElementById('tuckedMenu').classList.toggle('custom-menu-tucked');
        document.getElementById('toggle').classList.toggle('x');
    });
    })(this, this.document);
    </script> 
</body>
</html>