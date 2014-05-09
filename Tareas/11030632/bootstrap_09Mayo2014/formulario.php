<html>
	<head></head>
	<body>
		<form action="formulario.php" method="GET">
			<label>nombre</label>
			<input type="text" name="nombre">
			<label>apellido</label>
			<input type="text" name="apellido">
			<label>correo electronico</label>
			<input type="text" name="correo">
			<input type="submit" value="enviar">
		</form>
		<div>
        
			<table border="1">
				<tr>
					<th>Nombre</th>
					<th>apellido</th>
					<th>correo electronico</th>
				</tr>	<!--procesamiento servidor-->
		        <?php 
		         if(isset($_GET['nombre'])):
		        ?> 	
		    	<tr>
		    		<td><?php echo $_GET['nombre']; ?></td>
		    		<td><?php echo $_GET['apellido']; ?></td>
		    		<td><?php echo $_GET['correo']; ?></td>
		    	</tr>
		        <?php
		        endif;	
		        ?>      <!--termina procesamiento servidor-->
		   	</table>

		</div>


	</body>
</html>