<?php
	class Usuarios
	{
		public function busqueda($usuario, $password)
		{
			$conectar = new Conexion();
			$query = "SELECT * FROM `usuarios` WHERE `Usuario`='$usuario' AND `Password`='password';";
			$resultado = $conectar->query($query);
			return $resultado;
		}
	}
?>