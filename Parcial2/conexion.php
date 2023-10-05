<?php
    $server='localhost';
    $user='root';
    $password='';

    //conexion
    $conexion= new mysql($server, $user, $password);

    //revisar conexion
    if($conexion->connect_error){
        die("Fallo la conexión" . $conexion->connection_error);
    }
    

?>