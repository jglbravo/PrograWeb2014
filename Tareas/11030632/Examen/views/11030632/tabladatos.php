<?php      
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Datos.php');
?>
<?php
    
  echo "TABLA DATOS PERSONALES";
  $dato = new datos();
  if(isset($_POST["nombre"])){
    $dato->set_nombre($_POST["nombre"]);
    $dato->set_apellido_pat($_POST["apellido_pat"]);
    $dato->set_apellido_mat($_POST["apellido_mat"]);
    $dato->set_edad($_POST["edad"]);
    $dato->set_sexo($_POST["sexo"]);
    $dato->set_ciudad($_POST["ciudad"]);
    $dato->set_colonia($_POST["colonia"]);
    $dato->set_calle($_POST["calle"]);
    $dato->set_numero($_POST["numero"]);
    $dato->set_correo($_POST["correo"]);
    $dato->inserta($dato->get_atributos());
  }
 // $rs = $dato->consulta_datos();
   $dato->show_grid('*', ' ','10');
  //print_r($rs->GetArray());
  
?>
