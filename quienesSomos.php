<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>.:: ¿Quiénes Somos?</title>
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

<body id="quienesSomos2">
	

	<?php 
		include("navbar.html");
	?>
	

<div class="container">
	<center>
	<h1 id="miGaleria">¿QUIÉNES SOMOS?</h1> <br><br><br><br>
	
	<?php require_once('./admin/conexiones/cnx_slider.php'); include("funciones.php");  $f=fecha_actual();?>
<?php
mysql_select_db($database_cnx_slider, $cnx_slider);
$query_ms_slider = "SELECT * FROM info WHERE info.estado = 1 ORDER BY info.orden";
$ms_slider = mysql_query($query_ms_slider, $cnx_slider) or die(mysql_error());
$row_ms_slider = mysql_fetch_assoc($ms_slider);
$totalRows_ms_slider = mysql_num_rows($ms_slider);
 $totalRows_ms_slider = 1;

?>
	

<?php do { ?>

	
		<section class="main container"> <!-- Inicia Pagina Principal -->		
			<article class="post clearfix col-xs-12">
				<a href="#" class="thumb pull-left">
				<img class="img-thumbnail thumb pull-left"  src="./recursos/info/<?php echo $row_ms_slider['imagen']; ?>" alt="<?php echo $row_ms_slider['titulo']; ?>" title="<?php echo $row_ms_slider['titulo']; ?>"></a>
				<h2 class="txtqs">
					<?php echo $row_ms_slider['titulo']; ?>
				</h2>					
				<p class="post-contenido text-justify">
					<?php echo $row_ms_slider['descripcion']; ?>
				</p>
					
			</article>
		</section>
	

<?php } while ($row_ms_slider = mysql_fetch_assoc($ms_slider)); ?>
	
<?php
	   mysql_free_result($ms_slider);

  ?>
</div>
<div class="container"><a href="infantil.php" class="btn btn-large btn-primary">Regresar</a></div>

<?php 
	include("footer.html");
?>


	

