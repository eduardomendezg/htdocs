<?php 
session_start();
//$_SESSION['usuario'] = "pepito1234";  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paginita</title>
</head>
<body>
    <h1>Bienvenido: <?=$_SESSION['usuario']?>!</h1>
    <form action="" method="post">
        <label for="">Nombre de usuario</label>
        <input type="text" >
        <label for="">Contraseña</label>
        <input type="password" name="" id="">
        <button type="submit">Iniciar Sesion</button>
    </form>
</body>
</html>