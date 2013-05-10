<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Control Panel</title>
  <meta name="description" content=" Panel de control IanCMS">
  <meta name="viewport" content="width=device-width" scale="1">
  <link rel="stylesheet" href="http://127.0.0.1/ispade/admin/css/main.css">    
  <link rel="stylesheet" href="http://127.0.0.1/ispade/admin/css/modern.css" />  
  <link rel="stylesheet" href="http://127.0.0.1/ispade/admin/css/normalize.css">
  <link rel="stylesheet" href="http://127.0.0.1/ispade/admin/css/sitio.css">
</head>
<body class="metrouicss" onload="prettyPrint()">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
            <![endif]-->
            <!--Inicio Cuepo páina-->
            <div class="page">
              <!--Inicio Menu Pagina-->
              <div class="nav-bar">
                <div class="nav-bar-inner padding10">
                  <span class="pull-menu"></span>
                  <a href="http://127.0.0.1/ispade/admin/"><span class="element brand">
                    <img class="place-left" src="http://127.0.0.1/ispade/admin/img/logo32.png" style="height: 20px"/>
                    Ian CMS Panel de Control
                  </span></a>
                  <div class="divider"></div>
                  <ul class="menu">
                    <li><a href="/">Inicio</a></li>
                    <li data-role="dropdown">
                      <a href="#">Nosotros</a>
                      <ul class="dropdown-menu">
                        <li><a href="global.php">Nuevo Artículo</a></li>
                        <li class="divider"></li>
                        <li><a href="layout.php">Listar Artículos</a></li>                                                
                      </li>
                    </ul>
                  </li>
                  <li data-role="dropdown"><a href="#">Noticias</a>
                    <ul class="dropdown-menu">
                      <li><a href="typography.php">Publicar Noticia</a></li>
                      <li class="divider"></li>
                      <li><a href="tables.php">Listar Noticias</a></li>
                      <li class="divider"></li>
                      <li><a href="forms.php">Buscar Notica</a></li>
                    </ul>
                  </li>
                  <li data-role="dropdown"><a href="#">Servicios</a>
                    <ul class="dropdown-menu">
                      <li><a href="tiles.php">Nuevo Servicio</a></li>
                      <li class="divider"></li>                        
                      <li><a href="menus.php">Listar Servicios</a></li>
                      <li class="divider"></li>
                      <li><a href="sidebar.php">Buscar Servicio</a></li>                        
                    </ul>
                  </li>
                </div>
              </div>
            </div>
            <!--Inicio Menu Pagina-->         
            <!--Inicio Cuerpo del Contenido-->               
            <div class="page secondary with-sidebar">     
            <!--Inicio Menu Lateral-->          
              <div class="page-sidebar">
                <ul>
                <div class="bg-color-red"><h1 class="label important"><b>Tareas Frecuentes</b></h1></div>
                <li>
                  <li class="sticker sticker-color-orange"><a href="#"><i class="icon-briefcase"></i> Nuevo Servicio</a></li>
                  <li class="sticker sticker-color-orangeDark"><a href="#"><i class="icon-clipboard"></i> Nueva Noticia</a></li>
                  <li class="sticker sticker-color-green"><a href="#"><i class="icon-grid-view"></i> Formulario Contactos</a></li>
                  <li class="sticker sticker-color-pink dropdown active" data-role="dropdown">
                    <a><i class="icon-home"></i> Página Home</a>
                  </li>
                </ul>
              </div> <!--Fin Menu Lateral-->   
              <div class="page-region"> <!--Inicio Presentacion Articulos-->                 
                <div class="page-region-content">                  
                  <div class="span9">
                    <h2>Artículo !</h2>
                    Damos inicio a una serie de articulos completos sobre diseño e implementacion de un CMS
                    <br/><br/>
                    <a href=""><button class="bg-color-green"><i class="icon-home"></i> Editar</button></a>
                  </div>                  
                </div>
              </div> <!--Fin Presentacion Articulos-->                 
            </div> <!--Fin Cuerpo del Contenido-->                           
            <div class="page"> <!--Inicio Pie de Pagina-->                 
              <div class="nav-bar">
                <div class="nav-bar-inner padding10">
                  <span class="element">
                    <small style="font-size: 7px; color:#fff;">    
                      <p>
                        &copy; 2013 Instituto Técnico Superior Para El Desarrollo ISPADE                              
                      </p>
                    </small>
                  </span>
                </div>
              </div>
            </div> <!--Fin pie  de pagina-->       
            <!--Scripts Adicionales-->                   
            <script  type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
            <script src="http://127.0.0.1/ispade/admin/js/vendor/modernizr-2.6.2.min.js"></script>
            <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
            <script  type="text/javascript" src="http://127.0.0.1/ispade/admin/js/modern/dropdown.js"></script>
            <script  type="text/javascript" src="http://metroui.org.ua/js/sharrre/jquery.sharrre-1.3.4.min.js"></script>                            
            <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
            <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
              g.src='//www.google-analytics.com/ga.js';
              s.parentNode.insertBefore(g,s)}(document,'script'));
            </script>
          </body>
          </html>