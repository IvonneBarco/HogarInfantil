<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>.:: Niveles</title>
    <link rel="shortcut icon" href="./img/favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link id="callCss" rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />
	<link id="callCss"rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8" />
	<link id="callCss"rel="stylesheet" href="css/style_body.css" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="css/jquery-ui.css">

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
	<script src="js/jquery-ui.js"></script>
	<script src="js/default.js"></script>
	<script src="js/my_js.js"></script>
	<script src="js/codigo.js"></script>
<!--Scripts .js================================================ -->

</head>
	<body id="niveles2">				
	<?php 
		include("navbar.html");
	?>


<div class="container">
	<center><h1 id="miGaleria">NIVELES ESCOLARES</h1></center> <br><br>
	
	<?php require_once('./admin/conexiones/cnx_slider.php'); ?>
	<?php
		mysql_select_db($database_cnx_slider, $cnx_slider);
		$query_ms_slider = "SELECT * FROM niveles";
		$ms_slider = mysql_query($query_ms_slider, $cnx_slider) or die(mysql_error());
		$row_ms_slider = mysql_fetch_assoc($ms_slider);
		$totalRows_ms_slider = mysql_num_rows($ms_slider);
	?>

	<?php do { ?>
               
		<div class="col-md-4 col-xs-12">				      
			<div class="info-img"><img class="" id="imgniveles" src="./recursos/info/<?php echo $row_ms_slider['imagen']; ?>" alt="<?php echo $row_ms_slider['nombre']; ?>" title="<?php echo $row_ms_slider['nombre']; ?>"></div>
			<h4><?php echo $row_ms_slider['nombre']; ?></h4>
			<p><?php echo $row_ms_slider['descripcion']; ?></p>
			<p><?php echo "Duración: ".$row_ms_slider['duracion']; ?></p>
		</div>

	<?php } while ($row_ms_slider = mysql_fetch_assoc($ms_slider)); ?>

	<?php
		   mysql_free_result($ms_slider);
	?>


</div>

<div class="container"><a href="infantil.php" class="btn btn-large btn-primary">Regresar</a>  <a href="requisitos.php" class="btn btn-large miboton" target="_black">Requisitos</a></div> 

<?php 
	include("footer.html");
?>