<!DOCTYPE HTML>
<HTML lang = "es">
<HEAD>
<title>.:: Eventos Institucionales</title>
	<META charset = "utf-8">
	<META name = "description" content = "Descripción Casa de Cultura Sandoná">
	<META name = "keyword" content = "Introduccion, Inicio, Noticias, Casa de Cultura Sandoná">
	<TITLE>Eventos Institucionales</TITLE>
	<link rel="stylesheet" href= "fonts.css">
</HEAD>


<?php require_once('./admin/conexiones/cnx_slider.php'); include_once("funciones.php");  $f=fecha_actual();?>
<?php
	mysql_select_db($database_cnx_slider, $cnx_slider);
	$query_ms_slider = "SELECT * FROM eveninstitucionales WHERE eveninstitucionales.estado = 1 ORDER BY eveninstitucionales.orden";
	$ms_slider = mysql_query($query_ms_slider, $cnx_slider) or die(mysql_error());
	
	mysql_data_seek($ms_slider, 0);
	$extraido = mysql_fetch_array($ms_slider);

	mysql_data_seek($ms_slider, 1);
	$extraido1 = mysql_fetch_array($ms_slider);

	mysql_data_seek($ms_slider, 2);
	$extraido2 = mysql_fetch_array($ms_slider);
?>

	<li class="col-sm-4 col-xs-12">
		<div class="thumbnail">
			<div class="blockDtl">
				<img class="img-thumbnail" src="./recursos/eveninstitucionales/<?php echo $extraido['imagen']; ?>" alt="<?php echo $extraido['titulo']; ?>" title="<?php echo $extraido['titulo']; ?>" id="imgevento" >
				<h4 class="font-luck"><?php echo $extraido['titulo']; ?></h4>
				<!--<h6>Octubre 27</h6>-->
				<p><?php echo substr($extraido['descripcion'], 0, 100)."..."; ?></p>
				<p><a href="eventos.php" class="btn btn-large btn-primary">Leer más</a></p>					                
			</div>
		</div>
	</li>

	<li class="col-sm-4 col-xs-12">
		<div class="thumbnail">
			<div class="blockDtl">
				<img class="img-thumbnail" src="./recursos/eveninstitucionales/<?php echo $extraido1['imagen']; ?>" alt="<?php echo $extraido1['titulo']; ?>" title="<?php echo $extraido1['titulo']; ?>" id="imgevento">
				<h4 class="font-luck"><?php echo $extraido1['titulo']; ?></h4>
				<!--<h6>Octubre 27</h6>-->
				<p><?php echo substr($extraido1['descripcion'], 0, 100)."..."; ?></p>
				<p><a href="eventos.php" class="btn btn-large btn-primary">Leer más</a></p>					                
			</div>
		</div>
	</li>

	<li class="col-sm-4 col-xs-12">
		<div class="thumbnail">
			<div class="blockDtl">
				<img class="img-thumbnail" src="./recursos/eveninstitucionales/<?php echo $extraido2['imagen']; ?>" alt="<?php echo $extraido2['titulo']; ?>" title="<?php echo $extraido2['titulo']; ?>" id="imgevento">
				<h4 class="font-luck"><?php echo $extraido2['titulo']; ?></h4>
				<!--<h6>Octubre 27</h6>-->
				<p><?php echo substr($extraido2['descripcion'], 0, 100)."..."; ?></p>
				<p><a href="eventos.php" class="btn btn-large btn-primary">Leer más</a></p>					                
			</div>
		</div>
	</li>

<?php
	mysql_free_result($ms_slider);
?>


</BODY>
</HTML>
		