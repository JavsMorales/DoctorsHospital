<?php
//CONEXIÓN A MI SERVIDOR
$servidor="localhost";
$us="root";
$pass="";
$bdd="hospital";
$miconexion=mysqli_connect($servidor, $us, $pass) or die (mysql_error());
mysqli_select_db($miconexion, $bdd);

/* asociaremos a un array la consulta que acabamos de realizar para que nos muestre todas las entradas de la bdd*/
$row_filas = mysqli_fetch_assoc($recordset); 
//echo mysqli_num_rows($recordset);
$max = $_POST["cantidad"];

for ($i= 0; $i<$max; $i++) 
{	
	$Num_Ing = $_POST["Num_Ingreso".$i];
	$FIngreso = $_POST["FIngreso".$i];
	$FAlta = $_POST["FAlta".$i];
	$Planta = $_POST["Planta".$i];
	$Cama = $_POST["Cama".$i];
	$Alergico = $_POST["Alergico".$i];
	$Diagnostico = $_POST["Diagnostico".$i];
	$Coste = $_POST["Coste".$i];
	$Num_Historial = $_POST["Num_Historial".$i];
	$Num_Colegiado = $_POST["Num_Colegiado".$i];
	$Confirmacion = $_POST["Confirmacion".$i];
//orden para actualizar la información en los diferentes campos, en el campo de la izquierda introducimos el nombre que aparece en la bdd y en el otro el del campo del formulario
if ($Confirmacion = <?php echo '"Confirmacion'.$iteracion.'"'; ?>) {
	
	$sql = "DELETE FROM ingresos WHERE Num_Ingreso = '$Num_Ing'";

//Insertamos la orden para que se ejecute la sustitución en la consulta 
mysqli_query($miconexion, $sql);
	}
}

header('Location: deleteIngresos.php');
//La ubicación del "Header" es a donde se redirecciona la función de PHP
//header ("location: index.php");
?>
