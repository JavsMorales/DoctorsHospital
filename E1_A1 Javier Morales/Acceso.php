<?php
include 'conexion.php';
/*Este comando hace que sea obligatorio el empleo de ese código para poder ejecutar, el INCLUDE NO*/
$query_recordset1 = "SELECT * FROM ingresos";/* selección todos los campos */
$recordset = mysqli_query($miconexion, $query_recordset1) or die (mysqli_connect_error());
/* asociaremos a un array la consulta que acabamos de realizar para que nos muestre todas las entradas de la bdd*/
$row_filas = mysqli_fetch_assoc($recordset); 
//echo mysqli_num_rows($miconexion, $recordset);
include 'Header.php';
?>
<div class="container">
    <div class="row">
	    <div class="jumbotron">
			<div class="form-group has-success">
	 			 <label class="control-label" for="inputSuccess">
	 			 	<h3>Por favor introduzca usuario y contraseña</h3>
	 			 </label>
	  					
	  					<form method="post" name="envio" action="Login.php">
							<div class="panel panel-success">
							    <div class="panel-body">
								    <div class="col-sm-4">
										<p class="text-info">Usuario:   </p>
											<input name="user" type="text" value="" class="form-control" id="inputSuccess"/><br>
									</div>	
							  </div>
							  <div class="panel-body">
							    <div class="col-sm-4">
										<p class="text-info">Contraseña:</p>
											<input name="pwd" type="text" value="" class="form-control" id="inputSuccess"/><br>
								</div>
							  </div>
							  <div class="panel-body">
							    <div class="col-sm-2">
									<input value="Enviar" type="submit" class="btn btn-success"/>
								</div>
							  </div>
							</div>
						</form>
						
			</div>

		</div>
	</div>	
</div>
<?php
include 'Footer.php';
mysqli_close($miconexion);
?>
