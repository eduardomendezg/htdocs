<?php include 'conexion.php'; ?>
<?php include 'header.php'; ?>
<center>
<h2>Agregar Producto</h2>
<form action="" method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <textarea name="descripcion" placeholder="Descripción"></textarea>
    <input type="number" step="0.01" name="precio" placeholder="Precio" required>
    <input type="number" name="stock" placeholder="Stock" required>
    <button type="submit" name="guardar">Guardar</button>
</form>
</center>
<?php
if (isset($_POST['guardar'])) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    $sql = "INSERT INTO productos (nombre, descripcion, precio, stock) VALUES ('$nombre', '$descripcion', '$precio', '$stock')";
    if ($conn->query($sql)) {
        echo "<p>Producto agregado correctamente.</p>";
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }
}
?>

<?php include 'footer.php'; ?>
