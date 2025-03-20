<?php include 'conexion.php'; ?>
<?php include 'header.php'; ?>
<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Acciones</th>
    </tr>
    <?php
    $sql = "SELECT * FROM productos";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nombre']}</td>
                <td>{$row['descripcion']}</td>
                <td>{$row['precio']}</td>
                <td>{$row['stock']}</td>
                <td>
                    <a href='editar.php?id={$row['id']}'>Editar</a> |
                    <a href='eliminar.php?id={$row['id']}'>Eliminar</a>
                </td>
              </tr>";
    }
    ?>
</table>
<?php include 'footer.php'; ?>
