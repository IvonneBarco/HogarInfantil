<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>.:: Equipo de Trabajo</title>
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

<body id="personal2">
	<?php 
		include("navbar.html");
	?>


<div class="container">
	<center>
	<h1 id="miGaleria">EQUIPO DE TRABAJO</h1> <br><br><br><br>
<?php require_once('./admin/conexiones/cnx_slider.php'); ?>
<?php
	mysql_select_db($database_cnx_slider, $cnx_slider);
	$query_ms_slider = "SELECT * FROM personal";
	$ms_slider = mysql_query($query_ms_slider, $cnx_slider) or die(mysql_error());
	$row_ms_slider = mysql_fetch_assoc($ms_slider);
	$totalRows_ms_slider = mysql_num_rows($ms_slider);
?>


<?php do { ?>
	<div class="tabbable tabs">
		<div class="tab-content label-primary">
			<div class="tab-pane active" id="all">
				<ul class="thumbnails">
					<li class="col-sm-4 col-xs-12">
						<div class="thumbnail">
							<div class="blockDtlp">
								<a href="#" ><img class="img-responsive" src="recursos/personal/<?php echo $row_ms_slider['imagen']; ?>"></a>
						        <h4><?php echo $row_ms_slider['nombres']; ?></h4>
						        <h5><?php echo $row_ms_slider['funciones']; ?></h5>
						        <p><?php echo $row_ms_slider['email']; ?> </p>
						       	<a class="facebook1" href="#"><img class="img-responsive" src="img/thum-f-icon.png"></a>
						        <a class="twitter1" href="#"><img class="img-responsive" src="img/thum-t-icon.png"></a>
								<a class="pin1" href="#"><img class="img-responsive" src="img/thum-g-icon.png"></a>
							</div>
						</div>
					</li>
				</ul> 						   
			</div>
		</div>
	</div>	


<?php } while ($row_ms_slider = mysql_fetch_assoc($ms_slider)); ?>

<?php
	   mysql_free_result($ms_slider);
  ?>


</div>
<div class="container"><a href="infantil.php" class="btn btn-large btn-primary">Regresar</a></div>


<?php 
	include("footer.html");
?>
