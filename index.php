<!DOCTYPE html>
<html lang="es">
<head>
  <link rel="icon" href="Recursos/Logo.ico" type="image/x-icon">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aventuras Científicas</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      background: url('Recursos/Fondo.svg') no-repeat center top fixed;
      background-size: cover;
    }

    .title-container {
      position: absolute;
      top: -80px;
      right: 80px;
      background-color: transparent;
      padding: 15px;
    }

    .login-container {
      display: flex;
      justify-content: flex-start;
      align-items: center;
      height: 70vh;
      padding-left: 68vw;
      margin-top: 100px;
    }

    .card-header {
      background-color: transparent;
      margin-bottom: 6px; /* Ajustar el margen inferior */
    }

    .card {
      width: 300px;
      background-color: rgba(255, 255, 255, 0.4);
    }

    .form-group {
      margin-bottom: 10px;
      margin-top: -25px; /* Ajustar el margen superior */
    }

    .form-group input {
      margin-right: -10px;
    }
  </style>
</head>
<body>
  <div class="title-container">
    <img src="Recursos/lOCOCOM.svg" alt="Logo" style="width: 350px; height: 350px;">
  </div>
  
  <div class="login-container">
    <div class="card">
      <div class="card-header">
        <h2 style="margin-bottom: 0;">Iniciar Sesión</h2>
      </div>
      <div class="card-body">
        <form action="login.php" method="POST">
          <div class="form-group">
            <label for="username"></label>
            <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo">
          </div>
          <div class="form-group">
            <label for="password"></label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            <button type="submit" class="btn btn-secondary" formaction="crear_cuenta.php">Crear Cuenta</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
