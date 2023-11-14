<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recuperar datos del formulario
    $cedula = $_POST['cedula'];
    $password = $_POST['contrasena'];

    // Crear conexión a la base de datos
    $conexion = oci_connect("grupo04", "1234", "localhost/orcl");

    if (!$conexion) {
        $m = oci_error();
        echo $m['message'], "\n";
        exit;
    } else {
        echo "Base de datos conectada\n";
    }

    // Consultar la contraseña almacenada en la tabla CLIENTES
    $queryClientes = "SELECT ID_CLIENTE, CONTRASENA FROM GRUPO04.CLIENTES WHERE CEDULA = :cedula";
    $stmtClientes = oci_parse($conexion, $queryClientes);
    
    // Vincular parámetro
    oci_bind_by_name($stmtClientes, ":cedula", $cedula);

    oci_execute($stmtClientes);

    // Verificar la contraseña en la tabla CLIENTES
    if ($rowClientes = oci_fetch_assoc($stmtClientes)) {
        if ($password === $rowClientes['CONTRASENA']) {
            // La contraseña es correcta, iniciar sesión como Cliente
            session_start();
            $_SESSION['idCliente'] = $rowClientes['ID_CLIENTE'];
            $_SESSION['rol'] = 2; // Rol 2 para Cliente
            header("Location: ../dashboard/cliente.php");
                exit;
        } else {
            echo "Contraseña incorrecta. Intenta nuevamente.";
        }
    } else {
   // Si no se encuentra en ninguna tabla de CLIENTES ni EMPLEADOS, buscar en la tabla de ADMINISTRADOR
          $queryEmpleados = "SELECT ID_EMPLEADO, CONTRASENA FROM GRUPO04.EMPLEADOS WHERE CEDULA = :cedula";
                $stmtEmpleados = oci_parse($conexion, $queryEmpleados);
                        
                // Vincular parámetro
                oci_bind_by_name($stmtEmpleados, ":cedula", $cedula);
                oci_execute($stmtEmpleados);
            
            // Verificar la contraseña en la tabla ADMINISTRADOR
          if ($rowEmpleados = oci_fetch_assoc($stmtEmpleados)) {
            if ($password === $rowEmpleados['CONTRASENA']) {
              // La contraseña es correcta, iniciar sesión como Administrador
             session_start();
               $_SESSION['idAdmin'] = $rowEmpleados['ID_EMPLEADO'];
               $_SESSION['rol'] = 3; // Rol 1 para Administrador
               header("Location: ../dashboard/empleado.php");
                exit;
               } else {
                                echo "Contraseña incorrecta. Intenta nuevamente.";
              }

        } else {
            // Si no se encuentra en ninguna tabla de CLIENTES ni EMPLEADOS, buscar en la tabla de ADMINISTRADOR
            $queryAdmin = "SELECT ID_ADMINISTRADOR, CONTRASENA FROM GRUPO04.ADMINISTRADOR WHERE CEDULA = :cedula";
            $stmtAdmin = oci_parse($conexion, $queryAdmin);
            
            // Vincular parámetro
            oci_bind_by_name($stmtAdmin, ":cedula", $cedula);

            oci_execute($stmtAdmin);

            // Verificar la contraseña en la tabla ADMINISTRADOR
            if ($rowAdmin = oci_fetch_assoc($stmtAdmin)) {
                if ($password === $rowAdmin['CONTRASENA']) {
                    // La contraseña es correcta, iniciar sesión como Administrador
                    session_start();
                    $_SESSION['idAdmin'] = $rowAdmin['ID_ADMINISTRADOR'];
                    $_SESSION['rol'] = 1; // Rol 1 para Administrador
                    header("Location: ../dashboard/admin.php");
                exit;
                } else {
                    echo "Contraseña incorrecta. Intenta nuevamente.";
                }
            } else {
                // Si no se encuentra en ninguna tabla, mostrar mensaje de error
                echo "Usuario no encontrado. Regístrate antes de iniciar sesión.";
            }
        }
    }

    oci_close($conexion);
}
?>
