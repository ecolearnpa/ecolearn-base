<?php
    // Obtener los datos del formulario de registro
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $rol = $_POST['rol'];

    // Realizar la conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "1598";
    $dbname = "Registros";
    $port = 3316; // Reemplaza "puerto" con el número de puerto correspondiente

    // Crear la conexión
    $conn = mysqli_connect($servername, $username, $password, $dbname, $port);

    // Verificar la conexión
    if (!$conn) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    // Establecer el conjunto de caracteres UTF-8
    mysqli_set_charset($conn, "utf8");

    // Preparar la consulta SQL con una consulta preparada
    $sql = "INSERT INTO usuarios (nombre, apellido, correo, contrasena, rol) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssss", $nombre, $apellido, $correo, $contrasena, $rol);

    // Ejecutar la consulta preparada
    if (mysqli_stmt_execute($stmt)) {
        // Registro exitoso
        echo "¡Registro exitoso!";
    } else {
        // Error al registrar el usuario
        echo "Error al registrar el usuario: " . mysqli_error($conn);
    }

    // Cerrar la consulta preparada y la conexión
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
?>