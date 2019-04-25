<?php

 $db_servername="localhost";
 $db_username="root";
 $db_password ="";
 $db_name="hipermedial";

 #Create connection

 $conn = new mysqli($db_servername,$db_username,$db_password,$db_name);

 #Probar conexion

 if ($conn->connect_error) {

    die("Conexion fallida!!" .$conn->connect_error);

 }else{

    echo"<p>Conexion existosa!! :)</p>";

 }


?>
