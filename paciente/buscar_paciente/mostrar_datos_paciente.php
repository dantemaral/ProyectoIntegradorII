<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mostrar Datos de Paciente</title>
<link href="estilo_registro.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
$cedula = $_GET['cedu'];
$nombres = $_GET['nom'];
$apellidos = $_GET['apell'];
$fecha_nac = $_GET['fechanac'];
$telefono = $_GET['tel'];
$sexo = $_GET['sex'];
$genero = $_GET['gene'];
$direccion = $_GET['direc'];
$correo = $_GET['corre'];
$contrasena = $_GET['pass'];
$grupo_prioritario = $_GET['grupo'];
?>
 <br><h1> Datos de Paciente </h1> <br>
<form action="pacienteactualizacion.php" method="post" class="form-register">
    <h2 class="form__titulo">  Datos del Paciente </h2>
    <div class="contenedor-inputs">
    <!--<h3 class="input-30">Usuario</h3>
    <input type="text" placeholder="Nombre de Usuario" name="txtusuario" class="input-70" required>
    -->
    
    <h3 class="input-30">Número de Cédula</h3>
    <p class="input-70"><?php  echo"".$cedula."" ?></p>
    <input type="hidden" name="txtcedula" value="<?php echo"".$cedula."";?>">
        
        
    <h3 class="input-30">Email</h3>       
   <p class="input-70"><?php  echo"".$correo."" ?></p>
    
   
    
    <h3 class="input-30">Nombres</h3>   
     <p class="input-70"><?php  echo"".$nombres."" ?></p>
   
    <h3 class="input-30">Apellidos</h3>
    <p class="input-70"><?php  echo"".$apellidos."" ?></p>
    
    <h3 class="input-30">Fecha de Nacimiento</h3>    
    <p class="input-70"><?php  echo"".$fecha_nac."" ?></p>
    
    <h3 class="input-30">Sexo</h3>
     <p class="input-70"><?php  echo"".$sexo."" ?></p>
        
        
    <h3 class="input-30">Género</h3>    
    <p class="input-70"><?php  echo"".$genero."" ?></p>
    
   
    
    <h3 class="input-30">Dirección</h3>
    <p class="input-70"><?php  echo"".$direccion."" ?></p>
    
        
    <h3 class="input-30">Teléfono</h3>
     <p class="input-70"><?php  echo"".$telefono."" ?></p>
    
   
     <h3 class="input-30">Grupo Prioritario</h3>  
      <p class="input-70"><?php  echo"".$grupo_prioritario."" ?></p>
      
    
    
   <a class="btn-enviar"  href="..\index.php">  Salir  
   <a class="btn-enviar"  href="javascript:history.back(-1);"title="Ir la página anterior">Volver</a>
    <!--<p class="form__link"> ¿Ya tienes una cuenta? <a href="login.html">Ingresa Aquí</a> </p>-->
    </div>
</form>    
</body>
</html>