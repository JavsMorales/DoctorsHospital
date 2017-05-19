<?php
//CONEXIÓN A MI SERVIDOR
include 'conexion.php';

$query_recordset1 = "SELECT * FROM medicos";/* selección todos los campos */
$recordset = mysqli_query($miconexion, $query_recordset1) or die (mysqli_connect_error());
/* asociaremos a un array la consulta que acabamos de realizar para que nos muestre todas las entradas de la bdd*/
$row_filas = mysqli_fetch_assoc($recordset); 

$max = $_POST["cantidad"];

for ($i= 0; $i<$max; $i++) 
{
	$Nom_Medico = $_POST["Nom_Medico".$i];
	$Apell_Medico = $_POST["Apell_Medico".$i];
	$Especialidad = $_POST["Especialidad".$i];
	$Num_Colegiado = $_POST["Num_Colegiado".$i];
	$Antiguedad = $_POST["Antiguedad".$i];

//orden para actualizar la información en los diferentes campos, en el campo de la izquierda introducimos el nombre que aparece en la bdd y en el otro el del campo del formulario
	$sql = "UPDATE medicos SET Nom_Medico = '$Nom_Medico' , Apell_Medico = '$Apell_Medico' , Especialidad = '$Especialidad' , Num_Colegiado = '$Num_Colegiado', Antiguedad = '$Antiguedad' WHERE Num_Colegiado = '$Num_Colegiado';";

//Insertamos la orden para que se ejecute la sustitución en la consulta 
mysqli_query($miconexion, $sql);
}
//La ubicación del "Header" es a donde se redirecciona la función de PHP
//header ("location: index.php");

header('Location: listadoMedicos.php');
?>
