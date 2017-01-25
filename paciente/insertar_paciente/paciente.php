<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="estilo_registro.css" rel="stylesheet" type="text/css" />
</head>

<body>


<?php


class paciente
  {
	  
	  //Atributos
	  private $cedula;
	  private $nombres;
	  private $apellidos;
	  private $fecha_nacimiento;
	  private $telefono;
	  private $sexo;
	  private $genero;
	  private $direccion;
	  private $correo;
	  private $edad;
	  private $grupo_prioritario;
	  private $contrasena;

	  
	  //Métodos
	  
	  public function __construct($cedula, $nombres, $apellidos, $fecha_nacimiento, $telefono, $sexo, $genero, $direccion, $correo, 
	  $edad, $grupo_prioritario, $contrasena)
	    {
			$this->cedula = $cedula;
     		$this->nombres = $nombres;
			$this->apellidos = $apellidos;
			$this->fecha_nacimiento = $fecha_nacimiento;
			$this->telefono = $telefono;
			$this->sexo = $sexo;
			$this->genero = $genero;
			$this->direccion = $direccion;
			$this->correo = $correo;
			$this->edad = $edad;
			$this->grupo_prioritario = $grupo_prioritario;
			$this->contrasena = $contrasena;
		}
	  
	  public function mostrar_datos()
	   {
		   echo "Cédula".$this->cedula."<br><br>";
   		   echo "Nombres".$this->nombres."<br><br>";
   		   echo "Apellidos".$this->apellidos."<br><br>";
		   echo "Fecha de Nacimiento".$this->fecha_nacimiento."<br><br>";
		   echo "Teléfono".$this->telefono."<br><br>";
		   echo "Sexo".$this->sexo."<br><br>";
 		   echo "Género".$this->genero."<br><br>";
   		   echo "Dirección".$this->direccion."<br><br>";
		   echo "Correo".$this->correo."<br><br>";
   		   echo "Edad".$this->edad."<br><br>";
   		   echo "Grupo Prioritario".$this->grupo_prioritario."<br><br>";
   		   echo "Contraseña".$this->contrasena."<br><br>";		   
		}
		
	//Funciones para validar cedula	
	public function validacion_provincia($cedula){
    
 
    
    if( ($cedula[0]<= 2))
       {
           if($cedula[0]== 2 && ($cedula[1] > 4) ){
            return false;
           }
           else{
            return true;   
           }
    }
    else{
        return false;
    }
       
}


public function validacion_tamaño_y_guion($cedula){
    
    
    if(count($cedula) == 11){
    
        if($cedula[9] == '-'){
            return true;
        }
        else{
            return false;
        }
        
    }
    else{
        return false;
    }
    
    
    
}



public function validacion_digito_cedula($cedula){

            
 
if( $cedula[10] == self::extraer_digito($cedula))
{
    return true;
}    
else{
	return false;
    echo "<br><br>";
    return false;
    
}        
}

public function extraer_digito($cedula){

        $decena= ceil(self::suma($cedula)/10);
        $decena *= 10;
        $digito = $decena - self::suma($cedula);
    return $digito;
    }

public function suma($cedula){
    
    $verificador = 0;
    $sumaPar = 0;
    $sumaImpar = 0;
    for($i=8; $i>=0;$i--)
        {
            $mult=0;
            if(($i+1) % 2 != 0){
                
                $mult = $cedula[$i]*2;
                if($mult > 9){
                    $sumaImpar += ($mult-9);        
                }
                else{
                    $sumaImpar += $mult;
                }
            }
            else{
              $sumaPar += $cedula[$i];  
            }
        }
    
        $verificador = $sumaPar+$sumaImpar;    
    return $verificador;
}

public function validacion_cedula(){
	
    $cedula1 = str_split($this->cedula);
     //print_r($cedula1);
    
    if( self::validacion_provincia($cedula1) && self::validacion_digito_cedula($cedula1) && self::validacion_tamaño_y_guion($cedula1))
	{
        //echo "<br> Número de cédula correcto";
        return true;
		}
		else 
		return false;
	
	
}
    
			
		
	//Método de validación de fecha de nacimiento(mayor de 18 años)
		
	 public function validar_fecha()
		 {
			list($ano,$mes,$dia) = explode("-",$this->fecha_nacimiento);
			$ano_valido = date("Y") - $ano;
			if ($ano_valido <1)
			return false;
			else 
			 return true; 
			 
		 }
     //Método para calcular edad a partir de la fecha de nacimiento para poder almacenar este dato en la base de datos
     public function calcular_edad()
		{			
      	   list($ano,$mes,$dia) = explode("-",$this->fecha_nacimiento);
	       $ano_diferencia  = date("Y") - $ano;
	       $mes_diferencia = date("m") - $mes;
	       $dia_diferencia   = date("d") - $dia;
	       if ($dia_diferencia < 0 || $mes_diferencia < 0)
		   $ano_diferencia--;
	       $this->edad= $ano_diferencia;
        }
		
		
	  //Método para tomar los datos y enviarlos hacia la base de datos
	  public function registro_paciente()
	    {
		   include 'conectar.php';
		   
		    $registro = mysql_query("select personas.cedula from personas where  personas.cedula='$this->cedula'",$conexion)or die 
			("Problemas en el select:" .mysql_error());
			
			 if($reg2=mysql_fetch_array($registro))
			 {
				  echo " <br><h1> </h1><br>
	<form  class='form-register'>
    <h2 class='form__titulo'> El Paciente ya está Registrado !!! </h2>
    <div class='contenedor-inputs'>      
    <a class='btn-enviar'  href='..\index.php'>Salir</a>
	<a class='btn-enviar'  href='javascript:history.back(-1);' title='Ir la página anterior'>Volver</a></div></form>";
				 }
			else
			{	 
		   mysql_query("INSERT INTO personas(CEDULA, NOMBRES, APELLIDOS, FECHA_NACIMIENTO, TELEFONO, SEXO, GENERO, DIRECCION, CORREO, EDAD) VALUES ('$this->cedula', '$this->nombres', '$this->apellidos', '$this->fecha_nacimiento',
		              '$this->telefono' , '$this->sexo', '$this->genero', '$this->direccion', '$this->correo', '$this->edad')"	   
		              ,$conexion)or die ("Problemas en el select".mysql_error());
		   
 		   mysql_query("INSERT INTO pacientes(CONTRASENIA, GRUPO_PRIORITARIO, CEDULA) VALUES ('$this->contrasena',
		   '$this->grupo_prioritario','$this->cedula')",$conexion) or die ("Problemas en el select".mysql_error());
		   
	       mysql_close($conexion);
		    
	echo " <br><h1> </h1><br>
	<form  class='form-register'>
    <h2 class='form__titulo'> Paciente Registrado Exitosamente !!! </h2>
    <div class='contenedor-inputs'>      
    <a class='btn-enviar'  href='..\index.php'>Salir</a>
	<a class='btn-enviar'  href='javascript:history.back(-1);' title='Ir la página anterior'>Volver</a></div></form>";
			}

		   
		}
	  
	
	
	
	
	
	}
 $edad=0;
 $paciente = new paciente($_REQUEST['txtcedula'],$_REQUEST['txtnombre'],$_REQUEST['txtapellidos'],$_REQUEST['datfecha'],$_REQUEST['txttelefono'],$_REQUEST['listsexo'], $_REQUEST['listgenero'], $_REQUEST['txtdireccion'], $_REQUEST['txtemail'],$edad, $_REQUEST['listgrupoprioritario'], $_REQUEST['txtclave']);
 if ($paciente->validacion_cedula())
 {
    if ($paciente->validar_fecha())
     {
       $paciente->calcular_edad();
       $paciente->registro_paciente();
	 
     }
    else 
      echo " <br><h1> </h1><br>
	<form  class='form-register'>
    <h2 class='form__titulo'>  Fecha de Nacimiento mal ingresada !!! </h2>
    <div class='contenedor-inputs'>      
    <a class='btn-enviar'  href='..\index.php'>Salir</a>
	<a class='btn-enviar'  href='javascript:history.back(-1);' title='Ir la página anterior'>Volver</a></div></form>";

  }
 else 
      echo " <br><h1> </h1><br>
	<form  class='form-register'>
    <h2 class='form__titulo'>  Cédula Incorrecta!!! </h2>
    <div class='contenedor-inputs'>      
    <a class='btn-enviar'  href='..\index.php'>Salir</a>
	<a class='btn-enviar'  href='javascript:history.back(-1);' title='Ir la página anterior'>Volver</a></div></form>";
?>
</body>
</html>