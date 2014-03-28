<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<head></head>
	<body>
		<form action="formulario1.php" method="GET">
			<label>nombre</label>
			<input type="text" name="nombre">
			<label>apellido</label>
			<input type="text" name="apellido"><br>
			<label>edad</label>
			<input type="text" name="edad">
			<label>direccion</label>
			<input type="text" name="direccion"><br>
			<label>telefono</label>
			<input type="text" name="telefono">
			<label>ocupacion</label>
			<input type="text" name="ocupacion"><br>
			<label>sexo</label>
			<input type="text" name="sexo">
			<label>estado civil</label>
			<input type="text" name="estado"><br>
			<label>curp</label>
			<input type="text" name="curp">
			<label>correo electronico</label>
			<input type="text" name="correo">
			<input type="submit" values="Enviar">
		</form>
		<div>
		
		<table border="1">
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Edad</th>
			<th>Dirección</th>
			<th>Teléfono</th>
			<th>Ocupación</th>
			<th>Sexo</th>
			<th>Estado civil</th>
			<th>CURP</th>
			<th>Correo electronico</th>
			<br>
		</tr> <!-- Procesamiento de servidor -->
		<?php
			if(isset($_GET['nombre'])):
			?>		
			<tr>
				<td><?php echo $_GET['nombre']; ?></td>
				<td><?php echo $_GET['apellido']; ?></td>
				<td><?php echo $_GET['edad']; ?></td>
				
				<td><?php echo $_GET['direccion']; ?></td>
				<td><?php echo $_GET['telefono']; ?></td>
				<td><?php echo $_GET['ocupacion']; ?></td>
				
				<td><?php echo $_GET['sexo']; ?></td>
				<td><?php echo $_GET['estado']; ?></td>
				<td><?php echo $_GET['curp']; ?></td>

				<td><?php echo $_GET['correo']; ?></td>
			</tr>
			<?php	
			endif
			?>   <!-- Termina procesamiento de servidor -->
		</table>
		
	</div>

</body>
</html>