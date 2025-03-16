
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Arreglos</title>
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
    <h1>Paises mas reconocidos</h1>
    <?php
$paises = ["España", "Mexico", "Argentina", "El Salvador", "Estados Unidos", "Canada", "Rusia", "Ucrania", "India", "China", "Japon"];
echo "<ol>";
foreach ($paises as $pais){
    echo "<li>".$pais."</li>";
}
echo "</ol>"
?>
</body>
</html>