<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<head></head>
	<body>
		<form action="formDatos2.php" method="GET">
			<label>Nombre</label>
			<input type="text" name="nombre">
			<label>Apellido</label>
			<input type="text" name="apellido"><br>
			<label>Sexo</label>
			<input type="text" name="sexo">

			<label>Tipo de sangre</label>
			<input type="text" name="tipo"><br>
			<label>Donante</label>
			<input type="text" name="donante">
			<label>Ocupación</label>
			<input type="text" name="ocupacion"><br>

			<label>Edad</label>
			<input type="text" name="edad">
			<label>Peso</label>
			<input type="text" name="peso"><br>
			<label>Estatura</label>
			<input type="text" name="estatura">

			<label>Domicilio</label>
			<input type="text" name="domicilio"><br>
			<label>Teléfono</label>
			<input type="text" name="telefono">
			<label>correo electronico</label>
			<input type="text" name="correo">

			<input type="submit" values="Enviar">
		</form>
		<div>
		
		<table border="1">
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Sexo</th>
			<th>Tipo de sangre</th>

			<th>Donante</th>
			<th>Ocupacion</th>
			<th>Edad</th>
			<th>Peso</th>

			<th>Estatura</th>
			<th>Domicilio</th>
			<th>Telefono</th>
			<th>correo electronico</th>
			<br>
		</tr> <!-- Procesamiento de servidor -->
		<?php
			if(isset($_GET['nombre'])):
			?>		
			<tr>
				<td><?php echo $_GET['nombre']; ?></td>
				<td><?php echo $_GET['apellido']; ?></td>
				<td><?php echo $_GET['sexo']; ?></td>
				<td><?php echo $_GET['tipo']; ?></td>	

				<td><?php echo $_GET['donante']; ?></td>
				<td><?php echo $_GET['ocupacion']; ?></td>
				<td><?php echo $_GET['edad']; ?></td>
				<td><?php echo $_GET['peso']; ?></td>	
				
				<td><?php echo $_GET['estatura']; ?></td>
				<td><?php echo $_GET['domicilio']; ?></td>
				<td><?php echo $_GET['telefono']; ?></td>
				<td><?php echo $_GET['correo']; ?></td>								
			</tr>
			<?php	
			endif
			?>   <!-- Termina procesamiento de servidor -->
		</table>
		
	</div>

</body>
</html>