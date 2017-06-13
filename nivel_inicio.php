<!DOCTYPE HTML>
<HTML lang = "es">
<HEAD>
<title>.:: Niveles</title>
	<META charset = "utf-8">
	<META name = "description" content = "Descripción Casa de Cultura Sandoná">
	<META name = "keyword" content = "Introduccion, Inicio, Noticias, Casa de Cultura Sandoná">
	<TITLE>Institucional</TITLE>
	<link rel="stylesheet" href= "fonts.css">
</HEAD>

<?php require_once('./admin/conexiones/cnx_slider.php'); ?>
	<?php
		mysql_select_db($database_cnx_slider, $cnx_slider);
		$query_ms_slider = "SELECT * FROM niveles";
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
				<img class="" src="./recursos/info/<?php echo $extraido['imagen']; ?>" alt="<?php echo $extraido['nombre']; ?>" title="<?php echo $extraido['nombre']; ?>" id="imgniveles">
			</div>
			<h4><?php echo $extraido['nombre']; ?></h4>
			<p><?php echo $extraido['descripcion']; ?></p>
			<p><?php echo "Duración: ".$extraido['duracion']; ?></p>	
			<!--<a href="niveles.php" class="btn btn-large btn-primary">Leer más</a>-->
		</div>

		<div class="col-md-4 col-xs-12">				      
			<div class="info-img">
				<img class="" src="./recursos/info/<?php echo $extraido1['imagen']; ?>" alt="<?php echo $extraido['nombre']; ?>" title="<?php echo $extraido['nombre']; ?>" id="imgniveles">
			</div>
			<h4><?php echo $extraido1['nombre']; ?></h4>
			<p><?php echo $extraido1['descripcion']; ?></p>
			<p><?php echo "Duración: ".$extraido1['duracion']; ?></p>	
			<!--<a href="niveles.php" class="btn btn-large btn-primary">Leer más</a>-->
		</div>

		<div class="col-md-4 col-xs-12">				      
			<div class="info-img">
				<img class="" src="./recursos/info/<?php echo $extraido2['imagen']; ?>" alt="<?php echo $extraido['nombre']; ?>" title="<?php echo $extraido['nombre']; ?>" id="imgniveles">
			</div>
			<h4><?php echo $extraido2['nombre']; ?></h4>
			<p><?php echo $extraido2['descripcion']; ?></p>
			<p><?php echo "Duración: ".$extraido2['duracion']; ?></p>	
			<!--<a href="niveles.php" class="btn btn-large btn-primary">Leer más</a>-->
		</div>

<?php
	   mysql_free_result($ms_slider);
?>


	</BODY>
	</HTML>
