<!DOCTYPE html>
<html lang="es">
<head>
<link rel="icon" href="Recursos/Logo.ico" type="image/x-icon">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear Cuenta - Aventuras Científicas</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      background: url('Recursos/FondoSingin.svg') no-repeat center top fixed;
      background-size: cover;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .card {
      width: 400px;
      padding: 30px;
      background-color: white;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); /* Agregamos un efecto de sombra */
    }

    .title {
      text-align: center;
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group input {
      width: 100%;
    }

    .checkbox-group {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .checkbox-group label {
      display: flex;
      align-items: center;
    }

    .checkbox-group input[type="checkbox"],
    .checkbox-group input[type="radio"] {
      margin-right: 5px;
    }

    .button-group {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }
    .title-container {
      position: absolute;
      top: 8%;
      right: 50%;
      transform: translate(50%, -50%);
      background-color: transparent;
      padding: 15px;
    }
  </style>
</head>
<body>
<div class="title-container">
    <img src="Recursos/lOCOCOM.svg" alt="Logo" style="width: 260px; height: 260px;">
  </div>
  <div class="container">
    <div class="card">
      <h2 class="title">Plataforma educativa</h2>
      <form action="Controlador/Registro.php" method="POST">
        <div class="form-group">
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
            </div>
            <div class="col">
              <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
            </div>
          </div>
        </div>
        <div class="form-group">
          <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo electrónico">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="confirmar-contrasena" name="confirmar-contrasena" placeholder="Confirmar contraseña">
        </div>
        <div class="checkbox-group">
          <div>
            <label for="estudiante">
              <input type="radio" id="estudiante" name="rol" value="estudiante">
              Estudiante
            </label>
          </div>
          <div>
            <label for="profesor">
              <input type="radio" id="profesor" name="rol" value="profesor">
              Profesor
            </label>
          </div>
        </div>
        <div class="button-group">
          <button type="submit" class="btn btn-primary">Crear Cuenta</button>
          <a href="index.php" class="btn btn-secondary">Iniciar Sesión</a>
        </div>
      </form>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
