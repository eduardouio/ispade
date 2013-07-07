    <!-- Carousel ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">

        <div class="<?php print $item; ?>">
          <img src="<?php print $url_img;?>" alt="<?php print $img_alt;?>">
          <div class="container">
            <div class="carousel-caption">
              <h1><?php print $tiutlo_slider; ?></h1>
              <p class="lead">
                <p>
                  <?php print $articulo_slider;?>
                </p>
                <a class="btn  btn-danger" href="<?php print $link_destino;?>">Continuar...</a>
              </div>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
      </div>
    <!-- /.carousel -->