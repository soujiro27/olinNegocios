
<?php  
	//session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Panel de Administracion</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation.min.css" integrity="sha256-itWEYdFWzZPBG78bJOOiQIn06QCgN/F0wMDcC4nOhxY=" crossorigin="anonymous" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/css/adminPanel.css">	
</head>
<body>
	<header class="row expanded">
		<div class="columns medium-4">
			<img src="../assets/img/logo.png">
		</div>
		<div class="columns medium-8">
			<h2>Panel de Administracion</h2>
		</div>
	</header>

<div class="container row expanded">
	<aside class="columns medium-2">
		<nav>
			<ul class="menu vertical">
			  <li><a href="categorias">Categorias</a></li>
			  <li><a href="subcategorias">SubCategorias</a></li>
			  <li><a href="tipos">Tipos de Suscripciones</a></li>
			  <li><a href="negociosAdmin">Negocios</a></li>
			  <li><a href="cerrar">Salir</a></li>
			</ul>
		</nav>
	</aside>
	
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/js/foundation.min.js" integrity="sha256-Nd2xznOkrE9HkrAMi4xWy/hXkQraXioBg9iYsBrcFrs=" crossorigin="anonymous"></script>
</body>
</html>