<?php
	require'consultas.php';
	if(userExists($_POST['DNI'])){
		$us=validPassword($_POST['Clave'],$_POST['DNI']);
		if($us!==false){
			var_dump($us);
			session_start();
			$_SESSION['user']=$us;
			header('location:recetar.php');
		}
		else{
			echo"Contraseña incorrecta";
		}
	}
	else{
		echo"usuario invalido";
	}

?>