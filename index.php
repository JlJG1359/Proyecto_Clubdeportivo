<?php

require "conexion.php";
$sql = "SELECT * FROM clubdeportivo";
$resultado = $mysqli->query($sql);
?>

<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/jquery.dataTables.min.css">
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.4.1.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
		<script src="js/jquery.dataTables.min.js" ></script>
		
		<title>Club Deportivo La Venta</title>
		
		<script>
			$(document).ready( function () {
    			$(tabla).DataTable();
			} );
		</script>

</head>
	<body>
		<div class="container">
			<div class="row">
				<h1>Socios</h1>
			</div>
			<br>
			
			<div class="row">
				<a href="registrar.php" class="btn-primary">Registrar</a>
			</div>
			<br>
			<br>
			
			<table id="tabla" class="display" style="width:100%">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Telefono</th>
						<th>Fecha de nacimiento</th>
						<th>Categoría</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
                <?php
					  while($fila = $resultado->fetch_assoc()){
    
						echo    "<tr>
									<td>$fila[nombre]</td>
									<td>$fila[telefono]</td>
									<td>$fila[fecha_nacimiento]</td>
									<td>$fila[categoria]</td>
									<td><a href='editar.php?id=$fila[id]'>Editar</a></td>			
									<td><a href='eliminar.php?id=$fila[id]'>Eliminar</a></td>";
					  }

					?>
				</tbody>
			</table>
			
		</div>
	</div>
	
	
</body>
</html>						