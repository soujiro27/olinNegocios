<?php  ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Olin Negocios</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation.min.css" integrity="sha256-itWEYdFWzZPBG78bJOOiQIn06QCgN/F0wMDcC4nOhxY=" crossorigin="anonymous" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Damion" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/css/loginNegocios.css">	
</head>
<body>
	<header class="row ">
		<div class="columns small-4">
			<img src="../assets/img/logo.png">
		</div>
		<div class="columns small-8">
			<h2>Negocios</h2>
		</div>
	</header>
	<main class="row expanded">
	<div class="columns small-12">
		<p>En olin queremos que tu negocio reciba la mejor publicidad por eso te pedimos que llenes los campos de la manera mas certera posible,esto ayudara a tus clientes a encontrarte mejor</p>
	</div>
		<div class="columns small-12">
			<form id="primer">
				<input type="text" name="nombre" placeholder="Nombre del Negocio" required>
				<input type="tel" name="telefono" placeholder="Telefono del Negocio" required>
				<input type="submit" class="button" value="Siguiente">
			</form>
		</div>
		<div class="columns small-12 segundo">
			<form id="segundo" >
				<select name="categoria" id="categoria"></select>
				<select name="subCategoria" id="subCategoria"></select>
				<input type="submit" class="button" value="Siguiente">
			</form>
		</div>
		<div class="columns small-12 tercero">
			<form id="tercero" >
			
			</form>
		</div>

	</main>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/js/foundation.min.js" integrity="sha256-Nd2xznOkrE9HkrAMi4xWy/hXkQraXioBg9iYsBrcFrs=" crossorigin="anonymous"></script>
<script type="text/javascript" src="../assets/js/registroNuevo.js"></script>
</body>
</html>