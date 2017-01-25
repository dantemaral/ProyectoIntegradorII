<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="busqueda_eliminar.css" rel="stylesheet" type="text/css" />
</head>

<body>


<?php
$car=$_REQUEST['cedu'];

include 'conectar.php' ;
mysql_query("delete from pacientes where pacientes.cedula='$car'",$conexion) or die ("Problemas en el borrado:".mysql_error());		
				mysql_query("delete from personas where personas.cedula='$car'",$conexion) or die ("Problemas en el borrado:".mysql_error());	
				echo " <br><h1> </h1><br>
	<form  class='form-register'>
    <h2 class='form__titulo'> Paciente Eliminado !!! </h2>
    <div class='contenedor-inputs'>      

    <a class='btn-enviar'  href='..\index.php'>Salir</a></div></form>";


?>
</body>
</html>