<?php
require'consultas.php';
$datos=getMedicamentos();
$exist=false;
foreach($datos as $med){
    if($_POST['nom']==$med['nombre']){
        $exist=true;
    }
}
if($exist){
    updateMedicamento($_POST['nom'], $_POST['cant']);
}
else{
    postMedicamento($_POST['nom'], $_POST['cant']);
}
header('location:recetar.php');
?>