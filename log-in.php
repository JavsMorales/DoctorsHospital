<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Log-in</title>
</head>
<body>
	<?php
		session_start();
			if ($_POST['user'] == "Javi" && $_POST['pass'] == "1234") {
			$_session['autorizado'] = true;
			header ("Location: listadoMedicos.php");}
			else {
			header ("Location: listadoPublicoMedicos.php");
				}
	?>
</body>
</html>