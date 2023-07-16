<!DOCTYPE html>
<html lang="es">
<head>
<link rel="icon" href="Recursos/Logo.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <title>Mi Página Web</title>
    <style>
        .title-container {
      position: absolute;
      top: -50px;
      right: 60px;
      background-color: transparent;
      padding: 15px;
    }
        body {
            background-image: url('Recursos/FondoHome.svg');
            background-size: cover;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .title {
            font-size: 48px;
            font-family: "Arial Black", sans-serif;
            font-weight: bold;
            text-align: center;
            margin-bottom: 10px; /* Modifica el margen inferior a 40px */
            color: rgba(102, 204, 204);
        }

        .botones-container {
            display: flex;
            justify-content: center;
            margin-bottom: 40px; /* Modifica el margen inferior a 40px */
        }

        .boton {
            display: inline-block;
            width: 200px;
            height: 200px;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center center;
            margin: 0 10px;
            transition: transform 0.3s ease;
        }

        .boton:hover {
            transform: scale(1.1);
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
</head>
<body>
<div class="title-container">
    <img src="Recursos/lOCOCOM.svg" alt="Logo" style="width: 200px; height: 200px;">
  </div>
    <h1 class="title" style="margin-bottom: 15px;">Ecosistema</h1> <!-- Añadido el margen inferior de 20px -->
    <div class="botones-container" style="margin-bottom: 350px;">
        <a href="ECLV1.php" class="boton" style="background-image: url('Recursos/Level1.svg')"></a> <!-- Ajusta el enlace a SVLV1.php -->
    </div>
    <a href="Home.php" class="atras-boton"></a>
</body>
</html>
