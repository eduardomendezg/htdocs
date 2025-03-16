<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el número desde el formulario
    $numero = $_POST["numero"];
    
    // Validar que el número ingresado sea un número entero
    if ($numero >0) {
        #mayor
        $resultado = "El numero  ingresado ".$numero. " es positivo";
    } else if ($numero < 0) {
        #menor
        $resultado = "El numero  ingresado ".$numero." es negativo";
    } else{
        #cero
        $resultado = "El numero  ingresado ".$numero." es cero";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 - Condicionales</title>
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
    <h2>Idenficiador de numeros positivos y negativos</h2>
    <!-- Formulario para ingresar el número -->
    <form method="POST">
        <label for="numero">Ingresa un número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Calcular</button>
    </form>
    <?php
    // Mostrar el resultado si se envió el formulario
    if (isset($resultado)) {
        echo "<h2>Resultado: $resultado</h2>";
    }
    ?>
</body>
</html>