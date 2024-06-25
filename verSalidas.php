<?php
	require'consultas.php';
	require'header.php';
	$datos=getSalidas();
	echo"<table id='table' border='1'><thead><th>Insumo</th><th>Responsable</th><th>Cantidad</th><th>Fecha</th></thead><tbody>";
	if(empty($datos)){
		echo"<tr><td><h3>No hay salidas registradas</h3></td></tr>";
	}
	else{
		$c=0;
		foreach($datos as $elemento){
			$c++;
			if($c%2==0){
				echo"<tr class='gray'>";
			}
			else{
				echo"<tr class='white'>";

			}
			echo"<td>".$elemento['medicamento']."</td><td>".$elemento['responsable']."</td><td>".$elemento['cantidad']."</td><td>".$elemento['fecha']."</td></tr>";
		    
		}
		echo"</table>";
	}
?>