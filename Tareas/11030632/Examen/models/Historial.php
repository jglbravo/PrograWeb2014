<?php

class Historial extends Modelo{
    public $nombre_tabla = 'historial_medico';
    public $pk = 'id_nss';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'apellido_pat'=>array(),
        'apellido_mat'=>array(),
        'edad'=>array(),
        'sexo'=>array(),
        'telefono'=>array(),
        'peso'=>array(),
        'talla'=>array(),
        'tipo'=>array(),
        'nacimiento'=>array(),
        'enfermedades'=>array(),
        'desarrollo'=>array()

    );
    
    public $errores = array( );
    
    private $nombre;
    private $apellido_pat;
    private $apellido_mat;
    private $edad;
    private $sexo;
    private $telefono;
    private $peso;
    private $talla;
    private $tipo;
    private $nacimiento;
    private $enfermedades;
    private $desarrollo;
       
       
    
    function Historial(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_nombre(){
        return $this->nombre;
    } 
    public function set_nombre($valor){
        $this->nombre = trim($valor);
    }
        public function get_apellido_pat(){
        return $this->apellido_pat;
    } 
    public function set_apellido_pat($valor){
        $this->apellido_pat = trim($valor);
    }
    public function get_apellido_mat(){
        return $this->apellido_mat;
    } 
    public function set_apellido_mat($valor){
        $this->apellido_mat = trim($valor);
    }
    public function get_edad(){
        return $this->edad;
    } 
    public function set_edad($valor){
        $this->edad = trim($valor);
    }
    public function get_sexo(){
        return $this->sexo;
    } 
    public function set_sexo($valor){
        $this->sexo = trim($valor);
    }
    public function get_telefono(){
        return $this->telefono;
    } 
    public function set_telefono($valor){
        $this->telefono = trim($valor);
    }
    public function get_tipo(){
        return $this->tipo;
    } 
    public function set_tipo($valor){
        $this->tipo = trim($valor);
    }
    public function get_talla(){
        return $this->talla;
    } 
    public function set_talla($valor){
        $this->talla = trim($valor);
    }
    public function get_peso(){
        return $this->peso;
    } 
    public function set_peso($valor){
        $this->peso = trim($valor);
    }
    public function get_nacimiento(){
        return $this->nacimiento;
    } 
    public function set_nacimiento($valor){
        $this->nacimiento = trim($valor);
    }
    public function get_enfermedades(){
        return $this->enfermedades;
    } 
    public function set_enfermedades($valor){
        $this->enfermedades = trim($valor);
    }
   public function get_desarrollo(){
        return $this->desarrollo;
    } 
    public function set_desarrollo($valor){
        $this->desarrollo = trim($valor);
    }



	
    
    public function set_email($valor){
        
        $rs = $this->consulta_sql("select * from evt_asistentes where email = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->email = "";
            $this->errores[] = "Este e-mail (".$valor.") ya esta registrado"; 
        }else{
            $this->email = trim($valor);
        }
        
    } 
    


    
    
    
}

?>
