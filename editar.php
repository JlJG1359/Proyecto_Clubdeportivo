<?php
	require 'conexion.php';
	$id = $_GET['id'];
  
	
	$sql = "SELECT * FROM clubdeportivo WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$fila = $resultado->fetch_assoc();
  
	
	
	
?>

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
		<div class="container">
			<div class="row">
				<h1>Socios</h1>
			</div>
			
			<div class="row">
				<div class="col-md-8">
					<!-- Completar atributos de form -->
					<form action="editar2.php" id="registro" name="registro" autocomplete="off" method="post">
						<!-- Incluir el id en algún div de estos-->
						<div class="form-group">
							<!-- Nombre  -->
							<p>Nombre</p>
							<input type="text" name="nombre" id="nombre" maxlength="30" value=<?php echo $fila['nombre']; ?> required>
						</div>

						<div class="form-group">
							<!-- Teléfono -->
							<p>Telefono</p>
							<input type="number" name="telefono" id="telefono" maxlength="30" value=<?php echo $fila['telefono']; ?> required>
						</div>

						<div class="form-group">
							<!-- Fecha nacimiento -->
							<p>Fecha Nacimiento</p>
							<input type="date" name="fecha_nacimiento" id="fecha_nacimiento" maxlength="30" value=<?php echo $fila['fecha_nacimiento']; ?> required>
						</div>
						
						<div class="form-group">
							<!-- Categoría -->
							<p>Categoria</p>
							<select name="categoria" id="categoria" value=<?php echo $fila['categoria']; ?>>
							<option selected>AMATEUR</option>
							<option>PROFESIONAL</option>
							</select>
							<p><label><input type="hidden" value=<?php echo $id;?> name="id" id="id"></label></p>
						</div>
						
						<div class="form-group">
							<!-- Editar -->
							<input type="submit" class="btn-primary" value="Editar">
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.4.1.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
	</body>
</html>				