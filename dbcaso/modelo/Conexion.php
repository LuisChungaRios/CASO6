<?php 
	$conexion=new mysqli("localhost","root","","dbclase");
	// Mostrar error al conectar la base de datos
	if (mysqli_connect_errno()) {
		echo "ERROR AL CONECTAR A DB".mysqli_connect_error();
	}

//Funciones que retornan valores
	if (!function_exists('ejecutarConsulta')) {
		function ejecutarConsulta($sql) {
			global $conexion;
			$resul=$conexion->query($sql);
			return $resul;
		}

		function limpiarCadena($str){
			global $conexion;
			$str=mysqli_real_escape_string($conexion,trim($str));
			return htmlspecialchars($str);
		}
	}

 ?>