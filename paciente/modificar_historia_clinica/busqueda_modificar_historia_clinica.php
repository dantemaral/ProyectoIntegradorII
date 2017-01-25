<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscar Historia Clínica por Número de Cédula de Paciente</title>
    <link rel="stylesheet"  href="estilo.css" >
</head>
<body>
 <br><h1> Modificar datos de Historia Clínica  </h1> <br>
<form action="historia_clinica.php" method="post" class="form-register">
    <h2 class="form__titulo"> Modificar Historia Clínica </h2>
    <div class="contenedor-inputs"> 
    
    <h3 class="input-30">Número de Cédula</h3>
    
        <input type="text" name="ced_buscar" class="input-70" maxlength="11" minlength="11" required>

    <input type="submit" value="Buscar" class="btn-enviar">
<a class='btn-enviar'  href='..\index.php'>Salir</a>
    
    </div>
</form>    
    
</body>


</html>