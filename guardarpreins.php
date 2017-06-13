<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>.:: Preinscipción a Niveles</title>
    <link rel="shortcut icon" href="./img/favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link id="callCss" rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />
	<link id="callCss"rel="stylesheet" href="css/style_body.css" type="text/css" media="screen" charset="utf-8" />
	<link id="callCss"rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8" />

	<link rel="stylesheet" href="slider/css/estiloslider.css">
	<link rel="stylesheet" href="slider/css/style.css">
	<link rel="stylesheet" href="slider/css/stylefont.css">

<!--font api================================================ -->
	<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet"> <!-- titulos-->
	<link href="https://fonts.googleapis.com/css?family=Actor" rel="stylesheet"> <!-- body-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> <!-- personal-->
	<link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet"> <!-- personal-->
	<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet"> <!-- personal-->
<!--font api================================================ -->

<!--Scripts .js================================================ -->
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.scrollTo-1.4.3.1-min.js" type="text/javascript"></script>
	<script src="js/jquery.easing-1.3.min.js"></script>
	<script src="js/default.js"></script>
	<script src="js/my_js.js"></script>
<!--Scripts .js================================================ -->

</head>

<body id="preinscripcion2">
	<?php 
		include("navbar.html");
	?>


<div class="container">
	<h1 id="miGaleria">PREINSCRIPCIÓN A NIVELES</h1> <br><br>
	<p align="right"><a href="ayuda.php" class="glyphicon glyphicon-question-sign btn-lg text-left"><label>Ayuda</label></a></p><br>
	<p>Gracias por confiar en la educación y cuidado de su hij@. ☺</p><br>
				<div class="col-lg-12">
				<table class="table table-bordered guardado">
					<tr>
					    <td>
					<center>


						<?php
							$identificacion = $_POST['identificacion'];
							$nombres = $_POST['nombres'];
							$fechanacimiento = $_POST['fechanacimiento'];
							$edad = $_POST['edad'];
							$genero = $_POST['genero'];
							$direccion = $_POST['direccion'];
							$telefono = $_POST['telefono'];
							$estrato = $_POST['estrato'];
							$sistemasalud = $_POST['eps'];
							$vacunas = $_POST['vacunas'];
							$crecimiento = $_POST['crecimiento'];
							$gruposanguineo = $_POST['grupo'];
							$acudiente = $_POST['acudiente'];
							$redunidos = $_POST['red'];
							$desplazados = $_POST['desplazados'];
							$comunidadetnica = $_POST['minoria'];
							$sisben = $_POST['sisben'];
							$salariominimo = $_POST['salario'];
							$discapacidad = $_POST['discapacidad'];
							$rna=$_POST['rna'];
							
							//conexion a base de datos
							include("conecta.php");
							//construccion de la clausula sql
							$sql = "INSERT INTO ninos (identificacion,nombre,fechanacimiento,edad,genero,direccion,telefono,estrato,eps,
							vacunas,crecimiento,gruposanguineo,acudiente,redunidos,desplazados,minoriaetnica,sisben,salariominimo,
							discapacidad,rna)VALUES('$identificacion','$nombres','$fechanacimiento','$edad','$genero','$direccion','$telefono','$estrato',
							'$sistemasalud','$vacunas','$crecimiento','$gruposanguineo','$acudiente','$redunidos','$desplazados','$comunidadetnica',
							'$sisben','$salariominimo','$discapacidad','$rna')";
							//ejecucion de la instruccion
							$resultado = mysqli_query($conexion,$sql);
							if($resultado){
								echo"<b class= 'ok'>Registro guardado con exito :D</b><br><br>";
								?>
								<a href="infantil.php" class="btn btn-large btn-primary">Regresar</a>
							<?php
							}
							else{
								echo"<b class='bad'>Los datos no han sido registrados :(</b><br>";
								echo "<p>Por favor, registre nuevamente la información o intente más tarde </p><br><br>";
								?>
								<a href="#" class="btn btn-large btn-primary" onclick="javascript:history.back()">Intentar nuevamente</a>
							<?php

							}
							?>
							 </center>
						</td>
					</tr>
				</table>
			</div>
		</div>	
<?php 
	include("footer.html");
?>



					
</body>
</html>
