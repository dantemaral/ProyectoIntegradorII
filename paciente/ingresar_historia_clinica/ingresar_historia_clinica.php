<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ingreso de Historia Clínica</title>
<link href="estilo.css" rel="stylesheet" type="text/css" />
</head>

<body>
 <br><h1> Ingreso de Historia Clínica </h1> <br>
<form action="historia_clinica.php" method="post" class="form-register">
    <h2 class="form__titulo"> Ingresar de Datos de la Historia Clínica </h2>
    <div class="contenedor-inputs">
    <!--<h3 class="input-30">Usuario</h3>
    <input type="text" placeholder="Nombre de Usuario" name="txtusuario" class="input-70" required>
    -->
    
    <h3 class="input-30">Cédula de Paciente</h3>
    <input type="text" placeholder="  'Ejemplo: 175645588-5'" maxlength="11" minlength="11" name="txtcedula" class="input-70" required>
        
        
     <h3 class="input-30">Antecedentes Patológicos</h3>
    <textarea name="txareapatologicos" class="input-100" rows="10" cols="40" wrap="soft" placeholder="Antecedentes Patológicos" required></textarea>

     <h3 class="input-30">Observaciones</h3>
     <textarea name="txareaobservaciones" class="input-100" rows="10" cols="40" wrap="soft" placeholder="Observaciones" required></textarea>
    <input type="submit" value="Guardar" class="btn-enviar">
     <a class="btn-enviar"  href="..\index.php">  Salir  </a>
    
    </div>
</form>    
</body>
</html>