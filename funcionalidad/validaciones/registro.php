<?php
include('conexion.php');

// Crear conexión
$conexion = oci_connect("grupo04", "1234", "localhost/orcl");

if (!$conexion) {
    $m = oci_error();
    echo $m['message'], "\n";
    exit;
} else {
    echo "Base de datos conectada\n";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recuperar datos del formulario
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $direccion = $_POST['direccion'];
    $tipo_dieta = $_POST['tipo_dieta'];
    $alergia = $_POST['alergia'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT); // Hashear la contraseña

    // Validar que el tipo_dieta existe en la tabla TIPO_DIETA
    $queryValidarTipoDieta = "SELECT COUNT(*) AS COUNT FROM GRUPO04.TIPO_DIETA WHERE ID_DIETA = :tipo_dieta";
    $stmtValidarTipoDieta = oci_parse($conexion, $queryValidarTipoDieta);
    oci_bind_by_name($stmtValidarTipoDieta, ":tipo_dieta", $tipo_dieta);
    oci_execute($stmtValidarTipoDieta);

    $rowValidarTipoDieta = oci_fetch_assoc($stmtValidarTipoDieta);
    $countTipoDieta = $rowValidarTipoDieta['COUNT'];

    if ($countTipoDieta === '0') {
        echo "Error: El tipo de dieta seleccionado no existe.";
        oci_close($conexion);
        exit;
    }

    // Iniciar transacción
    oci_commit($conexion);

    // Insertar en la tabla CLIENTES
    $queryCliente = "INSERT INTO GRUPO04.CLIENTES (ID_CLIENTE, CEDULA, NOMBRE, APELLIDO1, APELLIDO2, DIRECCION, TIPO_DIETA, ALERGIA, ESTADO, ROL, CORREO, TELEFONO, CONTRASENA) 
    VALUES (SEQ_CLIENTES.NEXTVAL, :cedula, :nombre, :apellido1, :apellido2, :direccion, :tipo_dieta, :alergia, 1, 1, :correo, :telefono, :contrasena) RETURNING ID_CLIENTE INTO :idCliente";

    $stmtCliente = oci_parse($conexion, $queryCliente);

    oci_bind_by_name($stmtCliente, ":cedula", $cedula);
    oci_bind_by_name($stmtCliente, ":nombre", $nombre);
    oci_bind_by_name($stmtCliente, ":apellido1", $apellido1);
    oci_bind_by_name($stmtCliente, ":apellido2", $apellido2);
    oci_bind_by_name($stmtCliente, ":direccion", $direccion);
    oci_bind_by_name($stmtCliente, ":tipo_dieta", $tipo_dieta);
    oci_bind_by_name($stmtCliente, ":alergia", $alergia);
    oci_bind_by_name($stmtCliente, ":correo", $correo);
    oci_bind_by_name($stmtCliente, ":telefono", $telefono);
    oci_bind_by_name($stmtCliente, ":contrasena", $contrasena);
    oci_bind_by_name($stmtCliente, ":idCliente", $idCliente, 32);

    $executeCliente = oci_execute($stmtCliente, OCI_DEFAULT);

    if (!$executeCliente) {
        // Rollback en caso de error
        oci_rollback($conexion);

        $e = oci_error($stmtCliente);
        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    }

    // Confirmar la transacción
    oci_commit($conexion);

    echo "Registro exitoso. Ahora puedes iniciar sesión.";
}

oci_close($conexion);
?>
