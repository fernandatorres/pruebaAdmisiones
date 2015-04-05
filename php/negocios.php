<?php
//incluir la clase datos
include_once ("datos.php");

class negocios 

{
    public $cedula;
    public $apellidos;
    public $nombres;
    public $edad;
    public $curso;
    public $arrastra;
    public $objetoDatos;
    
    public function __construct($cedula,$apellidos,$nombres,$edad,$curso,$arrastra) 
    {
        $this->cedula=$cedula;
        $this->apellidos=$apellidos;
        $this->nombres=$nombres;
        $this->edad=$edad;
        $this->arrastra=$arrastra;
        
            
            
    }
}
