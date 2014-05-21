<?php
        include ('../../libs/adodb5/adodb-pager.inc.php');
	    include ('../../libs/adodb5/adodb.inc.php');
	    include ('../../models/Conexion.php');
	    include ('../../models/Modelo.php');
	    include ('../../models/Historial.php');
	    include ('../layouts/header.php');
?>
 <link href="css/form.css" rel="stylesheet">

<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default" id ="formulario2">
		  <div class="panel-heading">Historial Médico</div>
		   <div class="panel-body">
            	<form>
				<!--	<label>Numero Seguridad Social:</label>
					<input type="text" name="nss" class="form-control" required>-->
					<label>Nombre(s):</label>
					<input type="text" id="nombre" class="form-control" required>
					<label>Apellido Paterno:</label>
					<input type="text" id="apellido_pat"  class="form-control" required>
					<label>Apellido Materno:</label>
					<input type="text" id="apellido_mat" class="form-control" required>
					<label>Edad:</label>
					<input type="text" id="edad" class="form-control" required>
					<label>Sexo:</label>
					<input type="text" id="sexo"  class="form-control" required>
					<label>Telefono:</label>
					<input type="text" id="telefono" class="form-control" required>
             </div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-default" id ="formulario2">
		  <div class="panel-heading">Historial Médico</div>
		   <div class="panel-body">
		        	<label>Peso:</label>
					<input type="text" id="peso" class="form-control" required>
					<label>Talla:</label>
					<input type="text" id="talla" class="form-control" required>
					<label>Tipo sanguineo:</label>
					<input type="text" id="tipo" class="form-control" required>
					<label>Metodo de Nacimiento:</label>
					<input type="text" id="nacimiento" class="form-control" required>
					<label>Enfermedades cronicas:</label>
					<input type="text" id="enfermedades" class="form-control" required>
					<label>Desarrollo:</label>
					<input type="text" id="desarrollo" class="form-control" required>
					<br>
					<center>
		            <button type="button" class="btn btn-primary" id="ENVIAR2" >Enviar</button>
		            </center>
			 </div>
		   </div>
        </div>
</div>
<hr>
<div class="row">
  		<div class="panel panel-default" id ="formulario">
		  <div class="panel-heading">Historial Médico</div>
		  <div class="panel-body" id="loadAjax">
		    .......
		  </div>
		</div>	
</div>

        

<?php include ('../layouts/footer.php'); ?>
			
				