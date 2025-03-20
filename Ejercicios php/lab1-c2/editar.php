<?php 
include 'conexion.php'; 
include 'header.php'; 

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM productos WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$resultado = $stmt->get_result();

// Verificar si el producto existe
if ($resultado->num_rows > 0) {
    $producto = $resultado->fetch_assoc();
} else {
    echo "<p>Error: Producto no encontrado.</p>";
    exit();
}

$stmt->close();
?>
<center>
<h2>Editar Producto</h2>

<form action="" method="POST">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($producto['id']); ?>">
    <input type="text" name="nombre" value="<?php echo htmlspecialchars($producto['nombre']); ?>" required>
    <textarea name="descripcion"><?php echo htmlspecialchars($producto['descripcion']); ?></textarea>
    <input type="number" step="0.01" name="precio" value="<?php echo htmlspecialchars($producto['precio']); ?>" required>
    <input type="number" name="stock" value="<?php echo htmlspecialchars($producto['stock']); ?>" required>
    <button type="submit" name="actualizar">Actualizar</button>
</form>
</center>
<?php
if ($_SERVER["REQUEST_METHOD"]== "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    // Preparar la consulta para actualizar datos de forma segura
    $stmt = $conn->prepare("UPDATE productos SET nombre=?, descripcion=?, precio=?, stock=? WHERE id=?");
    $stmt->bind_param("ssdii", $nombre, $descripcion, $precio, $stock, $id);

    if ($stmt->execute()) {
        echo "<p>Producto actualizado correctamente.</p>";
        header("Location: index.php");
        exit();
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }

    $stmt->close();
}
?>

<?php include 'footer.php'; ?>
