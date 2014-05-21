<?php
  include ('../layouts/header.php');
 
?>


<link href="css/form.css" rel="stylesheet">
<div class="row">
	<div class="col-md-3">
    </div>
	<div class="col-md-6">
		<div class="panel panel-default" id ="formulario">
		  <div class="panel-heading">Datos Personales</div>
		   <div class="panel-body">
            	<form action="" method="POST">
						<label for="username">Username:</label>
						<input type="text" id="username" class="form-control"required>
						<label for="email":>email</label>
						<input type="text" id="email" class="form-control"  required>
						<label for="password">password:</label>
						<input type="text" id="password" class="form-control"required>
						<label for="rfc">RFC:</label>
						<input type="text" id="rfc" class="form-control"  required>
						<label for"cp">cp:</label>
						<input type="text" id="cp" class="form-control" required>
						<label for="foto">foto:</label>
						<input type="text" id="foto" class="form-control" required>
						<center>
		                   <button type="button" class="btn btn-primary" id="ENVIAR3" >Enviar</button>
	                   </center>
				</form>   
		    </div>
		</div>
	</div>
  <div class="col-md-3 col-md-offset-3">
 
 </div>
</div>

  <div class="row" >
      <div class="panel panel-default" id="formulario">
      <div class="panel-heading">Tabla</div>
      <div class="panel-body" id="loadAjax">
        .......
      </div>
    </div>  
    </div>

<?php include ('../layouts/footer.php'); ?>
