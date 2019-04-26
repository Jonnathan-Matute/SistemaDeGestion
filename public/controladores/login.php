<?php 
session_start(); 
include '../../config/conexionBD.php'; 
$usuario = isset($_POST["correo"]) ? trim($_POST["correo"]) : null; 
$contraseña = isset($_POST["contraseña"]) ? trim($_POST["contraseña"]) : null; 

$sql = "SELECT * FROM usuario WHERE usu_correo = '$usuario' and usu_password = MD5('$contraseña')";

$result = $conn->query($sql); 
if ($result->num_rows > 0) { 
    $_SESSION['isLogged'] = TRUE; 
    header("Location: ../../admin/vista/usuario/index.php");
    } else {
        header("Location: ../vista/login.html");
        } 
        
        $conn->close(); 

?>
