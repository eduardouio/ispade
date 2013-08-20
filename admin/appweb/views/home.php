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
              <a id="backbutton" class="win-backbutton" href="./hub.html"></a>
              <h5>Página Actual:</h5>
              <div class="dropdown">
                <a class="header-dropdown dropdown-toggle accent-color" data-toggle="dropdown" href="#" >
                  Sección del sitio: Nosotros
                  <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">Nuevo Artículo</a></li>
                  <li><a href="#">Buscar Artículo</a></li>
                </ul>
              </div>
            </div>
            <div id="top-info" class="pull-right">
              <div class="pull-left">
                <a href="" class="btn btn-info">Nuevo Artículo</a>
              </div>
            </div>
          </div><!-- /Menú titulo página -->
        </div> <!-- /Primera fila de contenidos -->
      </header>
      <div class="row"> <!-- Segunda Fila de contenidos -->
        <div class="span12">
          <p>Se econtro un total de 200 articulos en esta sección</p>
          <div class="row">
            <div class="span12">
              <table class="table table-condensed table-hover"> <!-- /Tabla de contenidos -->
                <thead>
                  <tr>
                    <th class="span1">Identificador</th>
                    <th class="span1">Titulo</th>
                    <th>Project</th>
                    <th>Imágen</th>
                    <th class="span2">Contenido</th>
                    <th class="span2">F. Creación</th>
                    <th class="span2">F. Modificación</th>
                    <th>Presentada</th>
                    <th class="span1">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="align-center">
                      <label class="checkbox">
                        <input type="checkbox"><span class="metro-checkbox"></span>
                      </label>
                    </td>
                    <td class="align-center">
                      <i class="icon-checkmark-2"></i>
                    </td>
                    <td>ACME</td>
                    <td>440 days</td>
                    <td class="span2 align-right">70.570,00&#x20AC;</td>
                    <td class="span2 align-right">70.570,00&#x20AC;</td>
                    <td class="span2 align-right">+3000,00</td>
                    <td>Milano</td>
                    <td>
                      <div class="dropdown">
                        <a class="header-dropdown dropdown-toggle accent-color" data-toggle="dropdown" href="#">
                          <b class="caret"><i class="icon-list-3"></i></b>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Presentar</a></li>
                          <li><a href="#">Editar</a></li>
                          <li class="divider"></li>
                          <li class="bg-color-orange"><a href="#">Eliminar</a></li>
                        </ul>
                      </div>
                    </div>
                  </tbody>
                </table><!-- /Tabla de contenidos -->
              </div>
            </div>
          </div>
        </div> <!-- /Segunda Fila de contenidos -->
      </div> <!-- /Cuerpo de contenidos -->
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