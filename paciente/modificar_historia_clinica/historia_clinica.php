<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="estilo.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php

 class historia_clinica
 {
	 //Atributos
	  private $cedula;
	  private $antecedentes;
	  private $observaciones;
	  
	   //Métodos
	  
	  public function __construct($cedula, $antecedentes, $observaciones) 
	    {
			$this->cedula = $cedula;
     		$this->antecedentes = $antecedentes;
			$this->observaciones = $observaciones;
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
		 {
			  echo " <br><h1> </h1><br>
	<form  class='form-register'>
    <h2 class='form__titulo'> Cédula Incorrecta!!! </h2>
    <div class='contenedor-inputs'>      
    <a class='btn-enviar'  href='..\index.php'>Salir</a>
	<a class='btn-enviar'  href='javascript:history.back(-1);' title='Ir la página anterior'>Volver</a></div></form>";
				 return false;
		return false;
		}
	
}
    
	
	public function buscar_historia_clínica_para_modificar()
		{
			include 'conectar.php';
			 $registros = mysql_query("select pacientes.cedula from pacientes where pacientes.cedula='$this->cedula'",$conexion)or die 
			("Problemas en el select:" .mysql_error());
			
			if($reg=mysql_fetch_array($registros))
			 {
			   $registrohistoria = mysql_query("select historiaclinica.cedula, antecedentespatologicos, observaciones from historiaclinica where  historiaclinica.cedula='$this->cedula'",$conexion)or die 
			   ("Problemas en el select:" .mysql_error());
			
			if($reg2=mysql_fetch_array($registrohistoria))
			{
				$cedulahisto=$reg2['cedula'];
				//$antecedentehisto=$reg2['antecedentespatologicos'];
				//$observacioneshisto=$reg2['observaciones'];
				header("Location: modificar__historia_clinica.php?cedu=$cedulahisto");
			}
			else 
			 {
				  echo " <br><h1> </h1><br>
	<form  class='form-register'>
    <h2 class='form__titulo'> No existe historia clínica para ese paciente!!! </h2>
    <div class='contenedor-inputs'>      
    <a class='btn-enviar'  href='..\index.php'>Salir</a>
	<a class='btn-enviar'  href='javascript:history.back(-1);' title='Ir la página anterior'>Volver</a></div></form>";
			 
				 
				 }

			 }
			    
				 else
				   echo " <br><h1> </h1><br>
	<form  class='form-register'>
    <h2 class='form__titulo'> No existe ningún paciente con ese número de cédula!!! </h2>
    <div class='contenedor-inputs'>      
    <a class='btn-enviar'  href='..\index.php'>Salir</a>
	<a class='btn-enviar'  href='javascript:history.back(-1);' title='Ir la página anterior'>Volver</a></div></form>";
				 
				 
		   
	       
		   
		
			}
	
	  public function ingreso_de_historia_clinica()
	    {
		   include 'conectar.php';
		   
		   $registros = mysql_query("select pacientes.cedula from pacientes where pacientes.cedula='$this->cedula'",$conexion)or die 
			("Problemas en el select:" .mysql_error());
			
			if($reg=mysql_fetch_array($registros))
			 {
			   $registrohistoria = mysql_query("select historiaclinica.cedula from historiaclinica where  historiaclinica.cedula='$this->cedula'",$conexion)or die 
			("Problemas en el select:" .mysql_error());
			 if($reg2=mysql_fetch_array($registrohistoria))
			   {
				    echo " <br><h1> </h1><br>
	<form  class='form-register'>
    <h2 class='form__titulo'> El paciente ya tiene registrada su historia clínica!!! </h2>
    <div class='contenedor-inputs'>      
    <a class='btn-enviar'  href='..\index.php'>Salir</a>
	<a class='btn-enviar'  href='javascript:history.back(-1);' title='Ir la página anterior'>Volver</a></div></form>";
				   
				   }
		      else
			   {
			  
			   mysql_query("INSERT INTO historiaclinica(CEDULA, ANTECEDENTESPATOLOGICOS, OBSERVACIONES) VALUES ('$this->cedula', '$this->antecedentes', '$this->observaciones')"	   
		              ,$conexion)or die ("Problemas en el select".mysql_error());
					  mysql_close($conexion);
					    echo " <br><h1> </h1><br>
	<form  class='form-register'>
    <h2 class='form__titulo'> Historia Clínica Registrada!!! </h2>
    <div class='contenedor-inputs'>      
    <a class='btn-enviar'  href='..\index.php'>Salir</a>
	<a class='btn-enviar'  href='javascript:history.back(-1);' title='Ir la página anterior'>Volver</a></div></form>";
			   }
			 }
 		   else 
		     {
				 
				   echo " <br><h1> </h1><br>
	<form  class='form-register'>
    <h2 class='form__titulo'> No existe ningún paciente con ese número de cédula!!! </h2>
    <div class='contenedor-inputs'>      
    <a class='btn-enviar'  href='..\index.php'>Salir</a>
	<a class='btn-enviar'  href='javascript:history.back(-1);' title='Ir la página anterior'>Volver</a></div></form>";
				 
				 }
		   
	       
		   
		   
		}
	  
	
	
	 
	 
	 
	 
	 
	 
	 
	 
	 }
$historia_clinica = new historia_clinica($_REQUEST['ced_buscar'],"","");
  if($historia_clinica->validacion_cedula()) 
   $historia_clinica->buscar_historia_clínica_para_modificar();
 
 /*$historia_clinica = new historia_clinica($_REQUEST['txtcedula'],$_REQUEST['txareapatologicos'],$_REQUEST['txareaobservaciones']);
 if($historia_clinica->validacion_cedula()) 
  $historia_clinica->ingreso_de_historia_clinica();
*/
?>
</body>
</html>