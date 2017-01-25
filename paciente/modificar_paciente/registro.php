<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro de Paciente</title>
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
 <br><h1> Registro de Paciente </h1> <br>
<form action="pacienteactualizacion.php" method="post" class="form-register">
    <h2 class="form__titulo"> Ingresar Datos del Paciente </h2>
    <div class="contenedor-inputs">
    <!--<h3 class="input-30">Usuario</h3>
    <input type="text" placeholder="Nombre de Usuario" name="txtusuario" class="input-70" required>
    -->
    
    <h3 class="input-30">Número de Cédula</h3>
    <p class="input-70"><?php  echo"".$cedula."" ?></p>
    <input type="hidden" name="txtcedula" value="<?php echo"".$cedula."";?>">
        
        
    <h3 class="input-30">Email</h3>       
    <input type="email" placeholder="E-mail" name="txtemail" class="input-70" value="<?php echo"".$correo."";?>" required>
    
    <h3 class="input-30">Contraseña</h3>
    <input type="password" placeholder="Contraseña" name="txtclave" class="input-70" value="<?php echo"".$contrasena."";?>" required>
    
    <h3 class="input-30">Nombres</h3>    
    <input type="text" placeholder="Nombres" name="txtnombre" class="input-70" value="<?php echo"".$nombres."";?>" required>
    <h3 class="input-30">Apellidos</h3>
    <input type="text" placeholder="Apellidos" name="txtapellidos" class="input-70" value="<?php echo"".$apellidos."";?>" required>
    <h3 class="input-30">Fecha de Nacimiento</h3>    
    <input type="date" placeholder="Fecha de Nacimiento" name="datfecha" class="especiales-70" value="<?php echo"".$fecha_nac."";?>" required>
    <br>
        <h3 class="input-30">Sexo</h3>    
    <select  name="listsexo" aria-disabled="true" class="especiales-70" required>
        <option <?php if ($sexo == "Masculino") { echo "selected"; } ?>>Masculino</option>
        <option  <?php if ($sexo == "Femenino") { echo "selected"; } ?>>Femenino</option>
   </select>      
        
        
    <h3 class="input-30">Género</h3>    
    <select  name="listgenero" aria-disabled="true" class="especiales-70" required>
        <option <?php if ($genero == "Heterosexual") { echo "selected"; } ?>>Heterosexual</option>
        <option <?php if ($genero == "Transexual") { echo "selected"; } ?>>Transexual</option>
        <option <?php if ($genero == "Bisexual") { echo "selected"; } ?>>Bisexual</option>
        <option <?php if ($genero == "Homosexual") { echo "selected"; } ?>>Homosexual</option>
   </select>  
    
    <h3 class="input-30">Dirección</h3>
    <input type="text" placeholder="Dirección Domiciliaria" name="txtdireccion" class="input-70" value="<?php echo"".$direccion."";?>" required>
        
    <h3 class="input-30">Teléfono</h3>
    <input type="tel" maxlength="10" placeholder="Número de Teléfono" name="txttelefono" class="input-70" value="<?php echo"".$telefono."";?>" required>
     <h3 class="input-30">Grupo Prioritario</h3>    
    <select  name="listgrupoprioritario" aria-disabled="true" class="especiales-70" required>
        <option <?php if ($grupo_prioritario == "Ninguno") { echo "selected"; } ?>>Ninguno</option>
        <option <?php if ($grupo_prioritario == "Adulto Mayor") { echo "selected"; } ?>>Adulto Mayor</option>
        <option <?php if ($grupo_prioritario == "Discapacitado") { echo "selected"; } ?>>Discapacitado</option>
        <option <?php if ($grupo_prioritario == "Niño") { echo "selected"; } ?>>Niño</option>
        <option <?php if ($grupo_prioritario == "Embarazada") { echo "selected"; } ?>>Embarazada</option>
   </select>  
    
    <input type="submit" value="Actualizar" class="btn-enviar">
    <a class='btn-enviar'  href='..\index.php'>Salir</a>
    <!--<p class="form__link"> ¿Ya tienes una cuenta? <a href="login.html">Ingresa Aquí</a> </p>-->
    </div>
</form>    
</body>
</html>