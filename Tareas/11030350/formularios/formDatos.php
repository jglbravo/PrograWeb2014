<html>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario1</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <link href="css/main.css" rel="stylesheet">
  </head>
  <body>
    
			<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="curp">CURP</label>
  <div class="controls">
    <input id="curp" name="curp" type="text" placeholder="Ingresa tu CURP" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="nombre">Nombre</label>
  <div class="controls">
    <input id="nombre" name="nombre" type="text" placeholder="Ingresa tu nombre" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="apellido">Apellido</label>
  <div class="controls">
    <input id="apellido" name="apellido" type="text" placeholder="Ingresa tu apellido" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="direccion">Dirección</label>
  <div class="controls">
    <input id="direccion" name="direccion" type="text" placeholder="Ingresa tu dirección" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="edad">Edad</label>
  <div class="controls">
    <input id="edad" name="edad" type="text" placeholder="Ingresa tu edad" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="email">E-mail</label>
  <div class="controls">
    <input id="email" name="email" type="text" placeholder="Ingresa tu email" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Multiple Radios -->
<div class="control-group">
  <label class="control-label" for="sexo">Sexo</label>
  <div class="controls">
    <label class="radio" for="sexo-0">
      <input type="radio" name="sexo" id="sexo-0" value="Masculino" checked="checked" required="required">
      Masculino
    </label>
    <label class="radio" for="sexo-1">
      <input type="radio" name="sexo" id="sexo-1" value="Femenino" required="required">
      Femenino
    </label>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="tel">Teléfono</label>
  <div class="controls">
    <input id="tel" name="tel" type="text" placeholder="Ingresa tu teléfono" class="input-xlarge">
    
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="civil">Estado Civil</label>
  <div class="controls">
    <select id="civil" name="civil" class="input-xlarge">
      <option>Soltero</option>
      <option>Casado</option>
      <option>Divorciado</option>
      <option>Viudo</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="ocupacion">Ocupación</label>
  <div class="controls">
    <select id="ocupacion" name="ocupacion" class="input-xlarge">
      <option>Estudiante</option>
      <option>Oficinista</option>
      <option>Empleado de Mostrador</option>
      <option>Empresario</option>
      <option>Desempleado</option>
      <option>Otro</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="enviar"></label>
  <div class="controls">
    <button id="enviar" name="enviar" class="btn btn-success">Registrar</button>
  </div>
</div>

</fieldset>
</form>

			<div>

				<table border="1">
					<tr>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Direccion</th>
						<th>Edad</th>
						<th>Correo electronico</th>
					</tr>
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
					?>
				</table>
			</div>

		</body>
</html>