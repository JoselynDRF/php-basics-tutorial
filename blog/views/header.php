<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name=viewport content="width=device-width,  user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel=stylesheet href="<?php echo RUTA; ?>/css/styles.css">
	<title> Blog </title>
</head>
<body>

<header>
	<div class="contenedor">
		<div class="logo izquierda">
			<p><a href="<?php echo RUTA; ?>"> Mi primer blog </a></p>
		</div>

		<div class="derecha">
			<form name="busqueda" class="buscar" action="<?php echo RUTA; ?>/buscar.php" method="get">
				<input type="text" name="busqueda" placeholder="Buscar" class="buscar">
				<button type="submit" class="icono fa fa-search"></button>
			</form>

			<nav class="menu">
			    <ul>
			     	<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			    	<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			    	<li><a href="#"> Contacto <i class="icono fa fa-envelope"></i></a></li>
			    </ul>
			</nav>
		</div>
	</div>
</header>

</body>
</html>
