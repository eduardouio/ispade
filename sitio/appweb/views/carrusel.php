    <!-- Carousel ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <!--Bucle de imágenes-->
        <?php
          // i para controlar las vuelas
          // x para controlar el slider item active

        $x = 1;
        foreach ($carrusel as $slider) {
          if ($x==1){
            print ('<div class="item active">');
            
          }else{
            
            print ('<div class="item">');
          }

          print ('<img src="'. base_url() . $slider['image'] . '" alt="'. $slider['title'] .'">');
          print ('<div class="container">
            <div class="carousel-caption">
            <h1>'. $slider['title'] .'</h1>');
          print ('<p class="lead">
            <p>' . $slider['content'] . '</p>
            <a class="btn  btn-danger" href="'. base_url() . 'index.php/' . $slider['article'] .'">Continuar...</a>
            </div>
            </div>
            </div>');

          $x++;

        }


        ?>
    
          
          
              
          <!--Bucle de imágenes-->
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
      </div>
      
    <!-- /.carousel -->