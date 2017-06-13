<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>.:: Inscripción</title>
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
	<h6 class="font-luck h1">Preinscipción a Nivel Escolar<br></h6> <br><br>
	<p align="right"><a href="ayuda.php" class="glyphicon glyphicon-question-sign btn-lg text-left"><label>Ayuda</label></a></p><br><br>

		<?php
			$ins = $_POST['nins'];
			$codi=$_POST['codi'];
			$iden = $_POST['ide'];
			$fecha = $_POST['fechainscripcion'];
		?>
		<br>
						<br>
						<table class="table guardado">
							<tr>
								<th><p>Número Inscripción:</p></th>
								<td><p><?php echo $ins; ?></p></td>
							</tr>
							<tr>
								<th><p>Codigo Nivel:</p></th>
								<td><p><?php echo $codi; ?></p></td>
							</tr>
							<tr>
								<th><p>Id Niño:</p></th>
								<td><p><?php echo $iden; ?></p></td>
							</tr>
							<tr>
								<th><p>Fecha Inscripción:</p></th>
								<td><p><?php echo $fecha; ?></p></td>
							</tr>

								<?php
								
								require_once("conecta.php");
								$sql = "INSERT INTO inscripciones (numeroinscripciones, codigo, identificacion,fechainscripcion) VALUES ('$ins','$codi','$iden','$fecha')";
								?>
							<tr>
								<td colspan="2"><?php
									$resultado = mysqli_query($conexion,$sql);
									if($resultado){
										echo"<b class= 'ok'>Registro guardado con exito :D</b><br><br>";
									}
									else{
										echo"<b class='bad'>Los datos no han sido registrados :(</b><br>";	
									}
									?>
								</td>
							</tr>
							</table>
									
									<form action="reciboinscripcion.php" method ='POST'>
									<button type="button" class="btn btn-success boton" value="Regresar" id="regresar" onclick="location = 'consultaartesano.php'"> Regresar </button>
									<?php echo "<input type='hidden' name='nins' value='".$ins."' >";?><input type="submit" class="btn btn-success boton-2" value="Generar Recibo">
									</form>

</div>


<?php 
	include("footer.html");
?>

