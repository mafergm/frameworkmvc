<?php
	include('Modelo/Usuarios.Model.php');
	$mn=new Usuarios();

	$usuario=$_POST['us'];
	$contra=$_POST['pass'];
	
	
    $final=$mn->busqueda($usuario, $contra);

	if($final->num_rows==1)
	{
		//header("location: creacion.php");
		echo "Felicidades";
	}

	else
	{
		header("location: index.php");
		
	}
?>