<!-- Modal -->
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    <h3 id="myModalLabel"><img src="<?php print base_url(); ?>img/forward.png" alt="forward"> &nbsp;<?php $titulo_articulo; ?></h3>
  </div>
  <div class="modal-body">
    <p>
      <img align="left" src="<?php print $imagen ?>" alt="<?php print $alt_imagen; ?>">
      <?php print $articulo;?>
    </p>
  </div>
  <div class="modal-footer">
    <button class="btn btn-success" data-dismiss="modal" aria-hidden="true">Cerrar</button>

</div> <!-- ./ Modal --> 