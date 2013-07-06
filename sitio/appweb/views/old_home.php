<!--Cabecera -->
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="es"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Noticias de la semana Blog</title>
  <meta name="description" content="Gestor de contenidos IanCMS">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="<?php print base_url();?>css/normalize.css">
  <link rel="stylesheet" href="<?php print base_url();?>css/main.css">
  <link rel="stylesheet" href="<?php print base_url();?>css/slider.css">
  <link href="<?php print base_url();?>css/bootstrap.css" rel="stylesheet">
  <link href="<?php print base_url();?>css/bootstrap-responsive.css" rel="stylesheet">
  <link rel="shortcut icon" href="<?php print base_url();?>ico/favicon.ico">
</head>

<body>
  <div id="fb-root"></div>

        <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- Fav and touch icons -->

<!-- /Cabecera>

  <!-- Menu-->

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
          <a class="brand" href="<?php print base_url();  ?>">ISPADE</a>
          <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
          <div class="nav-collapse">
            <ul class="nav">
              <li class="<?php @print $active1;?>"><a href="<?php print base_url();?>"><i class="icon-home icon-white"></i>&nbsp; Inicio</a></li>
              <li class="<?php @print $active2;?>"><a href="<?php print base_url();?>index.php/nosotros"><i class="icon-globe icon-white"></i> &nbsp; Nosotros</a></li>
              <li class="<?php @print $active3;?>"><a href="<?php print base_url();?>index.php/noticias"><i class="icon-inbox icon-white"></i>&nbsp; Noticias</a></li>
              <li class="<?php @print $active4;?>"><a href="<?php print base_url();?>index.php/servicios"><i class="icon-th-large icon-white"></i>&nbsp; Servicios</a></li>
              <li class="<?php @print $active5;?>"><a href="<?php print base_url();?>index.php/contactos"><i class="icon-comment icon-white"></i>&nbsp; Contáctos</a></li>
              <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-certificate icon-white"></i>&nbsp; Extras <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#"><div class="fb-like" data-href="http://isp.liposerve.com" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true" data-colorscheme="dark" data-action="recommend"></div></a></li>
                  <li><a href="https://twitter.com/share" class="twitter-share-button" data-lang="en">Tweetear Esta Página</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Administrador</li>
                  <li><a href="<?php print base_url(); ?>index.php/login"><i class="icon-user"></i>&nbsp;Iniciar Sesión</a></li>                  
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!-- /.navbar-inner -->
      </div><!-- /.navbar -->
    </div><!-- /.container -->
    <!--/menu-->

    <!-- Carousel ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php print base_url();?>img/portada/slide1.jpg" alt="Ubuntu + Gnome 3">
          <div class="container">
            <div class="carousel-caption">
              <h1>Qué es Ubuntu?</h1>
              <p class="lead">Ubuntu es un sistema operativo basado en GNU/Linux desarrollado por la comunidad deusuarios que es perfecto para computadores de escritorio, portátiles y servidores.</p>
              <a class="btn  btn-primary" href="<?php print base_url();?>">Continuar...</a>
            </div>
          </div>
        </div>

        <div class="item">
          <img src="<?php print base_url(); ?>img/portada/slide2.jpg" alt="Ubunto no es Windows">
          <div class="container">
            <div class="carousel-caption">
              <h1>Diferencias con Windows.</h1>
              <p class="lead">Existen algunas más, pero las que siguen son mis 10 razones fundamentales por las que desde hace ya unos años soy usuario convencido de Linux.</p>
              <a class="btn  btn-primary" href="#">Continuar...</a>
            </div>
          </div>
        </div>

        <div class="item">
          <img src="<?php print base_url(); ?>img/portada/slide3.jpg" alt="Distribuciones linux">
          <div class="container">
            <div class="carousel-caption">
              <h1>Distribuciones.</h1>
              <p class="lead">Una distribución Linux (coloquialmente llamada distro) es una distribución de software basada en el núcleo Linux que incluye determinados paquetes de software para satisfacer las necesidades de un grupo específico de usuarios</p>
              <a class="btn  btn-primary" href="#">Continuar...</a>
            </div>
          </div>
        </div>

        <div class="item">
          <img src="<?php print base_url(); ?>img/portada/slide4.jpg" alt="KDE Logo">
          <div class="container">
            <div class="carousel-caption">
              <h1>Noticias.</h1>
              <p class="lead">Estamos de enhorabuena, y es que Canonical ha decidido aumentar el soporte extendido de sus versiones LTS a 5 años.</p>
              <a class="btn  btn-primary" href="#">Continuar...</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
    <!-- /.carousel -->

<!--Articulos Home -->
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <img  src="<?php print base_url(); ?>img/portada/instalar.png">
          <h2>Como Instalar</h2>
          <p>Si eres un recién iniciado en Linux probablemente te hayan recomendado probar Ubuntu: una distribución muy sencilla y fácil de usar que, además, tiene un aspecto visual amigable </p>
          <p><a class="btn" href="#">Más Detalles &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img src="<?php print base_url(); ?>img/portada/soporte.png">
          <h2>Compatibilidad</h2>
          <p>Si estás pensando en instalar Ubuntu necesitas un mínimo de hardware compatible. Normalmente hay una serie de dispositivos más conflictivos y otros que suelen funcionar sin ningún tipo de problemas.</p>
          <p><a class="btn" href="#">Más Detalles &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img src="<?php print base_url(); ?>img/portada/obtener.png">
          <h2>Obtener SO</h2>
          <p>Puedes descargarlo pinchando sobre el botón</p>
          <br/>
          <br/>
          <br/>

          <p><a href="<?php print base_url(); ?>img/portada/manual.pdf" class="btn btn-success"> click aquí </a></p>
      </div><!-- /.span4 -->
  </div><!-- /.row -->
</div>
<!--/Articulos Home -->

<!--Pie de pagina y funciones js y librerias js-->
<div class = "hero-unit" style="text-align:center; backgorund-color:#EDF1F7;">  
    <div class="row-fluid">
    <div class="span4">    
      <a href="https://plus.google.com/100547190152722659325/posts">
        <img src="<?php print base_url(); ?>img/portada/google.png" alt="Google plus" width="90" hight="90">
        
    </a>
</div><!--/span-->       
<div class="span4">    
  <a href="http://facebook.com/eduardo.villota">
    <img src="<?php print base_url(); ?>img/portada/facebook.png" alt="Facebook" width="90" hight="90">
   
</a>
</div><!--/span-->       
<div class="span4">    
  <a href="http://twitter.com/eduardouio">
    <img src="<?php print base_url(); ?>img/portada/twitter.png" alt="Twitter" width="90" hight="90">
    
</a>
</div><!--/span-->       
</div><!--/row-->    
<p>&nbsp;</p>
<small style="font-size: 11px;">    
    <p>
        &copy; 2013 Instituto Técnico Superior Para El Desarrollo ISPADE  <a href="http://ispade.edu.ec/web/FrameTotal.html?id=home">Términos De Privacidad</a>
        <br>Sitio Desarrollado Por Eduardo Villota <a href="http://twitter.com/eduardouio" blank="_blank">eduardouio7@gmail.com</a>
    </p>
</small>
</div>       
</body>
<script id="twitter-wjs" src="https://platform.twitter.com/widgets.js"></script><script id="facebook-jssdk" src="//connect.facebook.net/es_LA/all.js#xfbml=1"></script><script src="http://localhost/ispade/sitio/js/vendor/modernizr-2.6.2.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script src="<?php print base_url();?>js/jquery.js"></script>
  <script src="<?php print base_url();?>js/bootstrap-transition.js"></script>    
  <script src="<?php print base_url();?>js/bootstrap-dropdown.js"></script>
  <script src="<?php print base_url();?>js/bootstrap-scrollspy.js"></script>  
  <script src="<?php print base_url();?>js/bootstrap-button.js"></script>  
  <script src="<?php print base_url();?>js/bootstrap-carousel.js"></script>  
  <script>
  !function ($) {
    $(function(){
      $('#myCarousel').carousel()
    })
  }(window.jQuery)
  </script>
  
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
  if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";
fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>
</html>
<!--/Pie de pagina y funciones js y librerias js-->