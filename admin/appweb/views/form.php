<style type="text/css" media="screen">
	.btn.jumbo {
		font-size: 20px;
		font-weight: normal;
		padding: 14px 24px;
		margin-right: 10px;
		-webkit-border-radius: 6px;
		-moz-border-radius: 6px;
		border-radius: 6px;
	}
</style>
</head>
<body>
	<div class="container">
	<div class="hero-unit" style="margin-top:40px">
		<h2>IanCMS <small> &nbsp; Editor de Artículos</small></h2>
		<form action="<?php print base_url() . 'index.php/'. $form['controller']; ?>/edit" enctype="multipart/form-data" method="post">			
		<input name="title" class="input-xxlarge" type ="text" placeholder="Titulo" required="TRUE" autofocus="TRUE" value="<?php print $form[0]['title']; ?>"> <br>
		<input name="image" class="input-xxlarge" type ="text" placeholder="Imágen" value="<?php print $form[0]['image']; ?>">		
		<textarea class="textarea" placeholder="Ingrese un Texto ..." style="width: 1000px; height: 400px" name="contenido">
			<?php print $form[0]['content']; ?>
		</textarea>
		<button class="btn btn-large btn-info" type="submit">Guardar</button>
		<a class="btn btn-large btn-inverse" href="<?php print base_url() . 'index.php/' . $form['controller']; ?>">Cancelar</a>
		</form>
	</div>
</div>