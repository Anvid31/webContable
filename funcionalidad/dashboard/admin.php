<?php
// Archivo de conexión a la base de datos
include('conexion.php');

// Crear conexión a la base de datos
$conexion = oci_connect("grupo04", "1234", "localhost/orcl");

// Verificar la conexión
if (!$conexion) {
    $m = oci_error();
    echo $m['message'], "\n";
    exit;
} else {
    echo "Base de datos conectada\n";
}

// Consulta para obtener información de empleados
$query = "SELECT * FROM EMPLEADOS";
$stmt = oci_parse($conexion, $query);
oci_execute($stmt);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
            <li>
                    <a href="#">
                        <span class="icon">
                            <img src="https://i.ibb.co/rsfgshT/lavid1.png" alt="Brand Logo">
                        </span>
                        <span class="title">PANEL</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Customers</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Help</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cardName">Daily Views</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Sales</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Comments</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">$7,842</div>
                        <div class="cardName">Earning</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

  <!-- ================ Detalles de Pedidos ================= -->
<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>Últimas Solicitudes de Catering</h2>
            <a href="#" class="btn">Ver Todas</a>
        </div>

        <table>
            <thead>
                <tr>
                    <td>Evento</td>
                    <td>Total</td>
                    <td>Pago</td>
                    <td>Estado</td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Boda de Juan y María</td>
                    <td>$2500</td>
                    <td>Pagado</td>
                    <td><span class="status delivered">Confirmado</span></td>
                </tr>

                <tr>
                    <td>Fiesta de Cumpleaños</td>
                    <td>$800</td>
                    <td>Pendiente</td>
                    <td><span class="status pending">En Revisión</span></td>
                </tr>

                <tr>
                    <td>Evento Corporativo</td>
                    <td>$3500</td>
                    <td>Pagado</td>
                    <td><span class="status return">Cancelado</span></td>
                </tr>

                <tr>
                    <td>Reunión Familiar</td>
                    <td>$1200</td>
                    <td>Pendiente</td>
                    <td><span class="status inProgress">En Preparación</span></td>
                </tr>

                <tr>
                    <td>Boda de Juan y María</td>
                    <td>$2500</td>
                    <td>Pagado</td>
                    <td><span class="status delivered">Confirmado</span></td>
                </tr>

                <tr>
                    <td>Fiesta de Cumpleaños</td>
                    <td>$800</td>
                    <td>Pendiente</td>
                    <td><span class="status pending">En Revisión</span></td>
                </tr>

                <tr>
                    <td>Evento Corporativo</td>
                    <td>$3500</td>
                    <td>Pagado</td>
                    <td><span class="status return">Cancelado</span></td>
                </tr>

                <tr>
                    <td>Reunión Familiar</td>
                    <td>$1200</td>
                    <td>Pendiente</td>
                    <td><span class="status inProgress">En Preparación</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

                <!-- ================= New Customers ================ -->

                <div class="recentCustomers">
    <div class="cardHeader">
        <h2>Información de Empleados</h2>
    </div>

    <table border="1">
        <tr>
            <th>ID_EMPLEADO</th>
            <th>CEDULA</th>
            <th>NOMBRE</th>
            <th>APELLIDO1</th>
            <th>APELLIDO2</th>
            <th>DIRECCION</th>
            <th>FECHAINGRESO</th>
            <th>ID_PUESTO</th>
            <th>SALARIO</th>
            <th>ESTADO</th>
            <th>ROL</th>
            <th>CONTRASENA</th>
        </tr>

        <?php
        // Recorrer los resultados y mostrar cada fila en la tabla HTML
        while ($row = oci_fetch_assoc($stmt)) {
            echo "<tr>";
            echo "<td>{$row['ID_EMPLEADO']}</td>";
            echo "<td>{$row['CEDULA']}</td>";
            echo "<td>{$row['NOMBRE']}</td>";
            echo "<td>{$row['APELLIDO1']}</td>";
            echo "<td>{$row['APELLIDO2']}</td>";
            echo "<td>{$row['DIRECCION']}</td>";
            echo "<td>{$row['FECHAINGRESO']}</td>";
            echo "<td>{$row['ID_PUESTO']}</td>";
            echo "<td>{$row['SALARIO']}</td>";
            echo "<td>{$row['ESTADO']}</td>";
            echo "<td>{$row['ROL']}</td>";
            echo "<td>{$row['CONTRASENA']}</td>";
            echo "</tr>";
        }
        ?>

    </table>
</div>

<?php
// Cierra la conexión al final del script
oci_close($conexion);
?>

            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>