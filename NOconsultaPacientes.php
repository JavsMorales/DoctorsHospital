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
$query = "select * from pacientes";

//DEFINIR VARIABLE DEL RESULTADO DE LA CONSULTA (en formato numérico de la base de datos)
$resultado = mysqli_query($miconexion, $query);
//DEFINIR VARIABLE QUE BUSQUE Y CONTRASTE EL RESULTADO DE LA CONSULTA CON LA INFO DE LA BDD (mysqli_fetch_assoc)
$filas = mysqli_fetch_assoc ($resultado);
?>

<html>
<head>
  <title>Consulta Pacientes</title>
</head>
<body>
<?php 
$iteracion= 0;
do /* con el "do" repite la operación */{ 
if ($iteracion%2==0){$clase= "active";} else {$clase= "";}
    ?>

<form id="form1" name="form1" method="post" action="actualizarPacientes.php">
<!-- Este formulario referencia al documento "actualizar.php" en el cual se meterá la información que vamos a actualizar-->
  <p>
    <label for="textfield">Nombre</label>
 <!-- Poniendo el echo dentro del campo VALOR nos mostrará la información dentro del campo de input, en vez de dejarlo en blanco.-->
    <input type="text" name=<?php echo '"Nom_Paciente'.$iteracion.'"'; ?> id="textfield2" value=  <?php echo $filas['Nom_Paciente']; ?> /></p>

  <!--LA VARIABLE FILAS ESTÁ DEFINIDA EN EL DOCUMENTO "actualizar.php"-->
  <p>
    <label for="textfield2">Apellido</label>
    <input type="text" name=<?php echo '"Apell_Paciente'.$iteracion.'"'; ?> id="textfield3" value=  <?php echo $filas['Apell_Paciente']; ?> /></p>
   <!--LA VARIABLE FILAS ESTÁ DEFINIDA EN EL DOCUMENTO "actualizar.php"-->
  <p>
    <label for="textfield3">Sexo</label>
    <input type="text" name=<?php echo '"Sexo'.$iteracion.'"'; ?> id="textfield4" value=  <?php echo $filas['Sexo']; ?> /></p>
   <!--LA VARIABLE FILAS ESTÁ DEFINIDA EN EL DOCUMENTO "actualizar.php"-->
  <p>
    <label for="textfield4">Fecha Nacimiento</label>
    <input type="text" name=<?php echo '"FNacimiento'.$iteracion.'"'; ?> id="textfield5" value=  <?php echo $filas['FNacimiento']; ?> /></p>
    <p>
    <label for="textfield4">Domicilio</label>
    <input type="text" name=<?php echo '"Domicilio'.$iteracion.'"'; ?> id="textfield6" value=  <?php echo $filas['Domicilio']; ?> /></p>
    <p>
    <label for="textfield4">Poblacion</label>
    <input type="text" name=<?php echo '"Poblacion'.$iteracion.'"'; ?> id="textfield7" value=  <?php echo $filas['Poblacion']; ?> /></p>
    <p>
    <label for="textfield4">Nº Historial</label>
    <input type="text" name=<?php echo '"Num_Historial'.$iteracion.'"'; ?> id="textfield8" value=  <?php echo $filas['Num_Historial']; ?> /></p>
    <p>
    
  <!--LA VARIABLE FILAS ESTÁ DEFINIDA EN EL DOCUMENTO "actualizar.php"-->
  <p>
    <input type="hidden" name=<?php echo '"id2'.$iteracion.'"'; ?> value=<?php echo $filas['Num_Historial']?> />
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