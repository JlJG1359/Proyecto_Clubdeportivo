<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<title>Club Deportivo La Venta</title>
	</head>
    <body>
		<?php
		  require 'conexion.php';

		  $nombre = $_POST['nombre'];
		  $telefono = $_POST['telefono'];
		  $fecha = $_POST['fecha_nacimiento'];
		  $categoria = $_POST['categoria'];
		 
		  $sql = "INSERT INTO clubdeportivo (nombre, telefono, fecha_nacimiento, categoria) values ('$nombre','$telefono','$fecha','$categoria')";
		  $resultado = $mysqli->query($sql);
          if($resultado>0){
			echo "<p class='alert alert-primary'>Registro completado</p>";
			echo "<p><a href='index.php'class='btn-primary'>Regresar</a></p>";
		  }else{
			echo "<p>ERROR</p>";
			echo "<p><a href='index.php'>Regresar</a></p>";
		  }
		?>

	</body>
</html>