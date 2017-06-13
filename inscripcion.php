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
	<h1 id="miGaleria">Bienvenid@,<br><h1> sus datos ingresados son:</h1> <br><br>
	<p align="right"><a href="ayuda.php" class="glyphicon glyphicon-question-sign btn-lg text-left"><label>Ayuda</label></a></p><br><br>


						<?php
							$ced= $_POST['ide'];
							$nom= $_POST['nomape'];
							$fechainscripcion ='now()' ;
							


							//$conexion = mysqli_connect("localhost","root","","correccion9");
							require_once("conecta.php");
							$sql = "SELECT * from inscripciones order by numeroinscripciones desc";
							$resultado = mysqli_query($conexion,$sql);
							if($registro=mysqli_fetch_assoc($resultado))
							         $ninscripcion=$registro['numeroinscripciones']+1;
							       else
							         $ninscripcion = 101;
								?>
									<form name = 'fins2' action='guardarinscripcion.php' method='POST'>	
			
									<table class="mitable-center" width='70%'>
											<tr>
												<th><p>Identificación</p></th>
												<td><input type='text' class='form-control input-xlargo' name='ide' value='<?php echo $ced;?>' readonly='true'><br></td>
											</tr>
											<tr>
												<th><p>Nombre</p></th>
												<td><input type='text' class='form-control input-xlargo' name='nomape' value='<?php echo $nom;?>' readonly='true'><br></td>
											</tr>
											<tr>
												<th><p>Numero Inscripción</p></th>
												<td><input type = 'text' class='form-control input-xlargo' name = 'nins' value='<?php echo $ninscripcion;?>' readonly='true'><br></td>
											</tr>
									</table>

									<br><br><br><br>
									<h2 class="font-luck">Seleccione el Nivel a Inscribirse</h2><br>

									<!--<form name = 'fins2' action='guardarinscripcion.php' method='POST'>	-->									
										<table class="mitable-center" width='70%'>
											<tr>
												<th><p>Nivel</p></th>
												<td>
													<?php
													$hoy = date("Y-m-d");
													?>
													<select name='codi' class='form-control input-xlargo'>	
														<?php
															$sql="SELECT  niveles.nombre as nomb, oferta.codoferta, oferta.codigo, oferta.fecha , oferta.version FROM niveles, oferta where niveles.codigo=oferta.codigo and estado='Activo'";
															$rs=mysqli_query($conexion, $sql);
															while($row=mysqli_fetch_array($rs)){
																	if ($hoy<=$row['fecha'])
																echo utf8_encode("<option value=".$row['codigo'].">".$row['nomb']." - ".$row['version']."</option>");
															}
														?>
													</select><br>
												</td>
											</tr>
											<tr>
												<th><p>Fecha Inscripción</p></th>
												<td><input readonly="true" class='form-control input-xlargo' type="date" name="fechainscripcion" value="<?php echo date ("Y-m-d");?>"><br></td>
											</tr>
									
											<tr>
												<td colspan="2">
													<center>
													<br>
														<input type="hidden" name="ordenevento">
														<input id="guardar" class="btn btn-success btn-lg" type="submit" value="Guardar">
														<input id="guardar" class="btn btn-default btn-lg" type="reset" value="Limpiar">	
													</center>
												</td>
											</tr>	
										</table>
									</form>
									<br><br>


</div>


<?php 
	include("footer.html");
?>

