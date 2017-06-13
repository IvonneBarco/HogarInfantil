<!DOCTYPE HTML>
<HTML lang = "es">
<HEAD>
<title>.:: Noticias</title>
<link rel="shortcut icon" href="./images/img_escudo.png"/>
	<META charset = "utf-8">
	<META name = "description" content = "Descripción Casa de Cultura Sandoná">
	<META name = "keyword" content = "Introduccion, Inicio, Noticias, Casa de Cultura Sandoná">
	<TITLE>Inicio</TITLE>
	<link rel="stylesheet" href= "fonts.css">
	<link rel="stylesheet" href="slider/css/style.css">
	<script src="js/script1.js"></script>
</HEAD>




<?php require_once('./admin/conexiones/cnx_slider.php'); include("funciones.php");  $f=fecha_actual();?>
<?php



mysql_select_db($database_cnx_slider, $cnx_slider);
$query_ms_slider = "SELECT * FROM slider WHERE slider.estado = 1 ORDER BY slider.orden  ";
$ms_slider = mysql_query($query_ms_slider, $cnx_slider) or die(mysql_error());
$row_ms_slider = mysql_fetch_assoc($ms_slider);
$totalRows_ms_slider = mysql_num_rows($ms_slider);
?>
<?php
?>

<table class="titulo">
<tr class="header">
	<th></th>
</tr>
</table>

<div class="contienetabla">
<table>
<?php do { ?>

	
		<section class="main container"> <!-- Inicia Pagina Principal -->		
			<article class="post clearfix col-xs-12">
				<a href="#" class="thumbe pull-left">
				<img class="img-thumbnail thumbe pull-left"  src="./recursos/uploads/<?php echo $row_ms_slider['imagen']; ?>" alt="<?php echo $row_ms_slider['titulo']; ?>" title="<?php echo $row_ms_slider['titulo']; ?>"></a>
				<h2 class="txtqs">
					<?php echo utf8_encode($row_ms_slider['titulo']); ?>
				</h2>
				<h6><?php echo $row_ms_slider['fecha']; ?> por <span class="post-autor"><a href="#">Hogar Infantil Las Mercedes</a></span></h6></p>					
				<p class="post-contenido text-justify">
					<?php echo utf8_encode($row_ms_slider['noticia']); ?> 
				</p>
				<p><a href="<?php echo $row_ms_slider['link']; ?>" class="btn btn-large btn-primary">Leer más</a></p>	
					
			</article>
		</section>		
	

<?php } while ($row_ms_slider = mysql_fetch_assoc($ms_slider)); ?>
</table></div>
<br><br>


</BODY>
</HTML>
