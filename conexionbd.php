<?php

    $host = "ec2-23-23-151-191.compute-1.amazonaws.com";
    $bd = "d214u4ud73j72r";
    $user = "tobwtxgikainym";
    $pass = "4f17b19dc496f15dcdb0a022a49fb67778979c8ad41b474a8f346987b342c38f";

    $conexion=pg_connect("host=$host dbname=$bd user=$user password=$pass");
    
    if($conexion){
        echo "conexion exitosa";
    } else {
        echo "No se pudo conectar a la base de datos";
    }

?>