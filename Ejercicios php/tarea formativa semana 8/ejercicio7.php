<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocEjercicio 7 - Arreglo asociativoument</title>
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
    <h1>Arreglos asociativos</h1>
    <br>
<?php
// Definir un arreglo
$usuarios = [
    ["nombre" => "Carlos", "edad" => 25, "ciudad" => "Madrid"],
    ["nombre" => "Ana", "edad" => 17, "ciudad" => "Barcelona"],
    ["nombre" => "Luis", "edad" => 30, "ciudad" => "Valencia"],
    ["nombre" => "Sofía", "edad" => 16, "ciudad" => "Sevilla"],
    ["nombre" => "Diego", "edad" => 19, "ciudad" => "Madrid"],
    ["nombre" => "Elena", "edad" => 22, "ciudad" => "Barcelona"]
];

// Función para filtrar usuarios según edad y ciudad
function filtrarUsuarios($usuarios, $edadMinima, $ciudad) {
    $usuariosFiltrados = [];

    foreach ($usuarios as $usuario) {
        if ($usuario["edad"] >= $edadMinima && $usuario["ciudad"] == $ciudad) { 
            // Verifica que la edad sea mayor o igual a la edad mínima y la ciudad coincida
            $usuariosFiltrados[] = $usuario;
        }
    }

    return $usuariosFiltrados; // Retorna los usuarios que cumplen ambas condiciones
}

// Definir criterios de filtrado
$edadMinima = 18;
$ciudadFiltrar = "Madrid";

// Obtener los usuarios filtrados
$usuariosFiltrados = filtrarUsuarios($usuarios, $edadMinima, $ciudadFiltrar);

// Mostrar resultados
if (!empty($usuariosFiltrados)) {
    echo "Usuarios mayores o iguales a $edadMinima años y que viven en $ciudadFiltrar:<br>";
    foreach ($usuariosFiltrados as $usuario) {
        echo "Nombre: " . $usuario["nombre"] . ", Edad: " . $usuario["edad"] . ", Ciudad: " . $usuario["ciudad"] . "<br>";
    }
} else {
    echo "No hay usuarios que cumplan con la condición.";
}
?>

</body>
</html>