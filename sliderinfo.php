<!DOCTYPE HTML>
<HTML lang = "es">
<HEAD>
<title>.:: Informacion Institucional</title>
	<META charset = "utf-8">
	<META name = "description" content = "Descripción Casa de Cultura Sandoná">
	<META name = "keyword" content = "Introduccion, Inicio, Noticias, Casa de Cultura Sandoná">
	<title>.:: ¿Quiénes Somos?</title>
	<link rel="stylesheet" href= "fonts.css">
</HEAD>


<?php require_once('./admin/conexiones/cnx_slider.php'); include("funciones.php");  $f=fecha_actual();?>
<?php
mysql_select_db($database_cnx_slider, $cnx_slider);
$query_ms_slider = "SELECT * FROM info WHERE info.estado = 1 ORDER BY info.orden";
$ms_slider = mysql_query($query_ms_slider, $cnx_slider) or die(mysql_error());

mysql_data_seek($ms_slider, 0);
$extraido = mysql_fetch_array($ms_slider);

mysql_data_seek($ms_slider, 1);
$extraido1 = mysql_fetch_array($ms_slider);

mysql_data_seek($ms_slider, 2);
$extraido2 = mysql_fetch_array($ms_slider);

?>
   
		<div class="col-md-4 col-xs-12">				      
			<div class="info-img">
				<img class="img-size" src="./recursos/info/<?php echo $extraido['imagen']; ?>" alt="<?php echo $extraido['titulo']; ?>" title="<?php echo $extraido['titulo']; ?>">
			</div>

			<h4><?php echo $extraido['titulo']; ?></h4>
			<p><?php echo substr($extraido['descripcion'], 0, 70)."..."; ?></p>
			<a href="quienesSomos.php" class="btn btn-large btn-primary">Leer más</a>
		</div>

		<div class="col-md-4 col-xs-12">				      
			<div class="info-img">
				<img class=" img-size" src="./recursos/info/<?php echo $extraido1['imagen']; ?>" alt="<?php echo $extraido1['titulo']; ?>" title="<?php echo $extraido1['titulo']; ?>">
			</div>

			<h4><?php echo $extraido1['titulo']; ?></h4>
			<p><?php echo substr($extraido1['descripcion'], 0, 80)."..."; ?></p>
			<a href="quienesSomos.php" class="btn btn-large btn-primary">Leer más</a>
		</div>

		<div class="col-md-4 col-xs-12">				      
			<div class="info-img">
				<img class=" img-size" src="./recursos/info/<?php echo $extraido2['imagen']; ?>" alt="<?php echo $extraido2['titulo']; ?>" title="<?php echo $extraido2['titulo']; ?>">
			</div>

			<h4><?php echo $extraido2['titulo']; ?></h4>
			<p><?php echo substr($extraido2['descripcion'], 0, 80)."..."; ?></p>
			<a href="quienesSomos.php" class="btn btn-large btn-primary">Leer más</a>
		</div>
		


<?php

	   mysql_free_result($ms_slider);
?>