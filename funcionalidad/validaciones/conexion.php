<!DOCTYPE HTML>
<meta charset="utf-8" />
<?php  
// crear conexión con Oracle
$conexion = oci_connect("grupo04", "1234", "localhost/orcl"); 
 
if (!$conexion) {    
  $m = oci_error();    
  echo $m['message'], "\n";    
  exit; 
} else {    
  echo "base de datos conectada"; 
} 
 
// Cierra la conexión al final del script
oci_close($conexion);
?>
