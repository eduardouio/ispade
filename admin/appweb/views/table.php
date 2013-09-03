<div class="row"> <!-- Segunda Fila de contenidos -->
  <div class="span12">
    <p class="label label-inverse">Se econtró un total de <?php print count($table); ?> articulos en esta sección</p>
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
            <?php
              #mostramos los datos de los articlos de esta pagina
              foreach ($table as $row) {
                print('<tr>
                      <td class="align-center">');
                print $row['id_article'] . '</td> <td class="align-left span7">';
                print $row['title'] . ' </td><td class="span3">';
                print $row['create_date'] . '</td><td>';
                print $row['last_update'] . '</td><td>';
                print $row['counter'] . ' Veces</td><td> <div class="dropdown">';
                print '<a class="header-dropdown dropdown-toggle accent-color" data-toggle="dropdown" href="#">
                                      <b class="caret"><i class="icon-list-3"></i></b> </a> <ul class="dropdown-menu">';
                print '<li><a href="'. base_url() .'index.php/' . $controller .'/present/'. $row['id_article'].'"><span class="icon-screen-2"></span>&nbsp;Presentar</a></li>';
                print '<li><a href="'. base_url() .'index.php/' . $controller .'/edit/'. $row['id_article'] .'"><span class="icon-pencil"></span>&nbsp;Editar</a></li>
                                      <li class="divider"></li>
                                      <li class="bg-color-orange"><a href="'. base_url() .'index.php/'. $controller .'/delete/'. $row['Id_article'] .'"><span class="icon-trash"></span>&nbsp;Eliminar</a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>';
              }
            ?>          
          </tbody>
        </table><!-- /Tabla de contenidos -->
      </div>
    </div> <!--/Row para la tabla-->
    <p class="label label-inverse pull-right">Se econtró un total de <?php print count($table); ?> articulos en esta sección</p>
  </div>
</div> <!-- /Segunda fila de contenidos--> 