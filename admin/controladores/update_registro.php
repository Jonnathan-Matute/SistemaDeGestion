<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar</title>
    <style type="text/css" rel="stylesheet">
         .error{
             color: red;
         }
     </style>
</head>
<body>
    <?php
    
        //incluir conexion a la base de datos

        include '../../config/conexionBD.php';
        
        $codigo = isset($_GET["codigo"]) ? trim($_GET["codigo"]): null;
        $cedula = isset($_GET["cedula"]) ? trim($_GET["cedula"]): null;
        $nombres = isset($_GET["nombres"]) ? mb_strtoupper(trim($_GET["nombres"]),'UTF-8'): null;
        $apellidos = isset($_GET["apellidos"]) ? mb_strtoupper(trim($_GET["apellidos"]),'UTF-8'): null;
        $direccion = isset($_GET["direccion"]) ? mb_strtoupper(trim($_GET["direccion"]),'UTF-8'): null;
        $telefono = isset($_GET["telefono"]) ? trim($_GET["telefono"]): null;
        $correo = isset($_GET["correo"]) ? trim($_GET["correo"]): null;
        $fechaNacimiento = isset($_GET["fechaNacimiento"]) ? trim($_GET["fechaNacimiento"]): null;
        date_default_timezone_set("America/Guayaquil");
        $fecha = date("Y-m-d H:i:s", time());
    
        $sql ="UPDATE usuario 
                SET usu_cedula ='$cedula', usu_nombres = '$nombres', usu_apellidos = '$apellidos', usu_direccion = '$direccion', usu_telefono = '$telefono', usu_correo = '$correo', usu_fecha_nacimiento = '$fechaNacimiento', usu_fecha_modificacion = '$fecha'  
        WHERE usu_codigo = '$codigo'";
    
        if($conn->query($sql) === TRUE) {
             echo "<p>Se ha actualizado los datos personales correctamemte!!!</p>";
        } else {
             echo "<p> error al actualizar data contactar con el administrador </p>";
        }
    
        $conn->close();
         echo "<a href='../vista/usuario/index.php'>Regresar</a>";
    ?>
</body>
</html>