<!DOCTYPE html>
<html lang="es">
<head>
<link rel="icon" href="Recursos/Logo.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <title>Juego Educativo - Identificar Partes del Cuerpo Humano</title>
    <style>
        .title-container {
      position: absolute;
      top: -20px;
      right: 60px;
      background-color: transparent;
      padding: 15px;
    }
        body {
            margin: 0;
            padding: 0;
            background: url('Recursos/FondoHome.svg') no-repeat center top fixed;
            background-size: cover;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            height: 100vh;
            font-family: Arial, sans-serif;
        }

        .title {
            font-size: 48px;
            font-family: "Arial Black", sans-serif;
            font-weight: bold;
            text-align: center;
            margin-bottom: 15px;
            margin-top: 10px;
            color: rgba(102, 204, 204);
        }

        .juego-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            max-width: 500px;
            text-align: center;
            margin-top: 30px;
        }

        .juego-container img {
            max-width: 100%;
            height: 200px; /* Establece la altura deseada */
            object-fit: cover; /* Ajusta la imagen para que ocupe todo el espacio disponible */
            margin-bottom: 10px;
        }

        .juego-container p {
            margin: 10px 0;
        }

        .juego-container input[type="radio"] {
            margin-right: 5px;
        }

        .juego-container .btn {
            margin-top: 10px;
        }

        .juego-container .btn-group {
            margin-top: 20px;
        }
        .atras-boton {
            position: fixed;
            bottom: 50px;
            left: 50px;
            width: 60px; /* Modifica el ancho a tu preferencia */
            height: 60px; /* Modifica el alto a tu preferencia */
            background-image: url('Recursos/Atras.svg');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center center;
            cursor: pointer;
        }

        .atras-boton:hover {
            transform: scale(1.2); /* Aumenta el valor si deseas un efecto de agrandamiento más pronunciado */
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="title-container">
    <img src="Recursos/lOCOCOM.svg" alt="Logo" style="width: 200px; height: 200px;">
  </div>
    <h1 class="title">Juego Educativo - Identificar Partes del Cuerpo Humano</h1>

    <div class="juego-container">
        <?php
        // Array con las preguntas, respuestas y rutas de las imágenes
        $preguntas = array(
            array(
                "pregunta" => "1. ¿Qué parte del cuerpo humano se utiliza para ver?",
                "opciones" => array("A) Nariz", "B) Ojo", "C) Boca"),
                "respuestaCorrecta" => "B",
                "imagen" => "Recursos/ojo.jpg"
            ),
            array(
                "pregunta" => "2. ¿Qué parte del cuerpo humano se utiliza para oler?",
                "opciones" => array("A) Oreja", "B) Boca", "C) Nariz"),
                "respuestaCorrecta" => "C",
                "imagen" => "Recursos/nariz.jpg"
            ),
            array(
                "pregunta" => "3. ¿Qué parte del cuerpo humano se utiliza para caminar?",
                "opciones" => array("A) Pierna", "B) Mano", "C) Cabeza"),
                "respuestaCorrecta" => "A",
                "imagen" => "Recursos/pierna.jpg"
            )
        );

        // Inicializar puntaje
        session_start();
        if (!isset($_SESSION['puntaje'])) {
            $_SESSION['puntaje'] = 0;
        }

        // Comprobar si se ha enviado el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener la pregunta actual
            $preguntaActual = $_POST["preguntaActual"];

            // Obtener la respuesta enviada por el usuario
            $respuestaUsuario = $_POST["respuesta"];

            // Verificar la respuesta y pasar a la siguiente pregunta
            $totalPreguntas = count($preguntas);

            if ($respuestaUsuario == $preguntas[$preguntaActual]["respuestaCorrecta"]) {
                $_SESSION['puntaje']++;
                $mensaje = "¡Correcto!";
                $mensajeClass = "text-success";
            } else {
                $mensaje = "¡Incorrecto!";
                $mensajeClass = "text-danger";
            }

            // Mostrar el mensaje solo si no es la última pregunta
            if ($preguntaActual < $totalPreguntas - 1) {
                echo "<h2 class='$mensajeClass'>$mensaje</h2>";
                echo "<form method='post' action='" . $_SERVER["PHP_SELF"] . "'>";
                echo "<input type='hidden' name='preguntaActual' value='" . ($preguntaActual + 1) . "'>";
                echo "<img src='" . $preguntas[$preguntaActual + 1]["imagen"] . "'><br>";
                echo "<p>" . $preguntas[$preguntaActual + 1]["pregunta"] . "</p>";

                foreach ($preguntas[$preguntaActual + 1]["opciones"] as $opcion) {
                    echo "<input type='radio' name='respuesta' value='" . substr($opcion, 0, 1) . "' required>" . $opcion . "<br>";
                }

                echo "<button class='btn btn-primary' type='submit'>Responder</button>";
                echo "</form>";
            } else {
                // Mostrar el puntaje final
                $mensaje = "Puntaje final: " . $_SESSION['puntaje'] . "/$totalPreguntas";
                echo "<h2 class='$mensajeClass'>$mensaje</h2>";

                // Botones de regresar a HomeSV.php e intentar de nuevo
                echo "<div class='btn-group'>";
                // Botón de regresar a Home
                echo "<button class='btn btn-success' onclick=\"location.href='HomeCH.php'\">Regresar a Home</button>";

                echo "<button class='btn btn-primary' onclick=\"location.href='?preguntaActual=0'\">Intentar de nuevo</button>";
                echo "</div>";

                // Reiniciar puntaje
                $_SESSION['puntaje'] = 0;
            }
        } else {
            // Mostrar la primera pregunta
            $preguntaActual = 0;
            echo "<h2>Pregunta 1:</h2>";
            echo "<form method='post' action='" . $_SERVER["PHP_SELF"] . "'>";
            echo "<input type='hidden' name='preguntaActual' value='$preguntaActual'>";
            echo "<img src='" . $preguntas[$preguntaActual]["imagen"] . "'><br>";
            echo "<p>" . $preguntas[$preguntaActual]["pregunta"] . "</p>";

            foreach ($preguntas[$preguntaActual]["opciones"] as $opcion) {
                echo "<input type='radio' name='respuesta' value='" . substr($opcion, 0, 1) . "' required>" . $opcion . "<br>";
            }

            echo "<button class='btn btn-primary' type='submit'>Responder</button>";
            echo "</form>";
        }
        ?>
    </div>
    <a href="HomeCH.php" class="atras-boton"></a>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
