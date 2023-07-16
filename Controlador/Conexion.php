<?php
$servername = "localhost";
$username = "root";
$password = "1598";
$dbname = "Registros";
$port = 3316; // Reemplaza "puerto" con el número de puerto correspondiente

// Crear la conexión
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

// Verificar la conexión
if (mysqli_error($conn)) {
    echo "Conexión error";
}else{
    echo "Conexión exitosa";
}
// Establecer el conjunto de caracteres UTF-8
mysqli_set_charset($conn, "utf8");
?>
