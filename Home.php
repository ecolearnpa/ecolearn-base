<!DOCTYPE html>
<html lang="es">
<head>
<link rel="icon" href="Recursos/Logo.ico" type="image/x-icon">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aventuras Científicas - Home</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background: url('Recursos/FondoHome.svg') no-repeat center top fixed;
      background-size: cover;
    }

    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 90vh;
      margin-top: 15px;
    }

    .title {
      font-size: 48px;
      font-family: "Arial Black", sans-serif;
      font-weight: bold;
      text-align: center;
      margin-bottom: 20px;
      color: rgba(102, 204, 204);
    }

    .grid-container {
      display: flex;
      justify-content: space-between;
      max-width: 900px;
      margin-top: 20px;
    }

    .grid-item {
      background-color: #f1f1f1;
      padding: 20px;
      text-align: center;
      width: 30%;
      height: 300px;
      transition: transform 0.3s ease;
      margin-right: 20px;
      border-radius: 10px;
      cursor: pointer;
      text-decoration: none;
      color: inherit;
      opacity: .95; /* Opacidad inicial */
    }

    .grid-item:last-child {
      margin-right: 0;
    }

    .grid-item:hover {
      transform: scale(1.1);
      opacity: 1; /* Opacidad al pasar el mouse */
    }

    .grid-item img {
      width: 100%;
      height: 70%;
      object-fit: cover;
      margin-bottom: 10px;
      border-radius: 10px;
    }

    .grid-item h3 {
      margin-bottom: 5px;
    }

    .grid-item p {
      margin: 0;
    }

    .greeting {
      position: absolute;
      top: 10px;
      right: 20px;
      font-size: 24px;
      font-weight: bold;
      color: rgba(102, 204, 204);
    }
    .title-container {
      position: absolute;
      top: -50px;
      right: 60px;
      background-color: transparent;
      padding: 15px;
    }
  </style>
</head>
<body>
<div class="title-container">
    <img src="Recursos/lOCOCOM.svg" alt="Logo" style="width: 200px; height: 200px;">
  </div>
  <div class="container">
    <h1 class="title">¡Ponte a Prueba con Aventuras Científicas!</h1>
    <div class="grid-container">
      <a href="HomeSV.php" class="grid-item">
        <img src="Recursos/imagen1.svg" alt="Imagen del tema 1">
        <h3>Seres Vivos</h3>
        <p>Descripción del tema 1</p>
      </a>
      <a href="HomeCH.php" class="grid-item">
        <img src="Recursos/imagen2.svg" alt="Imagen del tema 2">
        <h3>Cuerpo Humano</h3>
        <p>Descripción del tema 2</p>
      </a>
      <a href="HomeEC.php" class="grid-item">
        <img src="Recursos/imagen3.svg" alt="Imagen del tema 3">
        <h3>Ecosistemas</h3>
        <p>Descripción del tema 3</p>
      </a>
    </div>
    <?php
    // Verificar si las credenciales del usuario son válidas
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Obtener los datos del formulario de inicio de sesión
      $correo = $_POST['correo'];
      $contraseña = $_POST['password'];

      // Verificar las credenciales del usuario (aquí deberías realizar la validación real con la base de datos)
      if ($correo === 'usuario@example.com' && $contraseña === '123456') {
        $nombreUsuario = 'Juan';
        $apellidoUsuario = 'Pérez';
      }
    }
    ?>
    <div class="greeting">
      <?php
      // Mostrar el saludo personalizado si las variables de nombre y apellido del usuario están definidas
      if (isset($nombreUsuario) && isset($apellidoUsuario)) {
        echo "Hola, " . $nombreUsuario . " " . $apellidoUsuario;
      }
      ?>
    </div>
  </div>
</body>
</html>
