<!DOCTYPE html>
<html>

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
        </tr>
        <?php
        include '../../../config/conexionBD.php';
        $sql = "SELECT * FROM usuario";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["usu_cedula"] . "</td>";
                echo "<td>" . $row['usu_nombres'] . "</td>";
                echo "<td>" . $row['usu_apellidos'] . "</td>";
                echo "<td>" . $row['usu_direccion'] . "</td>"; 
                echo "<td>" . $row['usu_telefono'] . "</td>";
                echo "<td>" . $row['usu_correo'] . "</td>";
                echo "<td>" . $row['usu_fecha_nacimiento'] . "</td>";
                $user =serialize($row);
                $user= urlencode($user);
                echo '<td><a href="eliminar.php?user='. $user .'">Eliminar</a></td>';
               
                echo '<td><a href="modificar_usuario.php?user='. $user .'">Modificar Usuario</a></td>';
                echo '<td><a href="cambiar_contrasena.php?user='. $user .'">Cambiar contrasena</a></td>';
                echo "</tr>";
            }
        } else {
            echo "<tr>";
            echo " <td colspan='7'> No existen usuarios registradas en el sistema </td>";
            echo "</tr>";
        }
        $conn->close(); ?>
    </table>
</body>
</html>
