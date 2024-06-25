
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Recetar</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script src="script.js"></script>
</head>
<body>
	<?php include_once'header.php';?>
	<center><div class="mainbox">
		<form action="" method="post">
			<select id="sel" name="med">
				<?php
				require 'consultas.php';
				$datos = getMedicamentos();
				foreach($datos as $medicamento){
					echo"<option value='".$medicamento['nombre']."'>".$medicamento['nombre']."</option>";
				}
				?>
				
			</select>
			<input type="button" class="button" onclick="response()" value="Recetar">
		</form>
	
<?php
	if(isset($_GET['med'])){
		$med = $_GET['med'];
		$responsable = $_POST['nom'];
		descontar($med);
		postSalida($med,$responsable);
		echo"<h3>Recetado</h3>";
	}

?>
</div></center>
</body>
</html>