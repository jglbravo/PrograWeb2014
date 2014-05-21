<?php

class Datos extends Modelo{
    public $nombre_tabla = 'datos_personales';
    public $pk = 'id_persona';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'apellido_pat'=>array(),
        'apellido_mat'=>array(),
        'edad'=>array(),
        'sexo'=>array(),
        'ciudad'=>array(),
        'colonia'=>array(),
        'calle'=>array(),
        'numero'=>array(),
        'correo'=>array()
    );
    
    public $errores = array( );
    
    private $nombre;
    private $apellido_pat;
    private $apellido_mat;
    private $edad;
    private $sexo;
    private $ciudad;
    private $colonia;
    private $calle;
    private $numero;
    private $correo;
       
       
    
    function Datos(){
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
    public function get_ciudad(){
        return $this->ciudad;
    } 
    public function set_ciudad($valor){
        $this->ciudad = trim($valor);
    }
    public function get_colonia(){
        return $this->colonia;
    } 
    public function set_colonia($valor){
        $this->colonia = trim($valor);
    }
    public function get_calle(){
        return $this->calle;
    } 
    public function set_calle($valor){
        $this->calle = trim($valor);
    }
    public function get_numero(){
        return $this->numero;
    } 
    public function set_numero($valor){
        $this->numero = trim($valor);
    }
    public function get_correo(){
        return $this->correo;
    } 
    public function set_correo($valor){
        $this->correo = trim($valor);
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
