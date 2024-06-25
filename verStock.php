<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js" integrity="sha512-L0Shl7nXXzIlBSUUPpxrokqq4ojqgZFQczTYlGjzONGTDAcLremjwaWv5A+EDLnxhQzY5xUZPWLOLqYRkY0Cbw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css">
<?php
require'header.php';
?>
	<title></title>
</head>
<body>
	<div id="grafico"><canvas id="Estadistica"></canvas></div>

</body>
</html>
<?php
	require 'consultas.php';
	$data=getMedicamentos();
	$nombre=[];
	$cant=[];
	foreach($data as $med){
		$nombre[]=$med['nombre'];
		$cant[]=$med['cantidad'];
	}
	$nombre=json_encode($nombre);
	$cant=json_encode($cant);
	echo"<script src='script.js'></script>";
	echo"<script type='text/javascript'>graficar(".$nombre.",".$cant.")</script>";

?>