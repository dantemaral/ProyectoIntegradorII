<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php
include 'conectar.php';
$registroslista = mysql_query("select cedula, antecedentespatologicos, observaciones from historiaclinica",$conexion)or die 
			("Problemas en el select:" .mysql_error());
$registro = mysql_query("select cedula, antecedentespatologicos, observaciones from historiaclinica",$conexion)or die 
			("Problemas en el select:" .mysql_error());
		if($reg=mysql_fetch_array($registro))
		    {
			while($regi=mysql_fetch_array($registroslista))
					{
						
					          echo "datos".$regi['cedula']."anrecedentes: ".$regi['antecedentespatologicos']."obersvaciones: ".$regi['observaciones']."<br>";
							}
			 }
			 else
			 {
	          echo "no hay historias clínicas";
					
			 }
				
				
   
?>
</body>
</html>