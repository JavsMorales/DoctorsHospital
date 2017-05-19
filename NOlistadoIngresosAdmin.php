<?php
$servidor="localhost";
$us="root";
$pass="";
$bdd="hospital";
$miconexion=mysqli_connect($servidor, $us, $pass) or die (mysql_error());
mysqli_select_db($miconexion, $bdd) or die (mysqli_connect_error());
/*Este comando hace que sea obligatorio el empleo de ese código para poder ejecutar, el INCLUDE NO*/
$query_recordset1 = "SELECT * FROM ingresos";/* selección todos los campos */
$recordset = mysqli_query($miconexion, $query_recordset1) or die (mysqli_connect_error());
/* asociaremos a un array la consulta que acabamos de realizar para que nos muestre todas las entradas de la bdd*/
$row_filas = mysqli_fetch_assoc($recordset); 
//echo mysqli_num_rows($miconexion, $recordset);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listado ingresos</title>
</head>
<link href="css/bootstrap.min.css" rel="stylesheet">

<body>
<h1>LISTADO INGRESOS</h1>
    <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Nº Ingreso</th>
      <th>Fecha Ingreso</th>
      <th>Fecha Alta</th>
      <th>Planta</th>
      <th>Cama</th>
      <th>Alergico</th>
      <th>Diagnostico</th>
      <th>Coste</th>
      <th>Nº Historial</th>
      <th>Nº Colegiado</th>
    </tr>
  </thead>

<?php 
$iteracion= 0; //control de fila en la que estamos


do /* con el "do" repite la operación */{ 
if ($iteracion%2==0){$clase= "active";} else {$clase= "";}
    ?>
  <tbody>
    <tr class= <?php echo '"'.$clase.'"'; ?>>
      <td><?php echo $row_filas['Num_Ingreso']; ?></td>
          
      <td ><?php echo $row_filas['FIngreso']; ?></td>
    
      <td><?php echo $row_filas['FAlta']; ?></td>
      <td><?php echo $row_filas['Planta']; ?></td>
          
      <td><?php echo $row_filas['Cama']; ?></td>
          
      <td><?php echo $row_filas['Alergico']; ?></td>
      <td><?php echo $row_filas['Diagnostico']; ?></td>
      <td><?php echo $row_filas['Coste']; ?></td>
      <td><?php echo $row_filas['Num_Historial']; ?></td>
      <td><?php echo $row_filas['Num_Colegiado']; ?></td>
    </tr>
  <?php 
$iteracion++;
  } while /*Mientras hayan registros en el array*/ ($row_filas = mysqli_fetch_assoc ($recordset));?>  
</table>
<!--<form name="form1" method="post" action="eliminar.php">
    <label for="id"></label>
    <input type="text" name="id" id="id">
    <input type="submit" name="button" id="button" value="Eliminar" />
 </form>-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php 
mysqli_free_result($recordset);
mysqli_close($miconexion);
?>