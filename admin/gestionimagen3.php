<!DOCTYPE HTML>
<html lang="es-ES">
<head><title>Gestionar Imagen</title>
<link rel="shortcut icon" href="../images/img_escudo.png"/>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="description" content="ienvenidos al sitio web de la casa de la cultura de Sandoná - Nariño, en el encontraremos información relacionada conos eventos culturales de nuestro municipio">
	<meta name="keywords" content="casa-de-cultura, sandoná, nariño, danza, fiestas, colombia, corregimientos">	
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="../css/jquery-ui.css">
	<link rel="stylesheet" href="../css/fonts.css">
<!--font api================================================ -->
	<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet"> <!-- titulos-->
	<link href="https://fonts.googleapis.com/css?family=Actor" rel="stylesheet"> <!-- body-->
<!--font api================================================ -->

	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery-ui.js"></script>
	<script src="../js/jquery.slides.js"></script>
	<script src="../js/jquery.ui.datepicker-es.js"></script>
	<script src="../js/codigo.js"></script>
</head>
<body id="archivo">

<?php if ((isset($_POST["enviado"])) && ($_POST["enviado"] == "form1")) {
	$nombre_archivo = $_FILES['userfile']['name'];
	move_uploaded_file($_FILES['userfile']['tmp_name'], "../recursos/personal/".$nombre_archivo);
	
?>	
    <script>
		opener.document.form1.imagen.value="<?php echo $nombre_archivo; ?>";
		self.close();
	</script>
    <?php
}
else
{?>

	<form action="gestionimagen3.php" method="post" enctype="multipart/form-data" id="form1" name="form1">	
			<b>Seleccione Imágen:</b> <br>
			<input type='file' name="userfile" class='form-control' placeholder='Imagen' aria-describedby='sizing-addon1'>
			<hr>
			<center><input type="submit" class="btn btn-success" id="button" value="Subir Imágen"></center>

	<input type="hidden" name="enviado" value="form1"/>
	</form>
<?php }?>
</body>
</html>
