<?php
    require_once 'conexion.php';
    
    $documento = $_POST ['documento'] ;
    $nombre = $_POST['nombre'];
    $genero = $_POST['genero'];
    $fecha = $_POST['fecha'];
    $estado = $_POST['estado'];
    $hijo = $_POST['hijo'];
    $trabajo = $_POST['trabajo'];
    $departamento = $_POST['departamento'];
    $ciudad = $_POST['ciudad'];
    $estrato = $_POST['estrato'];
    
    //INSERT---- PARA INSERTAR LOS DATOS A LA BASE DE DATOS
    
    $sql="INSERT INTO usua VALUES('$documento','$nombre','$genero','$fecha','$estado','$hijo','$trabajo','$departamento','$ciudad','$estrato')";
    $guardar= mysqli_query($db,$sql);
   
   
    if($guardar)
    {
        echo "ok";
    }
    else
    {
        echo "error"; 
    }
?>