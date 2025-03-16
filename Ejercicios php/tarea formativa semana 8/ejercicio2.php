<?php
if (isset($_GET['ajax'])) {
    header("Content-Type: application/json");
    echo json_encode(["mensaje" => "¡Hola! Este es un mensaje desde el servidor usando Fetch API."]);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - Petición AJAX</title>
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
    <h2>Usando pediciones ajax Fetch</h2>
    <button id="cargarDatos">Obtener mensaje</button>
    <p id="mensaje"></p>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("cargarDatos").addEventListener("click", function () {
                fetch("?ajax=1")
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById("mensaje").innerText = data.mensaje;
                    })
                    .catch(error => console.error("Error en la petición:", error));
            });
        });
    </script>
</body>
</html>