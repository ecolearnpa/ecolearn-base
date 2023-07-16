<?php
// Definir usuario de prueba
$usuarioPrueba = [
    'nombre' => 'Juan',
    'apellido' => 'Pérez',
    'rol' => 'Estudiante',
    'nota' => 0,
    'correo' => 'usuario@example.com',
    'contraseña' => '123456'
  ];

// Procesar formulario de inicio de sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obtener los datos del formulario de inicio de sesión
  $correo = $_POST['correo'];
  $contraseña = $_POST['password'];

  // Verificar las credenciales del usuario de prueba
  if ($correo === $usuarioPrueba['correo'] && $contraseña === $usuarioPrueba['contraseña']) {
    // Las credenciales son válidas, redireccionar a la página de inicio o realizar otras acciones necesarias
    $nombre = $usuarioPrueba['nombre'];
    $apellido = $usuarioPrueba['apellido'];
    $rol = $usuarioPrueba['rol'];
    $nota = $usuarioPrueba['nota'];
    header("Location: Home.php");
    exit;
  } else {
    // Las credenciales no son válidas, mostrar mensaje de error
    echo "Credenciales incorrectas";
  }
}
?>

<!-- HTML del formulario de inicio de sesión -->
<!DOCTYPE html>
<html lang="es">
<head>
<link rel="icon" href="Recursos/Logo.ico" type="image/x-icon">
  <!-- Encabezado y estilos -->
</head>
<body>
  <div class="login-container">
    <div class="card">
      <div class="card-header">
        <h2 style="margin-bottom: 0;">Iniciar Sesión</h2>
      </div>
      <div class="card-body">
        <form method="POST" action="login.php">
          <!-- Campos del formulario -->
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Scripts y cierre del documento HTML -->
</body>
</html>
