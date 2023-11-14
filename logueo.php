<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Iniciar Sesión</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    body {
        background-image: radial-gradient(circle, #01321f, #405a40, #798569, #b2b398, #ece3ce);
      font-family: 'Arial', sans-serif;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      overflow: hidden;
      animation: gradientAnimation 10s ease infinite alternate;
    }

    @keyframes gradientAnimation {
      0% {
        background-position: 0% 50%;
      }
      100% {
        background-position: 100% 50%;
      }
    }

    .card {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;
      background-color: rgba(255, 255, 255, 0.8);
    }

    .card:hover {
      transform: scale(1.02);
    }

    .form-control {
      border-radius: 8px;
      padding: 12px;
      font-size: 16px;
      background-color: #f8f8f8;
      border: 1px solid #ddd;
    }

  .btn-login {
    border-radius: 8px;
      padding: 12px;
      font-size: 16px;
      background-color: #405a40;
      color: #fff;
      transition: background-color 0.3s ease-in-out;
  }

  .btn-login:hover {
    background-color: #01321f;
  }

  h2 {
      color: #333;
    }

    label {
      color: #555;
    }

    .navbar {
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh;
      background-image: linear-gradient(to right, #ece3ce, #ece3ce, #ece3ce, #ece3ce, #ece3ce);
        }

    .nav-container {
      background-color: #fff;
      border-radius: 15px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .nav-link {
      color: #fff;
      background-color: #405a40;
    }

    .nav-link:hover {
      color: #ece3ce;
    }
</style>



</head>
<body>

<div class="container">

<nav class="navbar">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registro.php">Registrarse</a>
      </li>
    </ul>
  </nav>

  <div class="container">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card">
        <div class="card-body">
          <h2 class="text-center">Iniciar Sesión</h2>
          <form action="funcionalidad/validaciones/login.php" method="post">
            <div class="form-group">
              <label for="loginCedula">Cédula</label>
              <input type="text" class="form-control" id="loginCedula" name="cedula" placeholder="Ingrese su cédula" required>
            </div>
            <div class="form-group">
    <label for="loginPassword">Contraseña</label>
    <input type="password" class="form-control" id="loginPassword" name="contrasena" placeholder="Ingrese su contraseña" required>
</div>

            <button type="submit" class="btn btn-primary btn-login btn-block">Iniciar Sesión</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
