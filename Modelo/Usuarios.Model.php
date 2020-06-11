<?php
	include('Modelo/Conexion.Model.php');
	class Usuarios
	{
		public function busqueda($usuario, $password)
		{
			$conectar = new Conexion();
			$qr = "SELECT * FROM `usuarios` WHERE `Usuario`='$usuario' AND `Password`='$password';";
			$resultado = $conectar->query($qr);
			return $resultado;
		}
	}
?>