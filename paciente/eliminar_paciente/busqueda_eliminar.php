<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> Buscar Paciente por Número de Cédula</title>
    <link rel="stylesheet" href="busqueda_eliminar.css">

</head>
<body>


 <br><h1> Eliminar datos de los Pacientes  </h1> <br>
<form action="paciente.php" method="post" class="form-register">
    <h2 class="form__titulo"> Eliminar Pacientes </h2>
    <div class="contenedor-inputs"> 
    
    <h3 class="input-30">Número de Cédula</h3>
    
        <input type="text" name="ced_buscar" class="input-70" maxlength="11" minlength="11" required >

    <input type="submit" value="Buscar" class="btn-enviar">
    <a class='btn-enviar'  href='..\index.php'>Salir</a>

</form>    

</body>


</html>