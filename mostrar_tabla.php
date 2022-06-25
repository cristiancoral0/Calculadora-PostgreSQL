<?php

include("conexionbd.php"); 

$resOperaciones="SELECT * FROM operaciones";
$consulta=pg_query($conexion, $resOperaciones);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
	<link rel="shortcut icon" href="img\icon.svg">
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Operaciones</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href='estilos.css'>
</head>
<body>  

<!--/////////////////////// ENCABEZADO ////////////////////////-->

<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		
		<a class="navbar-brand" href="index.php">
			<img src="img/icon.svg" width="30" height="30" alt="">
			HISTORIAL OPERACIONES
		</a>
			<div class="collapse navbar-collapse" id="navbarText">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.php">HACER OPERACIÓN</a>
					</li>
				</ul>
            </div>
		</nav>
	  </header>

<!--/////////////////////// TABLA VENCIMIENTO ////////////////////////-->

<table id="tabla_operaciones" class="table table-striped table-dark">
            <thead>
				<tr>
					<th>NUMERO 1</th>
					<th>NUMERO 2</th>
					<th>RESULTADO</th>
					<th>TIPO OPERACIÓN</th>
					<th>FECHA OPERACIÓN</th>
				</tr>
            </thead>
            <tbody>
				<?php
				while ($registroOperaciones = pg_fetch_object($consulta)) { ?>

					<tr>
						<td><?php echo $registroOperaciones->numero1;?></td>
						<td><?php echo $registroOperaciones->numero2;?></td>
						<td><?php echo $registroOperaciones->resultado;?></td>
						<td><?php echo $registroOperaciones->operacion;?></td>
						<td><?php echo $registroOperaciones->fecha_operacion;?></td>
                    </tr>
                </tbody>
            <?php } ?>
		</table>
    </body>
</html>