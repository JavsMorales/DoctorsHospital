<?php
//DEFINIR VARIABLE ID
//$id = $_POST['identificador'];

//CONEXIÓN A MI SERVIDOR
$servidor="localhost";
$us="root";
$pass="";
$bdd="hospital";
$miconexion=mysqli_connect($servidor, $us, $pass) or die (mysql_error());
mysqli_select_db($miconexion, $bdd);

//$id = $_POST['identificador'];
//DEFINIR VARIABLE CONSULTA A LA BASE DE DATOS, necesitas referirte a la variable definida anteriormente.
$query = "select * from ingresos";
//DEFINIR VARIABLE DEL RESULTADO DE LA CONSULTA (en formato numérico de la base de datos)
$resultado = mysqli_query($miconexion, $query);
//DEFINIR VARIABLE QUE BUSQUE Y CONTRASTE EL RESULTADO DE LA CONSULTA CON LA INFO DE LA BDD (mysqli_fetch_assoc)
$filas = mysqli_fetch_assoc ($resultado);
?>

<html>
<head>
	<title>Consulta Ingresos</title>
</head>
<body>
<?php 
$iteracion= 0;
do /* con el "do" repite la operación */{ 
if ($iteracion%2==0){$clase= "active";} else {$clase= "";}
    ?>

<form id="form1" name="form1" method="post" action="actualizarIngresos.php">
<!-- Este formulario referencia al documento "actualizar.php" en el cual se meterá la información que vamos a actualizar-->
  <p>
    <label for="textfield">Nº Ingreso</label>
 <!-- Poniendo el echo dentro del campo VALOR nos mostrará la información dentro del campo de input, en vez de dejarlo en blanco.-->
    <input type="text" name= <?php echo '"Num_Ingreso'.$iteracion.'"'; ?> id="textfield" value=  <?php echo $filas['Num_Ingreso']; ?> /></p>


  <p>

    <label for="textfield2">Fecha Ingreso</label>
    <input type="text" name=<?php echo '"FIngreso'.$iteracion.'"'; ?> id="textfield2" value=  <?php echo $filas['FIngreso']; ?> /></p>


   <!--LA VARIABLE FILAS ESTÁ DEFINIDA EN EL DOCUMENTO "actualizar.php"-->
  <p>
    <label for="textfield3">Fecha Alta</label>
    <input type="text" name=<?php echo '"FAlta'.$iteracion.'"'; ?> id="textfield3" value=  <?php echo $filas['FAlta']; ?> /></p>
   <!--LA VARIABLE FILAS ESTÁ DEFINIDA EN EL DOCUMENTO "actualizar.php"-->
  <p>
    <label for="textfield4">Planta</label>
    <input type="text" name=<?php echo '"Planta'.$iteracion.'"'; ?> id="textfield4" value=  <?php echo $filas['Planta']; ?> /></p>
    <p>
    <label for="textfield5">Cama</label>
    <input type="text" name=<?php echo '"Cama'.$iteracion.'"'; ?> id="textfield5" value=  <?php echo $filas['Cama']; ?> /></p>
    <p>
    <label for="textfield6">Alergico</label>
    <input type="text" name=<?php echo '"Alergico'.$iteracion.'"'; ?> id="textfield6" value=  <?php echo $filas['Alergico']; ?> /></p>
    <p>
    <label for="textfield4">Diagnostico</label>
    <input type="text" name=<?php echo '"Diagnostico'.$iteracion.'"'; ?> id="textfield4" value=  <?php echo $filas['Diagnostico']; ?> /></p>
    <p>
    <label for="textfield4">Coste</label>
    <input type="text" name=<?php echo '"Coste'.$iteracion.'"'; ?> id="textfield4" value=  <?php echo $filas['Coste']; ?> /></p>
    <p>
    <label for="textfield4">Num_Historial</label>
    <input type="text" name=<?php echo '"Num_Historial'.$iteracion.'"'; ?> id="textfield4" value=  <?php echo $filas['Num_Historial']; ?> /></p>
    <p>
    <label for="textfield4">Num_Colegiado</label>
    <input type="text" name=<?php echo '"Num_Colegiado'.$iteracion.'"'; ?> id="textfield4" value=  <?php echo $filas['Num_Colegiado']; ?> /></p>
  <!--LA VARIABLE FILAS ESTÁ DEFINIDA EN EL DOCUMENTO "actualizar.php"-->
  <p>
    <input type="hidden" name=<?php echo '"id2'.$iteracion.'"'; ?> value=<?php echo $filas['Num_Ingreso']?> />
    <!--Este input hidden se encuentra oculto y referencia a la variable $id2 que es con la que se referencia a los campos que se van a modificar-->
  </p>
<?php 
$iteracion++;
  } while /*Mientras hayan registros en el array*/ ($filas = mysqli_fetch_assoc ($resultado));?>  
  <p>
    <input type="hidden" name=<?php echo "cantidad"; ?> value=<?php echo '"'.$iteracion.'"';?> />
    <input type="submit" name="button" id="button" value="Actualizar" />
  </p>
</form>
</body>
</html>