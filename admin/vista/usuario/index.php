<?php
      include '../../../config/verificar_session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gestión de usuarios</title>
    <link rel="stylesheet" href="../usuario/css/index.css">

</head>

<body>
    <h1>Lista de usuarios</h1>
    <table>
        <tr>
            <th>Cedula</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Dirección</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Fecha Nacimiento</th>
            <th>Eliminar</th>
            <th>Modificar</th>
            <th>Cambiar Contrasena</th>
            <th>Fecha Modificacion</th>
        </tr>

        <?php
        include '../../../config/conexionBD.php';

        $sql = "SELECT * FROM usuario";
        $result = $conn->query($sql);
        if($result->num_rows > 0){ 
            while($row = $result->fetch_assoc()){
              echo "<tr>";
                echo " <td>" . $row["usu_cedula"] . "</td>";
                echo " <td>" . $row['usu_nombres'] ."</td>";
                echo " <td>" . $row['usu_apellidos'] . "</td>";
                echo " <td>" . $row['usu_direccion'] . "</td>";
                echo " <td>" . $row['usu_telefono'] . "</td>";
                echo " <td>" . $row['usu_correo'] . "</td>";
                echo " <td>" . $row['usu_fecha_nacimiento'] . "</td>";
                echo "<td>" ."<a href=modificar_registro.php?codigo=".$row['usu_codigo'].">Modificar Registro</a>"."</td>";
                echo "<td>" ."<a href=modificar_contrasena.php?codigop=".$row['usu_codigo'].">Modificar Contraseña</a>"."</td>";
                echo "<td>" ."<a href=../../controladores/eliminar_registro.php?codigod=".$row['usu_codigo'].">Eliminar Registro</a>"."</td>";
                echo " <td>" . $row['usu_fecha_modificacion'] . "</td>"; 
            echo "</tr>";  
            }
            
        }else{
            echo "<tr>";
                echo "<td colspan='7'>No existe ningun usuario registrado en el sistema</td>";
            echo "</tr>";
        }
    
    ?>

    </table>
</body>
</html>
