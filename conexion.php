<?php
	$servidor="localhost";
	$usuario="root";
	$password="";
	$baseDeDatos="parcial_1";

	$db= mysqli_connect($servidor,$usuario,$password,$baseDeDatos);

	mysqli_query($db,"SET NAMES 'utf8'");

    if ($db)
	{
      echo "Conexión Existosa";         
    }else
	{
     echo "Error Conexion";
    }
?>