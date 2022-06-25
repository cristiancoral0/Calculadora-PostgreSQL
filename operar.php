<?php

include("conexionbd.php");

    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacion = $_POST['operacion'];
    $fecha_operacion="2022/06/24";
    
    if($operacion=="Suma"){
        $resultado=$numero1 + $numero2;
        // echo "El resultado de la suma es: ", $resultado;
    } else {
        if($operacion=="Resta"){
            $resultado=$numero1 - $numero2;
            // echo "El resultado de la resta es: ", $resultado;
        } else {
            if($operacion=="Multiplicación"){
                $resultado=$numero1 * $numero2;
                // echo "El resultado de la multiplicación es: ", $resultado;
        } else {
            if($operacion=="División")
                $resultado=$numero1 / $numero2;
                // echo "El resultado de la division es: ", $resultado;
            }
        }
    }
    
    $hoyRaro = date('Y-m-d');
    $hoy = date("Y-m-d",strtotime($hoyRaro."- 1 days")); 
    $sql="INSERT INTO operaciones (numero1, numero2, resultado, operacion, fecha_operacion) VALUES ('$numero1','$numero2','$resultado','$operacion','$hoy')";
    $insert=pg_query($conexion, $sql);
    
                if ($insert === TRUE) 
                {
                echo '<script language="javascript">alert("Los datos se almacenaron correctamente");window.location.href="../index.php"</script>';
                } 
                    else 
                    {
                    echo '<script language="javascript">alert("Error al almacenar los datos");window.location.href="../index.php"</script>';
                }
    header("location:index.php");
?>
