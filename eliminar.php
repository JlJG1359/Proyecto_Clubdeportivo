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
			$id = $_GET['id'];
			$sql = "DELETE from clubdeportivo where id like '$id'";
			$resultado = $mysqli->query($sql);
			header("Location: index.php");
		  
			
			
		?>

	</body>
</html>