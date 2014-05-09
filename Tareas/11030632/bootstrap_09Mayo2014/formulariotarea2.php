<html>
	<head>
		<link href="css/form.css" rel="stylesheet">
	</head>
	<body>
	 <FIELDSET id="espacio2">
	   <legend>Historial Medico:</legend>
		<form action="formulariotarea2.php" method="GET" id="formulario2">
			<label>Numero Seguridad Social:</label>
			<input type="text" name="nss" required>
			<br>
			<label>Nombre(s):</label>
			<input type="text" name="nombre" required>
			<br>
			<label>Apellido Paterno:</label>
			<input type="text" name="paterno" required>
			<br>
			<label>Apellido Materno:</label>
			<input type="text" name="materno" required>
			<br>
			<label>Edad:</label>
			<input type="text" name="edad" required>
			<label>Sexo:</label>
			<input type="text" name="sexo" required>
			<label>Telefono:</label>
			<input type="text" name="Telefono" required>
			<br>
			<label>Peso:</label>
			<input type="text" name="peso" required>
			<label>Talla:</label>
			<input type="text" name="talla" required>
			<label>Tipo sanguineo:</label>
			<input type="text" name="tipo" required>
			<br>
			<label>Metodo de Nacimiento:</label>
			<input type="text" name="nacimiento" required>
			<br>
			<label>Enfermedades cronicas:</label>
			<input type="text" name="enfermedades" required>
			<br>
			<label>Desarrollo:</label>
			<input type="text" name="desarrollo" required>
			<hr>
			<input type="submit" align="center" value="enviar" >
		</form>
	 </FIELDSET>
		<div>
			<table border="1" class="table table-bordered">
				<tr>
					<th>NSS</th>
					<th>Nombre</th>
					<th>Apellido Paterno</th>
					<th>Apellido materno</th>
					<th>Edad</th>
					<th>Sexo</th>
					<th>Tel</th>
					<th>Peso</th>
					<th>Talla</th>
					<th>Tipo Sanguineo</th>
					<th>Metodo Nacimiento</th>
					<th>Enfermedades Cronicas</th>
					<th>Desarrollo</th>
				</tr>	<!--procesamiento servidor-->
		        <?php 
		         if(isset($_GET['nombre'])):
		        ?> 	
		    	<tr>
		    		<td><?php echo $_GET['nss']; ?></td>
		    		<td><?php echo $_GET['nombre']; ?></td>
		    		<td><?php echo $_GET['paterno']; ?></td>
		    		<td><?php echo $_GET['materno']; ?></td>
		    		<td><?php echo $_GET['edad']; ?></td>
		    		<td><?php echo $_GET['sexo']; ?></td>
		    		<td><?php echo $_GET['Telefono']; ?></td>
		    		<td><?php echo $_GET['peso']; ?></td>
		    		<td><?php echo $_GET['talla']; ?></td>
		    		<td><?php echo $_GET['tipo']; ?></td>
                    <td><?php echo $_GET['nacimiento']; ?></td>
                    <td><?php echo $_GET['enfermedades']; ?></td>
                    <td><?php echo $_GET['desarrollo']; ?></td>
		    	</tr>
		        <?php
		        endif;	
		        ?>      <!--termina procesamiento servidor-->
		   	</table>

		</div>


	</body>
</html>