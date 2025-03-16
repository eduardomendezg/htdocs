<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Semana 8</title>
</head>
<body>
    <nav>
        <a href="index.php">Ejercicio 1 - Formulario</a>
        <a href="ejercicio2.php">Ejercicio 2 - Petición AJAX</a>
        <a href="ejercicio3.php">Ejercicio 3 - Arreglos</a>
        <a href="ejercicio4.php">Ejercicio 4 - Funciones</a>
        <a href="ejercicio5.php">Ejercicio 5 - Condicionales</a>
        <a href="ejercicio6.php">Ejercicio 6 - Bucles</a>
        <a href="ejercicio7.php">Ejercicio 7 - Arreglo asociativo</a>
    </nav>
    <h1>Datos Personales</h1>
    <form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br><br>
        <label for="correo">Correo:</label>
        <input type="email" name="correo" id="correo" required>
        <br><br>
        <label for="edad">Edad:</label>
        <input type="text" name="edad" id="edad" required>
        <br><br>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $edad = $_POST['edad'];


        echo"<h2>Datos Recibidos</h2>";
        echo"<p>Tu nombre es $nombre posees el correo $correo y tienes la edad de $edad años</p>";
    }
    ?>
</body>
</html>