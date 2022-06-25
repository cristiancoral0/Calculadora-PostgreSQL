<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Calculadora</title>
        <link rel='stylesheet' type='text/css' media='screen' href='estilos.css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="funcion.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
	<body>
        <?php
            include("conexionbd.php");
        ?>

        <div class="contenedor">
        <div id="contenedorPrimario" class="col-sm-6">	
        <div class="container-fluid">
            <!--form action="operar.php" method="POST"-->
                    <h2>OPERACIONES</h2>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Seleccione la operación a realizar</label>
                                <select class="form-control" id="operacion" name="operacion">
                                    <option>Suma</option>
                                    <option>Resta</option>
                                    <option>Multiplicación</option>
                                    <option>División</option>
                                </select>
                        </div>

                        <div class="form-group">
                          <label for="numero1">Primer Número *:</label>
                          <input type="number" class="form-control" id="numero1" placeholder="Ingrese primer número" name="numero1" size="40" required="true">
                        </div>

                        <div class="form-group">
                          <label for="numero2">Segundo Número *:</label>
                          <input type="number" class="form-control" id="numero2" placeholder="Ingrese segundo número" name="numero2" size="40" required="true">
                        </div>

                        <div class="resultado">
                          <label for="resultado">Resultado:</label>
                          <input type="number" class="form-control" id="resultado" placeholder="Resultado" name="resultado" size="40" readonly>
                        </div>
                        </br>
                        <div>
                        <button type=submit class="btn btn-primary col-sm-4" onclick="enviar(event)">Operar</button>
                        <button type="reset" onclick=" location.href= 'index.php' " class="btn btn-secondary col-sm-4">Borrar</button">
                        </div>  
                        </br>
                        <p id="tabla_operaciones" class="regtext">Mostar historial de operaciones <a href="mostrar_tabla.php" >Historial Aquí</a>!</p>
                </div>
            </form>
        </div>
    </div>
    
    <script src="funcion.js"></script>
	</body>
</html>