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
		<h1 style="font-size:58px">IanCMS <small> &nbsp; Editor de Artículos</small></h1>
		<hr/>
		<form action="<?php print base_url() . 'index.php/'. $edit['controller']; ?>/guardar" method="post">			
		<input name="title" type ="text" placeholder="Titulo">
		<input name="image" type ="text" placeholder="Imágen">		
		<textarea class="textarea" placeholder="Enter text ..." style="width: 1000px; height: 400px"></textarea>
		<button class="btn btn-large btn-info" type="submit">Guardar</button>
		<a class="btn btn-large btn-inverse" href="<?php print base_url() . 'index.php/' . $controller; ?>">Cancelar</a>
		</form>
	</div>
</div>