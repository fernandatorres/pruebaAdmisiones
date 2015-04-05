<?php
class datos 
{
    private $cadenaConexion;
    private $user;
    private $password;
    private $objetoConexion;


    public function __construct($cadenaConexion ,$user,$password ) 
    {
       $this->cadenaConexion=$cadenaConexion;
       $this->user=$user;
       $this->password=$password;                 
    }
    
    public function conectar()
    {
        try 
        {
           
        $this->objetoConexion = new PDO($this->user, $this->cadenaConexion, $this->password);
        $this->objetoConexion->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
                    
        } 
                catch (PDOException $ex)        
                {
                    echo "problemas para conectar en la base de datos";
                }
    }
    
    public function desconectar()
    {
        $this->objetoConexion=null;
    }
    
    public function ejecutar($strComando)
    {
        try
        {
          $ejecutar->$this->objetoConexion->prepare($strComando);
          $ejecutar->execute();
          $rous=$ejecutar->fetchAll();
          return $rous;
        } 
        
        catch (PDOException $ex) 
        {
            throw $ex;
        }
        
    }
    
}
