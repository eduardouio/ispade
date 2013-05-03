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
  <link rel="stylesheet" href="http://127.0.0.1/ispade/sitio/css/normalize.css">
  <link rel="stylesheet" href="http://127.0.0.1/ispade/sitio/css/main.css">
  <link rel="stylesheet" href="http://127.0.0.1/ispade/sitio/css/slider.css">
  <link href="http://127.0.0.1/ispade/sitio/css/bootstrap.css" rel="stylesheet">
  <link href="http://127.0.0.1/ispade/sitio/css/bootstrap-responsive.css" rel="stylesheet">
  <script src="http://127.0.0.1/ispade/sitio/js/vendor/modernizr-2.6.2.min.js"></script>
  <link rel="shortcut icon" href="http://127.0.0.1/ispade/sitio/ico/favicon.ico">

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="http://127.0.0.1/ispade/sitio/js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
  <script src="http://127.0.0.1/ispade/sitio/js/plugins.js"></script>
  <script src="http://127.0.0.1/ispade/sitio/js/main.js"></script>
  <script type="text/javascript">
  $('#myModal').modal(options);
  </script>
  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<script src="http://127.0.0.1/ispade/sitio/js/jquery.js"></script>
<script src="http://127.0.0.1/ispade/sitio/js/bootstrap-transition.js"></script>
<script src="http://127.0.0.1/ispade/sitio/js/bootstrap-alert.js"></script>
<script src="http://127.0.0.1/ispade/sitio/js/bootstrap-modal.js"></script>
<script src="http://127.0.0.1/ispade/sitio/js/bootstrap-dropdown.js"></script>
<script src="http://127.0.0.1/ispade/sitio/js/bootstrap-scrollspy.js"></script>
<script src="http://127.0.0.1/ispade/sitio/js/bootstrap-tab.js"></script>
<script src="http://127.0.0.1/ispade/sitio/js/bootstrap-tooltip.js"></script>
<script src="http://127.0.0.1/ispade/sitio/js/bootstrap-popover.js"></script>
<script src="http://127.0.0.1/ispade/sitio/js/bootstrap-button.js"></script>
<script src="http://127.0.0.1/ispade/sitio/js/bootstrap-collapse.js"></script>
<script src="http://127.0.0.1/ispade/sitio/js/bootstrap-carousel.js"></script>
<script src="http://127.0.0.1/ispade/sitio/js/bootstrap-typeahead.js"></script>
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
        <div class="nav-collapse http://127.0.0.1/ispade/sitio/collapse">
          <ul class="nav">
            <li class="active"><a href="#"><i class="icon-home icon-white"></i>&nbsp; Inicio</a></li>
            <li><a href="#about"><i class="icon-globe icon-white"></i> &nbsp; Nosotros</a></li>
            <li><a href="#about"><i class="icon-inbox icon-white"></i>&nbsp; Noticias</a></li>
            <li><a href="#about"><i class="icon-th-large icon-white"></i>&nbsp; Servicios</a></li>
            <li><a href="#contact"><i class="icon-comment icon-white"></i>&nbsp; Contáctos</a></li>
            <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-certificate icon-white"></i>&nbsp; Extras <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="icon-share"></i>&nbsp;Compartir Sitio</a></li>
                <li><a href="#"><i class="icon-road"></i>&nbsp;Inscribirme a Noticias</a></li>
                <li><a href="#"><i class="icon-list-alt"></i>&nbsp;Firmar Libro de Visitas</a></li>
                <li class="divider"></li>
                <li class="nav-header">Administrador</li>
                <li><a href="#"><i class="icon-user"></i>&nbsp;Iniciar Sesión</a></li>                  
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!-- /.navbar-inner -->
    </div><!-- /.navbar -->
  </div><!-- /.container -->
  <br/><br/><br/><br/><br/>
  <!-- Contenidos -->
  <div class="container">
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="active"><a href="#"><i class="icon-plus"></i> Lo Más Leido</a></li>
              <li><a href="#"><i class="icon-play"></i>Como Insts alar Ubuntu</a></li>              
              <li><a href="#"><i class="icon-play"></i> Distros Más Conocidas </a></li>              
              <li><a href="#"><i class="icon-play"></i> Ventajas Linux</a></li>              
              <li><a href="#"><i class="icon-play"></i> Deventajas Linux </a></li>              
              <li><a href="#"><i class="icon-play"></i> Costo de Implementacion </a></li>              
            </ul>
          </div>                
        </div>  

        <div class="span9 hero-unit">
         
          <div class="articulo">
           <h4> <img src="http://127.0.0.1/ispade/sitio/img/forward.png" alt="forward"> Sitios Dinámicos</h4>
           <p>
            <img src="http://127.0.0.1/ispade/sitio/img/go_first_rtl.png" >
            Estos sitios aparecen gracias a la creación de programas informáticos desarrollados para el manejo de 
            información del lado del servidor, antes del aparecimiento de estos lenguajes de programación, las... 
          </p>
            <a href="#myModal" class="btn btn-inverse " role="button" class="btn" data-toggle="modal" ><i class="icon-fullscreen icon-white"></i>&nbsp;Abrir</a>
            <hr>
        </div>
        <div class="articulo">
          <h4> <img src="http://127.0.0.1/ispade/sitio/img/forward.png" alt="forward"> Pasos de Instalación</h4>
          <p>
            <img src="http://127.0.0.1/ispade/sitio/img/go_first_rtl.png" >
            HTML sino que se puede cambiar directamente los contenidos a través del sistema de administración 
            de sitio, mismo que es capaz de realizar las tareas mecánicas necesarias para mostrar la información...
          </p>   
          <a href="#myModal" class="btn btn-inverse " role="button" class="btn" data-toggle="modal" ><i class="icon-fullscreen icon-white"></i>&nbsp;Abrir</a>
            <hr>
        </div>
        <div class="articulo">
          <h4><img src="http://127.0.0.1/ispade/sitio/img/forward.png" alt="forward"> Controladores de Hardaware</h4>
          <p>
            <img src="http://127.0.0.1/ispade/sitio/img/go_first_rtl.png" >
            Podemos concluir diciendo que en un sistema dinámico, las páginas web no existen realmente porque son 
            el resultado del procesamiento de la petición del usuario, el cual fue formado luego de que el servidor... 
          </p>   
          <a href="#myModal" class="btn btn-inverse " role="button" class="btn" data-toggle="modal" ><i class="icon-fullscreen icon-white"></i>&nbsp;Abrir</a>
            <hr>
        </div>
        <div class="articulo">
          <h4><img src="http://127.0.0.1/ispade/sitio/img/forward.png" alt="forward">Metodos de Entrada</h4>
          <p>
            <img src="http://127.0.0.1/ispade/sitio/img/go_first_rtl.png" >
            Las páginas del sitio tenían que ser generadas manualmente por un webmaster, pero ahora gracias a la 
            creación de los lenguajes de programación del lado del servidor, es posible crear una sola plantilla...
            
          </p>   
          <a href="#myModal" class="btn btn-inverse " role="button" class="btn" data-toggle="modal" ><i class="icon-fullscreen icon-white"></i>&nbsp;Abrir</a>
            <hr>
        </div>
        <div class="articulo">
          <h4><img src="http://127.0.0.1/ispade/sitio/img/forward.png" alt="forward">Requerimientos de Software</h4>
          <p>
            <img src="http://127.0.0.1/ispade/sitio/img/go_first_rtl.png" >
            HTML sino que se puede cambiar directamente los contenidos a través del sistema de administración 
            de sitio, mismo que es capaz de realizar las tareas mecánicas necesarias para ...
            
          </p>   
          <a href="#myModal" class="btn btn-inverse " role="button" class="btn" data-toggle="modal" ><i class="icon-fullscreen icon-white"></i>&nbsp;Abrir</a>
            <hr>
        </div>
      </div>
    </div>
  </div>
  <div class="pagination pagination-right pagination-large">
    <ul>
      <li class="disabled"><a href="#">Prev</a></li>
      <li class="active"><a href="#">1</a></li>
      <li class="disabled"><a href="#">2</a></li>
      <li class="disabled"><a href="#">3</a></li>
      <li class="disabled"><a href="#">4</a></li>
      <li class="disabled"><a href="#">5</a></li>
      <li class="disabled"><a href="#">Next</a></li>
    </ul>
  </div>
</div>

<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 id="myModalLabel"><img src="http://127.0.0.1/ispade/sitio/img/forward.png" alt="forward"> &nbsp;Lenguaje Orientado a Objetos</h3>
</div>
<div class="modal-body">
<p>
  <img align="left" src="http://127.0.0.1/ispade/sitio/img/text_x_c++src.png" alt="C++">
  La programación orientada a objetos (POO o OOP por sus siglas en inglés) es un paradigma es un 
  paradigma de programación en el que los conceptos del mundo real relevantes para nuestro problema 
  se modelan a través de clases y objetos.La gracia de la POO es que hace que los problemas sean más 
  sencillos, al permitir dividir el problema en objetos, de manera que cada objeto funciona de forma 
  independiente, siendo este una parte del programa que posee sus datos y un funcionamiento propio, es 
  decir un objeto está formado por datos a los que llamaremos propiedades y métodos los que también son 
  llamados procedimientos, cuyas definiciones veremos más adelante.

</p>
  <p>
Los conceptos de la programación orientada a objetos tienen origen en un lenguaje usado para hacer 
simulaciones de naves llamado  Simula 67, creado por Ole-Johan Dahl y Kristen Nygaard, del Centro de 
Cómputo Noruego en Oslo. La idea surgió al agrupar los diversos tipos de naves en diversas clases de 
objetos, siendo responsable cada clase de objetos de definir sus propios datos y comportamientos. 
Fueron refinados más tarde en Smalltalk, diseñado para ser un sistema completamente dinámico en el 
cual los objetos se podrían crear y modificar "sobre la marcha" (en tiempo de ejecución) en lugar de 
tener un sistema basado en programas estáticos.
  </p>
</div>
<div class="modal-footer">
<button class="btn btn-success" data-dismiss="modal" aria-hidden="true">Cerrar</button>
</div>
</div>

<!-- Fin Contenidos -->

<div class="pie" style="text-align:center; background:#6A777F">  
  <hr>
  <p>&nbsp;</p>
  <div class="row-fluid">
    <div class="span4">    
      <a href="https://plus.google.com/100547190152722659325/posts">
        <img src="http://127.0.0.1/ispade/sitio/img/google.png" alt="Google plus" width="90" hight="90">
        <br/><div class="btn btn-inverse btn-mini"> Google Plus </div>
      </a>
    </div><!--/span-->       
    <div class="span4">    
      <a href="http://facebook.com/eduardo.villota">
        <img src="http://127.0.0.1/ispade/sitio/img/facebook.png" alt="Facebook" width="90" hight="90">
        <br/><div class="btn btn-inverse btn-mini"> Facebook </div>
      </a>
    </div><!--/span-->       
    <div class="span4">    
      <a href="http://twitter.com/eduardouio">
        <img src="http://127.0.0.1/ispade/sitio/img/twitter.png" alt="Twitter" width="90" hight="90">
        <br/><div class="btn btn-inverse btn-mini"> Twitter </div>
      </a>
    </div><!--/span-->       
  </div><!--/row-->    
  <p>&nbsp;</p>
  <small style="font-size: 11px; color:#fff;">    
    <p>
      &copy; 2013 Instituto Técnico Superior Para El Desarrollo ISPADE  <a href="http://ispade.edu.ec/web/FrameTotal.html?id=home">Términos De Privacidad</a>
      <br>Sitio Desarrollado Por Eduardo Villota <a href="http://twitter.com/eduardouio" blank="_blank">eduardouio7@gmail.com</a>
    </p>
  </small>
</div>       
</body>
</html>
