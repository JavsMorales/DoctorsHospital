<?php
include 'conexion.php';
mysqli_select_db($miconexion, $bdd) or die (mysqli_connect_error());
$col = $_POST['col'];
$query= "DELETE FROM medicos WHERE Num_Ingreso = '$col'";
$resultado = mysqli_query($miconexion, $query);
header("Location: listadoIngresos.php");
?>