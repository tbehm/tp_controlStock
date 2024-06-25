<?php
	require'consultas.php';
	$med = $_POST['med'];
	$responsable = $_POST['res'];
	descontar($med);
	postSalida($med,$responsable);
?>