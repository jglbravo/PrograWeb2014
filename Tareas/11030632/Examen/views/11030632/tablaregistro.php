<?php
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Usuarios.php');
      include ('../../libs/ER.php');
      include ('../layouts/header.php');
?>
<?php
      $dato = new Usuarios();
      $muestra_errores = false;
      if (isset($_POST["email"])) {
        $dato->set_username($_POST["username"]);
        $dato->set_email($_POST["email"]);
        $dato->set_password($_POST["password"]);
        $dato->set_rfc($_POST["rfc"]);
        $dato->set_cp($_POST["cp"]);
        $dato->set_foto($_POST["foto"]);
        if(count($dato->errores) > 0){
          $muestra_errores = true;
        }else{
          $dato->inserta($dato->get_atributos());
        }
      }

      
?>
 <link href="css/form.css" rel="stylesheet">

<div class="row">

  <div class="col-md-6 col-md-offset-3">
    <div class="<?php echo ($muestra_errores)?'alert alert-danger':''; ?> ">
      <?php 
        if ($muestra_errores) {
          foreach ($dato->errores as $key => $value) {
            echo $value."<br>";
          }
        }
      ?>
    </div>
      <div class="panel panel-default" id="formulario">
         <div class="panel-heading">Ingresa Datos:</div>
            <div class="panel-body">
              <form role="form" method="POST">
                <label for="username">Username:</label>
                <input type="username" id="username" class="form-control" name="username" placeholder="colocar usuario" required>
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="colocar email">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="colocar Password">
                <label for="rfc">RFC:</label>
                <input type="rfc" id="rfc" class="form-control" name="rfc" placeholder="colocar RFC" required>
                <label for"cp">cp:</label>
                <input type="cp" id="cp" class="form-control" name="cp" placeholder="colocar CP" required>
                <label for="foto">foto:</label>
                <input type="foto" id="foto" class="form-control" name="foto" placeholder="colocar url" required>
                <center>
                <button type="submit" class="btn btn-primary">Aceptar</button>
              </center>
              </form>
            </div>
           </div>
         </div>
       </div>
<?php
  $dato->show_grid('*', ' ','10');
?>

</div>





