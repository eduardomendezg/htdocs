<?php 
session_start();
$usuario = "admin";
$contra = 1234;

$userlog = $_POST['user'];
$passlog = $_POST['pass'];

if ($usuario == $userlog && $contra == $passlog){
    $_SESSION['usuario'] = $userlog;
    header("Location:dashboard.php");
}else{
    echo"Credenciales incorrectas";
}

?>