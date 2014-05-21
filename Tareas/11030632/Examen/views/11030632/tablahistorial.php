<?php      
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Historial.php');
?>
<?php
    
  echo "TABLA DATOS PERSONALES";
  $dato = new Historial();
  if(isset($_POST["nombre"])){
    $dato->set_nombre($_POST["nombre"]);
    $dato->set_apellido_pat($_POST["apellido_pat"]);
    $dato->set_apellido_mat($_POST["apellido_mat"]);
    $dato->set_edad($_POST["edad"]);
    $dato->set_sexo($_POST["sexo"]);
    $dato->set_telefono($_POST["telefono"]);
    $dato->set_peso($_POST["peso"]);
    $dato->set_talla($_POST["talla"]);
    $dato->set_tipo($_POST["tipo"]);
    $dato->set_nacimiento($_POST["nacimiento"]);
    $dato->set_enfermedades($_POST["enfermedades"]);
    $dato->set_desarrollo($_POST["desarrollo"]);
    $dato->inserta($dato->get_atributos());
  }
 // $rs = $dato->consulta_datos();
   $dato->show_grid('*', ' ','10');
  //print_r($rs->GetArray());
  
?>