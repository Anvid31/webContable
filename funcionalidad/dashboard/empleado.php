<?php

// Incluir el archivo de conexión a la base de datos
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

session_start();
if (isset($_SESSION['rol'])) {
    $rol = $_SESSION['rol'];

    if ($rol === '1') {
        header("Location: ../validaciones/login.php");
        oci_close($conexion);

    } elseif ($rol === '2') {
        header("Location: ../validaciones/login.php");
        oci_close($conexion);
        

    } elseif ($rol === '3') {
        
        include 'subpaginas/empleado.php';
    }
  } else {
    // Si no hay sesión iniciada o no se ha establecido un rol, redirecciona al formulario de inicio de sesión
    header("Location: ../validaciones/login.php");
    exit();
}