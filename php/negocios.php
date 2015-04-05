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
        $this->objetoDatos=new datos('mysql:host=localhost; dbname baseproyecto','root','');
    }
    public function insertar()
    {
    try
    {
        $this->objetoDatos->conectar();
        $this->objetoDatos->ejecutar("insert into estudiante (cedula,apellidos,nombres,edad,curso,arrastra) values ('$this->cedula','$this->apellidos','$this->nombres','$this->edad','$this->curso','$this->arrastra') ");
        $this->objetoDatos->desconectar();
    }
   catch (PDOException $ex)
    {
        throw $ex;
    }
    }   

    public function eliminar()
    {
      
        $this->objetoDatos->conectar();
        $this->objetoDatos->ejecutar("delete from estudiante where cedula=$this->cedula ");
        $this->objetoDatos->desconectar();
    }
    
    public function actualizar()
    {
        $this->objetoDatos->conectar();
        $this->objetoDatos->ejecutar("update estudiante set apellidos='$this->apellidos', nombres='$this->nombres',edad='$this->edad',curso='$this->curso',arrastra='$this->arrastra' where cedula=$this->cedula");
        $this->objetoDatos->desconectar();
    }
    
    public function consultar()
    {
        $this->objetoDatos->conectar();
        $rs=$this->objetoDatos->ejecutar("select* from ingresos where cedula=$this->cedula");
        if(count($rs))
        {
            $this->apellidos=$rs[0]['apellidos'];
            $this->nombres=$rs[0]['nombres'];
            $this->edad=$rs[0]['edad'];
            $this->curso=$rs[0]['curso'];
            $this->arrastra=$rs[0]['arrastra'];
        }
        $this->objetoDatos->desconectar();
                
    }
}
