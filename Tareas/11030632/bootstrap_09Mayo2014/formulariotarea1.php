<html>
	<head>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/form.css" rel="stylesheet">
	</head>
	<body>
     <div class="container-fluid">
      <div class="row">
	   <div class="col-md-5">
	      <FIELDSET id="espacio">
	        <legend>Datos Personales:</legend>
				<form action="formulariotarea1.php" method="GET" id="formulario">
					  <div>
						<label>Nombre(s):</label>
						<input type="text" name="nombre" required>
						<label>Apellido Paterno:</label>
						<input type="text" name="paterno" class="input-xs"  required>
					  </div>
					  <div>
						<label class="control-label">Apellido Materno:</label>
						<input type="text" name="materno" required>
						<label>Edad:</label>
						<input type="text" name="edad" required>
					  </div>
					  <div>
						<label class="control-label">Sexo:</label>
						<input type="text" name="sexo" required>
						<label>Ciudad:</label>
						<input type="text" name="ciudad" required>
					  </div>
					  <div>
						<label>Direccion:<br> Colonia</label>
						<input type="text" name="colonia" required>
						<label>Calle:</label>
						<input type="text" name="calle" required>
					  </div>
					  <div>
					    <label>Numero:</label>
						<input type="text" name="num" class="input-small" type="text" required>
						<label>Correo electronico:</label>
						<input type="text" name="correo" required>
				      </div>
				      <center><input type="submit" value="enviar"></center>
				</form>
				 </FIELDSET>
				</div>
					<div class="col-md-7">
						<center>
						<table border="1" >
							<tr>
								<th>Nombre</th>
								<th>Apellido Paterno</th>
								<th>Apellido materno</th>
								<th>Edad</th>
								<th>Sexo</th>
								<th>Ciudad</th>
								<th>Colonia</th>
								<th>Calle</th>
								<th>Numero</th>
								<th>Mail</th>
							</tr>	<!--procesamiento servidor-->
					        <?php 
					         if(isset($_GET['nombre'])):
					        ?> 	
					    	<tr>
					    		<td><?php echo $_GET['nombre']; ?></td>
					    		<td><?php echo $_GET['paterno']; ?></td>
					    		<td><?php echo $_GET['materno']; ?></td>
					    		<td><?php echo $_GET['edad']; ?></td>
					    		<td><?php echo $_GET['sexo']; ?></td>
					    		<td><?php echo $_GET['ciudad']; ?></td>
					    		<td><?php echo $_GET['colonia']; ?></td>
					    		<td><?php echo $_GET['calle']; ?></td>
					    		<td><?php echo $_GET['num']; ?></td>
			                    <td><?php echo $_GET['correo']; ?></td>
					    	</tr>
					        <?php
					        endif;	
					        ?>      <!--termina procesamiento servidor-->
					   	</table>
			          </center>
					</div>
			        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
       <!-- Include all compiled plugins (below), or include individual files as needed -->
       <script src="js/bootstrap.min.js"></script>

	</body>
</html>