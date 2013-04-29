<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>IanCMS</title>
        <meta name="description" content="IanCMS">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/slider.css">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <link rel="shortcut icon" href="ico/favicon.ico">
    
    </head>
    <body>
       
        <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- Fav and touch icons -->

  
     <!-- NAVBAR
    ================================================== -->
    <!-- Wrap the .navbar in .container to center it on the page and provide easy way to target it with .navbar-wrapper. -->
    <div class="container navbar-wrapper">
      <div class="navbar navbar-inverse">
        <div class="navbar-inner">
          <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">ISPADE</a>
          <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Inicio</a></li>
              <li><a href="#about">Nosotros</a></li>
              <li><a href="#about">Noticias</a></li>
              <li><a href="#about">Servicios</a></li>
              <li><a href="#about">Spliciudes</a></li>
              <li><a href="#contact">Contacost</a></li>
              <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Extras <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Solicitud Servicio</a></li>
                  <li><a href="#">Inscribirme a Noticias</a></li>
                  <li><a href="#">Firmar Libro de Visitas</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Administrador</li>
                  <li><a href="#">Iniciar Sesión</a></li>                  
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!-- /.navbar-inner -->
      </div><!-- /.navbar -->

    </div><!-- /.container -->



    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="http://rosix.ru/media/carousel/2013/2/6/plx.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Novedad 1</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Leer más...</a>
            </div>
          </div>
        </div>

        <div class="item">
          <img src="http://www.mjrtech.com.br/assets/img/examples/slide-01.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Cartera de Servicios.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Leer más</a>
            </div>
          </div>
        </div>

        <div class="item">
          <img src="http://layerjet.com/images/xintro_cover.jpg.pagespeed.ic.-8lj_Du2vI.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Ultimas Noticias.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Lisitar Noticias</a>
            </div>
          </div>
        </div>
      </div>

      <div class="item">
          <img src="http://rosix.ru/media/carousel/2013/2/6/plx.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Solicitud de servicio.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Solicitar Servicio</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <img class="img-circle" src="http://escorpro.org/images/linux.png">
          <h2>Servicios</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
          <p><a class="btn" href="#">Más Detalles &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" src="https://lh6.googleusercontent.com/-zKKAP-O2nzA/TqbJaOATpPI/AAAAAAAADO4/jn6D4_lutzs/archlinux-cool-logo-140px.png">
          <h2>Noticia 1</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">Más Detalles &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" src="http://noticias.area7g.com/wp-content/mandriva-logo2.png">
          <h2>Noticia 2</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">Más Detalles &raquo;</a></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->



<div class="container" style="color:#8f8f8f;"> 
  <hr class="nav-tabs">
  <div class="row-fluid">
  <div class="span4">    
  <h3>Certificaciones</h3>
  <p>
   conta
  </p>          
  </div><!--/span-->       
  <div class="span4">    
  <h3>Servicios</h3>
  <p>
    sl
    </p>          
  </div><!--/span-->       
  <div class="span4">    
  <h3>Contactos</h3>
  <p>
  ll
  </p>                    
  </div><!--/span-->       
  </div><!--/row-->    
  
<small style="font-size: 11px;">    
  <footer style="text-align:center;;">  
  
        
        <p>&copy; 2013 Instituto Para El Desarrollo ISPADE &middot; <a href="#">Términos</a> &middot; <a href="#">de Privacidad </a></p>
        
</small>
  </footer>       
  </div>

      
      <!-- FOOTER -->
      <footer>
        
      </footer>

    </div><!-- /.container -->
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
