<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Control Panel</title>
  <meta name="description" content=" Pagina de login">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="http://127.0.0.1/ispade/admin/css/main.css">
  <link rel="stylesheet" href="http://127.0.0.1/ispade/admin/css/modern.css" />  
  <link rel="stylesheet" href="http://127.0.0.1/ispade/admin/css/normalize.css">
  <script src="http://127.0.0.1/ispade/admin/js/vendor/modernizr-2.6.2.min.js"></script>  
  <script src="http://127.0.0.1/ispade/admin/js/assets/jquery-1.9.0.min.js"></script>
  <script src="http://127.0.0.1/ispade/admin/js/modern/dialog.js"></script>
  <script type="text/javascript" src="http://127.0.0.1/ispade/admin/js/modern/dialog.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
                        //$('#staticDialog').click(function(e) {
                          $.Dialog({
                            'title'      : 'My static dialog',
                            'content'    : 'This content can be in HTML.<br />You can add custom function to your buttons!<br /><br /><b>Features:</b><ul><li>Easy to use!</li><li>Customizable</li><li>Powerful!</li></ul>',
                            'buttons'    : {
                              
                              'Cerrar'     : {
                                'action': function(){}
                              }
                            }
                          //  });
                        });                 
                          
                        });
  </script>
  <style type="text/css">
  .metrouicss {

   background-color:rgb(88, 88, 88) !important;
 }
 #pwordbox {               
   position: absolute;
   height: 100px;
   width: 100px;    
   left: 50%;
   top: 35%;
   transform: translate(-50%, -50%);    
   -webkit-transform: translate(-50%, -50%);
   -moz-transform: translate(-50%, -50%);
   -ms-transform: translate(-50%, -50%);
 }
 #imgcont {               
   position: absolute;   
   left: -175%;
   top: 50%;
   transform: translate(-50%, -10%);    
   -webkit-transform: translate(-50%, -10%);
   -moz-transform: translate(-50%, -10%);
   -ms-transform: translate(-50%, -10%);
 }
 #pboxcont {               
   position: absolute;   
   left: 0%;
   top: 100%;
 }
 </style>
</head>
<body class="metrouicss">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
            <![endif]-->
            <!-- Add your site or application content here -->
            <div id="pwordbox" >
              <div id="imgcont">
               <img src="http://127.0.0.1/ispade/admin/img/cpanel2.png" alt="logo cpanel" width="300" height="300" />
             </div>
             <div id="fieldcont">
               <div id="pboxcont">
                <h1 style="color:rgb(140, 0, 149);">Administrador</h1>
                <form action="#" name="login">
                  <div class="input-control password span4" id="pworddiv">
                   <input type="password" name ="pass" />
                   <button class="btn-reveal"></button>
                 </div>
                 <button class="standart default" action="submit"> Entrar </button>            
               </form>
               <div class="bg-color-blue">&nbsp;</div>                
             </div>
           </div>
         </div>   
         <div class="bg-color-red">&nbsp;</div>              
         
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