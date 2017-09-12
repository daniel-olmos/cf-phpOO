<?php namespace Views;

	$template = new Template();
	
	class Template{
		public function __construct(){
?>
			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<title>Administracion de estudiantes | Facilito</title>
				<link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/bootstrap.css">
				<link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/general.css">
			</head>
			<body>
				<nav class="navbar navbar-inverse navbar-fixed-top">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a href="#" class="navbar-brand">Administracion de Estudiantes</a>
						</div>

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="<?php echo URL; ?>">Inicio</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Estudiantes <b class="caret"></b></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="<?php echo URL; ?>estudiantes">Listado</a></li>
										<li><a href="<?php echo URL; ?>estudiantes/agregar">Agregar</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Secciones <b class="caret"></b></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="<?php echo URL; ?>secciones">Listado</a></li>
										<li><a href="<?php echo URL; ?>secciones/agregar">Agregar</a></li>
									</ul>
								</li>
							</ul>

							<ul class="nav navbar-nav navbar-right">
								<li><a href="http://eduardo1590.esy.es">Eduardo1590</a></li>
							</ul>
						</div>
					</div>
				</nav>
<?php
		}

		public function __destruct(){
?>			
			<footer class="navbar-fixed-bottom">
				Todos los derechos reservados &copy 2017 <br>
				Eduardo Rahn @edu1590 <b>Eduardo1590</b>
			</footer>
			<script
  				src="https://code.jquery.com/jquery-3.2.1.min.js"
  				integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  				crossorigin="anonymous">
  			</script>
  			
			<script src="<?php echo URL; ?>Views/template/js/bootstrap.js"></script>

			</body>
			</html>
<?php
		}
	}
?>