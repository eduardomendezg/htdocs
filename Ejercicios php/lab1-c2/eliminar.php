<?php include 'conexion.php'; ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM productos WHERE id=$id";
    if ($conn->query($sql)) {
        echo "<p>Producto eliminado.</p>";
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }
}
header("Location: index.php");
?>

