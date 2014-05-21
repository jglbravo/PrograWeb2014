
<?php
        include ('../../libs/adodb5/adodb-pager.inc.php');
	    include ('../../libs/adodb5/adodb.inc.php');
	    include ('../../models/Conexion.php');
	    include ('../../models/Modelo.php');
	    include ('../../models/Datos.php');
	    include ('../layouts/header.php');
?>

<link href="css/form.css" rel="stylesheet">
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default" id ="formulario">
		  <div class="panel-heading">Datos Personales</div>
		   <div class="panel-body">
            	<form>
						<label>Nombre(s):</label>
						<input type="text" id="nombre" class="form-control"required>
						<label>Apellido Paterno:</label>
						<input type="text" id="apellido_pat" class="form-control"  required>
						<label>Apellido Materno:</label>
						<input type="text" id="apellido_mat" class="form-control"required>
						<label>Edad:</label>
						<input type="text" id="edad" class="form-control"  required>
						<label>Sexo:</label>
						<input type="text" id="sexo" class="form-control" required>
				       
		    </div>
		</div>
	</div>

   <div class="col-md-6">
		<div class="panel panel-default" id ="formulario">
		  <div class="panel-heading">Datos Personales</div>
		   <div class="panel-body">
						<label>Ciudad:</label>
						<input type="text" id="ciudad" class="form-control" required>
						<label>Direccion:<br> Colonia</label>
						<input type="text" id="colonia" class="form-control" required>
						<label>Calle:</label>
						<input type="text" id="calle" class="form-control" required>
					    <label>Numero:</label>
						<input type="text" id="numero" class="form-control" type="text" required>
						<label>Correo electronico:</label>
						<input type="text" id="correo" class="form-control" required>
              </div>
		    </div>
    </div>
</div>

<div class="row">
	<center>
		    <button type="button" class="btn btn-primary" id="ENVIAR" >Enviar</button>
		    </form>
	</center>
</div>
<hr>
<div class="row">
  		<div class="panel panel-default" id ="formulario">
		  <div class="panel-heading">Tabla Datos Personales</div>
		  <div class="panel-body" id="loadAjax">
		    .......
		  </div>
		</div>	
</div>

        

<?php include ('../layouts/footer.php'); ?>