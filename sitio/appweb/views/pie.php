<!--Pie de pagina y funciones js y librerias js-->
<div class = "hero-unit" style="text-align:center; backgorund-color:#EDF1F7;">  
    <div class="row-fluid">
    <div class="span4">    
      <a href="https://plus.google.com/100547190152722659325/posts">
        <img src="<?php print base_url(); ?>img/sitio/google.png" alt="Google plus" width="90" hight="90">
        
    </a>
</div><!--/span-->       
<div class="span4">    
  <a href="http://facebook.com/eduardo.villota">
    <img src="<?php print base_url(); ?>img/sitio/facebook.png" alt="Facebook" width="90" hight="90">
   
</a>
</div><!--/span-->       
<div class="span4">    
  <a href="http://twitter.com/eduardouio">
    <img src="<?php print base_url(); ?>img/sitio/twitter.png" alt="Twitter" width="90" hight="90">
    
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
  <script src="<?php print base_url();?>js/jquery.js"></script>
  <script src="<?php print base_url();?>js/bootstrap-transition.js"></script>    
  <script src="<?php print base_url();?>js/bootstrap-dropdown.js"></script>
  <script src="<?php print base_url();?>js/bootstrap-scrollspy.js"></script>  
  <script src="<?php print base_url();?>js/bootstrap-button.js"></script>  
  <script src="<?php print base_url();?>js/bootstrap-carousel.js"></script> 
  <script src="<?php print base_url();?>js/bootstrap-modal.js"></script>
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
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
  if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";
fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>
</html>
<!--/Pie de pagina y funciones js y librerias js-->