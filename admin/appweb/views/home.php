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
  <title> Bienvenido </title>
  <meta name="description" content="Gestor de contenidos IanCMS">
  <meta name="description" content="hjolas">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="<?php print base_url();?>css/normalize.css">
  <link rel="stylesheet" href="<?php print base_url();?>css/main.css">
  <link rel="stylesheet" href="<?php print base_url();?>css/slider.css">
  <link href="<?php print base_url();?>css/bootmetro.css" rel="stylesheet">
  <link href="<?php print base_url();?>css/bootmetro-responsive.css" rel="stylesheet">
  <link rel="shortcut icon" href="<?php print base_url();?>ico/favicon.ico">
</head>
<!-- /Cabecera><!-- /Cabecera><!--Cuerpo de página-->
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
<!-- Menu-->

     <!-- NAVBAR
     ================================================== -->
     <!-- Wrap the .navbar in .container to center it on the page and provide easy way to target it with .navbar-wrapper. -->
     <div class="container navbar-wrapper">
      <div class="navbar navbar-inverse">
        <div class="navbar-inner">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php print base_url(); ?>/">ISPADE</a>
          <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="<?php print base_url(); ?>/"><i class="icon-home icon-white"></i>&nbsp; Inicio</a></li>
              <li class=""><a href="<?php print base_url(); ?>/index.php/nosotros"><i class="icon-globe icon-white"></i> &nbsp; Nosotros</a></li>
              <li class=""><a href="<?php print base_url(); ?>/index.php/noticias"><i class="icon-inbox icon-white"></i>&nbsp; Noticias</a></li>
              <li class=""><a href="<?php print base_url(); ?>/index.php/servicios"><i class="icon-th-large icon-white"></i>&nbsp; Servicios</a></li>
              <li class=""><a href="<?php print base_url(); ?>/index.php/contactos"><i class="icon-comment icon-white"></i>&nbsp; Contáctos</a></li>
              <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-certificate icon-white"></i>&nbsp; Extras <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#"><div class="fb-like" data-href="http://isp.liposerve.com" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true" data-colorscheme="dark" data-action="recommend"></div></a></li>
                  <li><a href="https://twitter.com/share" class="twitter-share-button" data-lang="en">Tweetear Esta Página</a></li>
                  <li class="divider"></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!-- /.navbar-inner -->
      </div><!-- /.navbar -->
    </div><!-- /.container -->
    <!--/menu-->    <!-- Carousel ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <!--Bucle de imágenes-->
        <div class="item active"><img src="<?php print base_url(); ?>/img/portada/slide1.jpg" alt="Bienvenidos"><div class="container">
            <div class="carousel-caption">
            <h1>Bienvenidos</h1><p class="lead">
            <p>Sea usted bienvenido, síentase libre de explorar, y no dude en enviarnos sus consultas</p>
            <a class="btn  btn-danger" href="<?php print base_url(); ?>/index.php/home">Continuar...</a>
            </div>
            </div>
            </div><div class="item"><img src="<?php print base_url(); ?>/img/portada/slide2.jpg" alt="Nosotros"><div class="container">
            <div class="carousel-caption">
            <h1>Nosotros</h1><p class="lead">
            <p>Conozca un poco más de nuestra institución, nuestros orígenes y nuestros objetivos</p>
            <a class="btn  btn-danger" href="<?php print base_url(); ?>/index.php/nosotros">Continuar...</a>
            </div>
            </div>
            </div><div class="item"><img src="<?php print base_url(); ?>/img/portada/slide3.jpg" alt="Servicios"><div class="container">
            <div class="carousel-caption">
            <h1>Servicios</h1><p class="lead">
            <p>Siempre a su lado!, Estamos para darle una solución a sus requerimientos, consulte nuestra guía de servicios para mayor detalle</p>
            <a class="btn  btn-danger" href="<?php print base_url(); ?>/index.php/servicios">Continuar...</a>
            </div>
            </div>
            </div><div class="item"><img src="<?php print base_url(); ?>/img/portada/slide4.jpg" alt="Contáctos"><div class="container">
            <div class="carousel-caption">
            <h1>Contáctos</h1><p class="lead">
            <p>La comunicación es el camino al éxito, y nosotros estamos prestos a responderle</p>
            <a class="btn  btn-danger" href="<?php print base_url(); ?>/index.php/contactos">Continuar...</a>
            </div>
            </div>
            </div>        <!--Bucle de imágenes-->
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
    <!-- /.carousel --><!--Articulos Home -->
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
      <div class="row">
        <!-- Se repite tres veces debajo del carrucell -->
        
        <div class="span4"><img  src="<?php print base_url(); ?>/img/portada/bienvenido.png"><h2> Bienvenido</h2><p>Sean todos bienvenidos, estamos para servirle de la mejor manera, informandole y bindando servicios de manera oportuna</p><p><a class="btn btn-info" href="<?php print base_url(); ?>/index.php/home">Más Detalles &raquo;</a></p></div><!-- /.span4 --><div class="span4"><img  src="<?php print base_url(); ?>/img/portada/noticias.png"><h2> Noticias</h2><p>Estamos siempre a la vanguardia de los echos tecnológicos, sus acontecimientos y novedades, no se pierda ninguna noticia.</p><p><a class="btn btn-info" href="<?php print base_url(); ?>/index.php/noticias">Más Detalles &raquo;</a></p></div><!-- /.span4 --><div class="span4"><img  src="<?php print base_url(); ?>/img/portada/servicios.png"><h2> Nuestros Servicios</h2><p>Tenemos un catalogo completo de los servicios que prestamos, le invitamos a descargarlo y comparar nuestros precios</p><p><a class="btn btn-success" href="<?php print base_url(); ?>/img/portada/manual.pdf" target="_blank">Descargar Manual &raquo;</a></p></div><!-- /.span4 -->        
      </div><!-- /.row -->
    </div>
    <br/>    <!--/Articulos Home -->
<!--Pie de pagina y funciones js y librerias js-->
<div class = "hero-unit container" style="text-align:center; backgorund-color:#EDF1F7;">  
    <div class="row-fluid">
    <div class="span4">    
      <a href="https://plus.google.com/100547190152722659325/posts" target="_blank">
        <img src="<?php print base_url(); ?>/img/sitio/google.png" alt="Google plus" width="90" hight="90">
        
    </a>
</div><!--/span-->       
<div class="span4">    
  <a href="http://facebook.com/eduardo.villota" target="_blank">
    <img src="<?php print base_url(); ?>/img/sitio/facebook.png" alt="Facebook" width="90" hight="90">
   
</a>
</div><!--/span-->       
<div class="span4">    
  <a href="http://twitter.com/eduardouio" target="_blank">
    <img src="<?php print base_url(); ?>/img/sitio/twitter.png" alt="Twitter" width="90" hight="90">
    
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
<!--/Cuerpo de página-->
<script id="twitter-wjs" src="https://platform.twitter.com/widgets.js"></script>
<script id="facebook-jssdk" src="//connect.facebook.net/es_LA/all.js#xfbml=1"></script>
<script src="http://localhost/ispade/sitio/js/vendor/modernizr-2.6.2.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script src="<?php print base_url(); ?>/js/jquery.js"></script>
  <script src="<?php print base_url(); ?>/js/bootstrap-transition.js"></script>    
  <script src="<?php print base_url(); ?>/js/bootstrap-dropdown.js"></script>
  <script src="<?php print base_url(); ?>/js/bootstrap-scrollspy.js"></script>  
  <script src="<?php print base_url(); ?>/js/bootstrap-button.js"></script>  
  <script src="<?php print base_url(); ?>/js/bootstrap-carousel.js"></script> 
  <script src="<?php print base_url(); ?>/js/bootstrap-modal.js"></script>
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
<script type="text/javascript">
$(document).ready(function() {
// Support for AJAX loaded modal window.
$('[data-toggle="modal"]').click(function(e) {
e.preventDefault();
var url = $(this).attr('href');
if (url.indexOf('#') == 0) {
$(url).modal('open');
} else {
$.get(url, function(data) {
$('<div class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-dismiss="modal" > ' + data + '</div>').modal('show');
}).success(function() { $('input:text:visible:first').focus(); });
}
});
});
</script>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
  if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";
fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>
</html>
<!--/Pie de pagina y funciones js y librerias js-->