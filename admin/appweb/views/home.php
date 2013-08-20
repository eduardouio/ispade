<!DOCTYPE html> <!--Header-->
<html class="no-js" lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title> Panel de Control IanCMS </title>
  <meta name="description" content="Gestor de contenidos IanCMS">
  <meta name="description" content="hjolas">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" type="text/css" href="<?php print base_url();?>css/normalize.css">
  <link rel="stylesheet" type="text/css" href="<?php print base_url();?>css/main.css">
  <link rel="stylesheet" type="text/css" href="<?php print base_url();?>css/bootmetro.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php print base_url();?>css/bootmetro-responsive.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php print base_url();?>css/bootmetro-icons.css">
  <link rel="stylesheet" type="text/css" href="<?php print base_url();?>css/bootmetro-ui-light.css">
  <link rel="stylesheet" type="text/css" href="<?php print base_url();?>css/datepicker.css">
  <link rel="stylesheet" type="text/css" href="<?php print base_url();?>js/google-code-prettify/prettify.css"></script>
  <link rel="shortcut icon" href="<?php print base_url();?>ico/favicon.ico">
</head> <!--/Header-->
<body>
  <div class="container navbar-wrapper"> <!--Barra de Menú-->
    <div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="<?php print base_url(); ?>"> 
          <span class="icon-arrow-right-2"></span>&nbsp;Panel de Control&nbsp;<span class="icon-arrow-left-2"></span></a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="<?php print base_url(); ?>/"><i class="icon-home icon-white" style="font-size: 32px;"></i>&nbsp; Inicio</a></li>
              <li class=""><a href="<?php print base_url(); ?>/index.php/nosotros"><i class="icon-users-2 icon-white" style="font-size: 32px;"></i> &nbsp; Nosotros</a></li>
              <li class=""><a href="<?php print base_url(); ?>/index.php/noticias"><i class=" icon-newspaper icon-white" style="font-size: 32px;"></i>&nbsp; Noticias</a></li>
              <li class=""><a href="<?php print base_url(); ?>/index.php/servicios"><i class=" icon-drawer-4  icon-white" style="font-size: 32px;"></i>&nbsp; Servicios</a></li>
              <a href="" class ="btn btn-inverse" ><span class="icon-logout " aria-hidden="true" style="font-size: 32px;"></span>&nbsp;Salir</a>
            </ul>
          </div>
        </div>
      </div>
    </div><!--/Barra de Menú-->
    <div class="container"> <!-- Cuerpo de contenidos -->
      <header id="nav-bar" class="container">
        <div class="row"> <!-- Primera fila de contenidos -->
          <div class="span12"> <!-- Menú titulo página -->
            <div id="header-container">
              <a id="backbutton" class="win-backbutton" href="#"></a>
              <h5>Página Actual:</h5>
              <div class="dropdown">
                <a class="header-dropdown dropdown-toggle accent-color" data-toggle="dropdown" href="#" >
                  Sección del sitio: Nosotros
                  <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#"><span class="icon-document"></span>&nbsp;Nuevo Artículo</a></li>
                  <li><a href="#"><span class="icon-search"></span>&nbsp;Buscar Artículo</a></li>
                </ul>
              </div>
            </div>
            <div id="top-info" class="pull-right">
              <div class="pull-left">
                <a href="" class="btn btn-primary btn-large"><span class="icon-document"></span>&nbsp;Nuevo Artículo</a> 
                <a href="" class="btn btn-primary btn-large"><span class="icon-search"></span>&nbsp;Buscar Artículo</a>
              </div>
            </div>
          </div><!-- /Menú titulo página -->
        </div> <!-- /Primera fila de contenidos -->
      </header>
      <div class="row"> <!-- Segunda Fila de contenidos -->
        <div class="span12">
          <p class="label label-inverse">Se econtró un total de 200 articulos en esta sección</p>
          <div class="row"> <!--Row para la tabla-->
            <div class="span12">
              <table class="table table-condensed table-hover"> <!-- /Tabla de contenidos -->
                <thead>
                  <tr>
                    <th class="span1">ID</th>
                    <th class="span7">Titulo</th>
                    <th class="span2">Fecha Creación</th>
                    <th class="span3">Fecha Modificación</th>
                    <th>Vista</th>
                    <th class="span1">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="align-center">
                      23
                    </td>
                    <td class="align-left span7">
                      Google Code Decide Cancelar Una De Sus Características Principales
                    </td>
                    <td class="span3">1987-01-01 12:52:12</td>
                    <td>2000-01-01 12:52:12</td>                    
                    <td>2 Veces</td>
                    <td>
                      <div class="dropdown">
                        <a class="header-dropdown dropdown-toggle accent-color" data-toggle="dropdown" href="#">
                          <b class="caret"><i class="icon-list-3"></i></b>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a href="#"><span class="icon-screen-2"></span>&nbsp;Presentar</a></li>
                          <li><a href="#"><span class="icon-pencil"></span>&nbsp;Editar</a></li>
                          <li class="divider"></li>
                          <li class="bg-color-orange"><a href="#"><span class="icon-trash"></span>&nbsp;Eliminar</a></li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table><!-- /Tabla de contenidos -->
            </div>
          </div> <!--/Row para la tabla-->
          <p class="label label-inverse pull-right">Se econtró un total de 200 articulos en esta sección</p>
        </div>
      </div> <!-- /Segunda fila de contenidos-->
    </div> <!-- /Cuerpo de contenidos -->
    <div class = "hero-unit container" style="text-align:center; backgorund-color:#EDF1F7;">  
      <small style="font-size: 11px;">    
        <p>
          &copy; 2013 Instituto Técnico Superior Para El Desarrollo ISPADE  <a href="http://ispade.edu.ec/web/FrameTotal.html?id=home">Términos De Privacidad</a>
          <br>Sitio Desarrollado Por Eduardo Villota <a href="http://twitter.com/eduardouio" blank="_blank">eduardouio7@gmail.com</a>
        </p>
      </small>
    </div>    
    <script type="text/javascript" src="<?php print base_url();?>js/jquery.js"></script>
    <script type="text/javascript" src="<?php print base_url();?>js/modernizr-2.6.2.min.js"></script>
    <script type="text/javascript" src="<?php print base_url();?>js/google-code-prettify/prettify.js"></script>
    <script type="text/javascript" src="<?php print base_url();?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php print base_url();?>js/bootmetro-panorama.js"></script>
    <script type="text/javascript" src="<?php print base_url();?>js/bootmetro-pivot.js"></script>
    <script type="text/javascript" src="<?php print base_url();?>js/bootmetro-charms.js"></script>
    <script type="text/javascript" src="<?php print base_url();?>js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="<?php print base_url();?>js/holder.js"></script>
    <script type="text/javascript" src="<?php print base_url();?>js/bootstrap-scrollspy.js"></script>  
    <script type="text/javascript" src="<?php print base_url();?>js/bootstrap-button.js"></script>  
    <script type="text/javascript" src="<?php print base_url();?>js/bootstrap-carousel.js"></script> 
    <script type="text/javascript" src="<?php print base_url();?>js/bootstrap-modal.js"></script>
    <script type="text/javascript" src="<?php print base_url();?>js/demo.js"></script>
    <script type="text/javascript" src="<?php print base_url();?>js/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="<?php print base_url();?>js/jquery.touchSwipe.min.js"></script>
  </script>
</body>
</html>