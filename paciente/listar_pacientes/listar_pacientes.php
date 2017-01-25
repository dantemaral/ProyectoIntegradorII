<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>



<?php
include 'conectar.php';
			$registroslista = mysql_query("select personas.cedula,nombres,apellidos,fecha_nacimiento,telefono,sexo,genero,direccion,correo,edad, grupo_prioritario from personas inner join pacientes on personas.cedula=pacientes.cedula ",$conexion)or die 
			("Problemas en el select:" .mysql_error());
			$registros = mysql_query("select personas.cedula,nombres,apellidos,fecha_nacimiento,telefono,sexo,genero,direccion,correo,edad, grupo_prioritario from personas inner join pacientes on personas.cedula=pacientes.cedula ",$conexion)or die 
			("Problemas en el select:" .mysql_error());
			if($reg=mysql_fetch_array($registros))
		    {
			while($regi=mysql_fetch_array($registroslista))
					{
						
					          echo "Datos:"."Cedula".$regi['cedula']."nombres: ".$regi['nombres']."apellidos: "
							  .$regi['apellidos']."fecha_nacimiento:".$regi['fecha_nacimiento']."telefono".$regi['telefono']."sexo:".$regi['sexo']."genero:".$regi['genero']."direccion:".$regi['direccion']."correo:".$regi['correo']."edad:".$regi['edad']."grupo_prioritario".$regi['grupo_prioritario']."<br>";
							}
			 }
			 else
			 {
	          echo "no hay pacientes";
					
			 }



?>
</body>
</html>