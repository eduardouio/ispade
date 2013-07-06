<!--Presentacion de contenidos-->
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<!--Cuerpo de contenidos-->
<div class="container">
  <!--Contenedor Fluido-->
  <div class="container-fluid">
    <div class="row-fluid">
      <!--Menú Lateral-->
      <div class="span3">
        <div class="well sidebar-nav">
          <ul class="nav nav-list">
            <li class="active"><a href="#"><i class="icon-plus"></i> Lo Más Leido</a></li>
            <li><a href="<?php print base_url(); ?>"><i class="icon-play"></i>Como Insts alar Ubuntu</a></li>              
            <li><a href="<?php print base_url(); ?>"><i class="icon-play"></i> Distros Más Conocidas </a></li>              
            <li><a href="<?php print base_url(); ?>"><i class="icon-play"></i> Ventajas Linux</a></li>              
            <li><a href="<?php print base_url(); ?>"><i class="icon-play"></i> Deventajas Linux </a></li>              
            <li><a href="<?php print base_url(); ?>"><i class="icon-play"></i> Costo de Implementacion </a></li>              
          </ul>
        </div>                
      </div>  
      <!--Menú Lateral-->
      <!--Articulos de la página-->
      <div class="span9 hero-unit">
        <div style="float:right;width: 50%;height50%"> <img src="<?php print base_url();?>img/sitio/buzon.jpg"></div>
        <form method="post" id="formulario" action="http://127.0.0.1/index.php/contactos/recibir/">
          <fieldset>
            <div class="control-group">
              <div class="controls">
                <label class="control-label">Nombres:</label> 
                <input class="input-xlarge focused" required="required" placeholder="Igrese Sus Nombres" id="nombres" name="nombres" value="" type="text">                   
              </div>      
              <div class="controls">
                <label class="control-label">E-mail:</label>
                <input placeholder="Direccion Email" required="required" id="email" name="email" value="" type="text">
              </div>      
              <div class="controls">
                <label class="control-label">Empresa:</label>            
                <input class="input-small" placeholder="Empresa" required="required" id="empresa" name="empresa" value="" type="text">
              </div>            
              <div class="controls">
                <label class="control-label">Telefono:</label>
                <input class="input-small" required="required" placeholder="Telefono" id="telefono" name="telefono" value="" type="text">
              </div>      
              <div class="controls">
                <label class="control-label">Asunto:</label>
                <input class="input-xlarge" required="required" placeholder="Asunto Mensaje" id="asunto" name="asunto" value="" type="text">
              </div>      
              <div class="controls">
                <label class="control-label">Descripción:</label>            
                <textarea class="input-xlarge" required="required" placeholder="Sus Comentarios Son Importantes" id="texto_asunto" name="texto_asunto" rows="4" columns="60"></textarea>
              </div>
              <div class="controls">
                <div class="form-actions">
                  <button type="submit" class="btn btn-info">Enviar Información</button>
                  <button type="reset" class="btn btn-warning">Reset</button>
                </div>    
                <b>Dirección Oficina: </b> Av Cristóbal Colón 1133 y Av. 12 de Octubre Edificio Plaza Piso 11 <b>Of:</b> 1199<br>
                <b>Telfonos:</b> +593 (2) 7172-563 +593 (2) 9851-901 <b>Fax:</b> 593 (2) 2873-508<br> 
                <b>Email:</b> <a href="mailto:info@ispade.liposerve.com" class="label label-inverse"> info@ispade.liposerve.com </a>
              </div>
            </div></fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>