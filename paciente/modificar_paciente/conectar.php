<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>



<?php
$conexion=mysql_connect("localhost","root","")or die
	("Problema en la conexión");


    mysql_select_db("dbconsultorio", $conexion)or die 
	("Problema en la selección de la base de datos");

?>
</body>
</html>