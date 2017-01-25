<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro de Paciente</title>
<link href="estilo_registro.css" rel="stylesheet" type="text/css" />
</head>

<body>
 <br><h1> Registro de Paciente </h1> <br>
<form action="paciente.php" method="post" class="form-register">
    <h2 class="form__titulo"> Ingresar Datos del Paciente </h2>
    <div class="contenedor-inputs">
    <!--<h3 class="input-30">Usuario</h3>
    <input type="text" placeholder="Nombre de Usuario" name="txtusuario" class="input-70" required>
    -->
    
    <h3 class="input-30">Número de Cédula</h3>
    <input type="text" placeholder="Ejemplo: 175645588-5" maxlength="11" minlength="11" name="txtcedula" class="input-70" required>
        
        
    <h3 class="input-30">Email</h3>       
    <input type="email" placeholder="E-mail" name="txtemail" class="input-70" required>
    
    <h3 class="input-30">Contraseña</h3>
    <input type="password" placeholder="Contraseña" name="txtclave" class="input-70" required>
    
    <h3 class="input-30">Nombres</h3>    
    <input type="text" placeholder="Nombres" name="txtnombre" class="input-70" required>
    <h3 class="input-30">Apellidos</h3>
    <input type="text" placeholder="Apellidos" name="txtapellidos" class="input-70" required>
    <h3 class="input-30">Fecha de Nacimiento</h3>    
    <input type="date" placeholder="Fecha de Nacimiento" name="datfecha" class="especiales-70" required>
    <br>
        <h3 class="input-30">Sexo</h3>    
    <select  name="listsexo" aria-disabled="true" class="especiales-70" required>
        <option>Masculino</option>
        <option>Femenino</option>
   </select>      
        
        
    <h3 class="input-30">Género</h3>    
    <select  name="listgenero" aria-disabled="true" class="especiales-70" required>
        <option>Heterosexual</option>
        <option>Transexual</option>
        <option>Bisexual</option>
        <option>Homosexual</option>
   </select>  
    
    <h3 class="input-30">Dirección</h3>
    <input type="text" placeholder="Dirección Domiciliaria" name="txtdireccion" class="input-70" required>
        
    <h3 class="input-30">Teléfono</h3>
    <input type="tel" maxlength="10" placeholder="Número de Teléfono" name="txttelefono" class="input-70" required>
     <h3 class="input-30">Grupo Prioritario</h3>    
    <select  name="listgrupoprioritario" aria-disabled="true" class="especiales-70" required>
        <option>Ninguno</option>
        <option>Adulto Mayor</option>
        <option>Discapacitado</option>
        <option>Niño</option>
        <option>Embarazada</option>
   </select>
    <input type="submit" value="Registrar" class="btn-enviar">
     <a class="btn-enviar"  href="..\index.php">  Salir  </a>

    <p class="form__link"> ¿Ya tienes una cuenta? <a href="..\login.php">Ingresa Aquí</a> </p>
    </div>

</form>    
</body>
</html>