<?php

include_once ("negocios.php");
try 
{
    if(!empty($_POST))
    {
       $objetoNegocio= new negocios($_POST["cedula"], $_POST["apellidos"], $_POST["nombres"], $_POST["edad"], $_POST["curso"], $_POST["arrastra"]);
       
       if(isset($_POST["insertar"]))
       {
          $objetoNegocio->insertar();
       }
       if(isset($_POST["eliminar"]))
       {
          $objetoNegocio->eliminar();
       }
       if(isset($_POST["actualizar"]))
       {
          $objetoNegocio->actualizar();
       }
       if(isset($_POST["consultar"]))
       {
          $objetoNegocio->consultar();
       }
    }
      
} 
catch (PDOException $ex) 
{
    echo $ex->getMessage();
}

?>

<form action="interfaz.php" method="$_POST">
    <div>Cedula<input type="text" id="cedula" name="cedula" value="<?php if(isset($_POST["consultar"]))echo $objetoNegocio->cedula ?> "></div>
    <div>Apellidos<input type="text" id="apellidos" name="apellido" value="<?php if(isset($_POST["consultar"]))echo $objetoNegocio->apellidos ?> "></div>
    <div>Nombres<input type="text" id="nombres" name="nombres" value="<?php if(isset($_POST["consultar"]))echo $objetoNegocio->nombres ?> "></div>
    <div>Edad<input type="text" id="edad" name="edad" value="<?php if(isset($_POST["consultar"]))echo $objetoNegocio->edad ?> "></div>
    <div>Curso<input type="text" id="curso" name="curso" value="<?php if(isset($_POST["consultar"]))echo $objetoNegocio->curso ?> "></div>
    <div>Arrastra<input type="text" id="arrastra" name="arrastra" value="<?php if(isset($_POST["consultar"]))echo $objetoNegocio->arrastra ?> "></div>
    
    <div>
        <input type="submit" id="insertar" value="Insertar" name="insertar">
        <input type="submit" id="eliminar" value="Eliminar" name="eliminar">
        <input type="submit" id="actualizar" value="Actualizar" name="actualizar">
        <input type="submit" id="consultar" value="Consultar" name="consultar">
        
    </div>
    
</form>