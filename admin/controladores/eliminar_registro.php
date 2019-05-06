<?php


    include '../../config/conexionBD.php';
    
    $codigo = $_GET['codigod'];
    
    echo $codigo;

    $sql = "DELETE FROM usuario
            WHERE usu_codigo = $codigo";
        
    if($conn->query($sql) === TRUE) {
             header("Location: ../vista/usuario/index.php");
        } else {

        }

    $conn->close();
?>
