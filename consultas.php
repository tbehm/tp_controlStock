<?php
	define("URL", "conexion.php");

	function postMedicamento($nom,$cant){
		require URL;
		$consulta= $conexion->prepare("INSERT INTO `medicamentos` (`nombre`,`cantidad`) VALUES(:nom,:cant)");
		$consulta->bindParam(":nom",$nom);
		$consulta->bindParam(":cant",$cant);
		$consulta->execute();
	}
	function userExists($dni){
		require URL;
		$consulta= $conexion->prepare("SELECT * FROM usuarios WHERE DNI='$dni'");
		$consulta->execute();
		$datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
		if(empty($datos)){
			return false;
		}
		return true;

	}
	function postSalida($nom,$responsable){
		require URL;
		$cant=1;
		$consulta= $conexion->prepare("INSERT INTO `salidas` (`medicamento`,`cantidad`,`responsable`) VALUES(:nom,:cant,:res)");
		$consulta->bindParam(":nom",$nom);
		$consulta->bindParam(":cant",$cant);
		$consulta->bindParam(":res",$responsable);
		$consulta->execute();
	}
	function getSalidas(){
		require URL;
		$consulta= $conexion->prepare("SELECT * FROM salidas");
		$consulta->execute();
		return $consulta->fetchAll(PDO::FETCH_ASSOC);
	}
	function validPassword($pass,$dni){
		require URL;
		$consulta= $conexion->prepare("SELECT * FROM usuarios WHERE DNI='$dni' AND password='$pass'");
		$consulta->execute();
		$datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
		if(empty($datos)){
			return false;
		}
		foreach($datos as $user){
			$us=$user['nombre'];
		}
		return $us;
	}
	function getMedicamentos(){
		require URL;
		$consulta= $conexion->prepare("SELECT * FROM medicamentos");
		$consulta->execute();
		return $consulta->fetchAll(PDO::FETCH_ASSOC);
	}
	function descontar($med){
		require URL;
		$consulta= $conexion->prepare("UPDATE medicamentos SET cantidad=cantidad-1 WHERE nombre='$med'");
		$consulta->execute();
	}
	function updateMedicamento($med,$cant){
		require URL;
		$consulta= $conexion->prepare("UPDATE medicamentos SET cantidad=cantidad+$cant WHERE nombre='$med'");
		$consulta->execute();
	}
?>