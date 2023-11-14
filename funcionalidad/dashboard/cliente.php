<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLIENTE DASH</title>
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
            <div class="numbers">2,345</div>
            <div class="cardName">Clientes Satisfechos</div>
        </div>

        <div class="iconBx">
            <ion-icon name="happy-outline"></ion-icon>
        </div>
    </div>

    <div class="card">
        <div>
            <div class="numbers">120</div>
            <div class="cardName">Productos Vendidos</div>
        </div>

        <div class="iconBx">
            <ion-icon name="bag-outline"></ion-icon>
        </div>
    </div>

    <div class="card">
        <div>
            <div class="numbers">50</div>
            <div class="cardName">Comentarios Positivos</div>
        </div>

        <div class="iconBx">
            <ion-icon name="thumbs-up-outline"></ion-icon>
        </div>
    </div>

    <div class="card">
        <div>
            <div class="numbers">$15,000</div>
            <div class="cardName">Ingresos Mensuales</div>
        </div>

        <div class="iconBx">
            <ion-icon name="wallet-outline"></ion-icon>
        </div>
    </div>
</div>


 <!-- ================ Detalles de Pedidos ================= -->
<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>TUS Últimas Solicitudes de Catering</h2>
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
            </tbody>
        </table>
    </div>
</div>


                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Trabajadores ACTIVOS</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>
                    </table>
                </div>
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