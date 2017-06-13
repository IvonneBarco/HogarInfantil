<!--font api================================================ -->
	<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet"> <!-- titulos-->
	<link href="https://fonts.googleapis.com/css?family=Actor" rel="stylesheet"> <!-- body-->
<!--font api================================================ -->

<?php #Rutina para que se verifique si esta iniciado sesión

		include './funciones.php'; //inclute el archivo de verificacion
		if (verificar()==1) { // si verificar retorna 1 muestra:
			$_SESSION["usuario"];
		}else{
			return 0;
		}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="description" content="ienvenidos al sitio web de la casa de la cultura de Sandoná - Nariño, en el encontraremos información relacionada conos eventos culturales de nuestro municipio">
	<meta name="keywords" content="casa-de-cultura, sandoná, nariño, danza, fiestas, colombia, corregimientos">	
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="../css/jquery-ui.css">
	<link rel="stylesheet" href="../css/fonts.css">


	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery-ui.js"></script>
	<script src="../js/jquery.slides.js"></script>
	<script src="../js/jquery.ui.datepicker-es.js"></script>
	<script src="../js/codigo.js"></script>

	<title id="titulo">.:: Proyectos Institucionales</title>
	<link rel="shortcut icon" href="../images/img_escudo.png"/>
	<a href="#" class="scrollup"><img src="../images/icon_top.png" alt=""></a>

</head>
<body>
<div class="container">
	<header>
		<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">

		<!-- cabecera -->
		<section class="img-responsive">
			<img src="../images/bg_header.png" class="img-responsive" alt="cabecera" id="cabecera">
		</section>

		<!-- fin cabecera -->

		<!-- Inicia Navbar-->
		<nav class="navbar navbar-inverse navbar-static-top navbar-cs" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-cs">
						<span class="sr-only">Desplegar/Ocultar menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="administracion.php" class="navbar-brand" id="titulo"><span class="glyphicon glyphicon-heart-empty"></span> Hogar Infantil las Mercedes de Sandoná - Nariño</a>
				</div>
				<!-- Inicia Menú-->
					<div class="collapse navbar-collapse" id="navegacion-cs">
						<ul class="nav navbar-nav">
							<li class="active"><a href="administracion.php"><span class="glyphicon glyphicon-home" id="icono"></span> Inicio</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="glyphicon glyphicon-list-alt" id="icono"></span> Registro <span class="caret"></span></a> 
								<ul class="dropdown-menu" role="menu">
									<li><a href="registro_nivel.php" id="">Niveles</a></li>
									<li class="divider"></li>
									<li><a href="regevento1.php" id="">Oferta Académica</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="glyphicon glyphicon-book" id="icono"></span> Consultar <span class="caret"></span></a> 
								<ul class="dropdown-menu" role="menu">
									<li><a href="lista_nivel.php" id="">Niveles</a></li>
									<li class="divider"></li>
									<li><a href="consultarevento.php" id="">Oferta Académica</a></li>
									<li class="divider"></li>
									<li><a href="conartesano.php" id="">Niños</a></li>
									<li class="divider"></li>
									<li><a href="coninsevento01.php" id="">Inscritos Por Niveles</a></li>
								</ul>
							</li>
							<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="glyphicon glyphicon-edit" id="icono"></span> Editar <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="modevento01.php" id="">Oferta Académica</a></li>
									<li class="divider"></li>
									<li><a href="modartesano.php" id="">Niños</a></li>
								</ul>
							</li>
							<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="glyphicon glyphicon-list" id="icono"></span> Listar <span class="caret"></span></a> 
								<ul class="dropdown-menu" role="menu">
									<li><a href="lista_nivel.php" id="">Niveles</a></li>
									<li class="divider"></li>
									<li><a href="conevento.php" id="">Oferta Académica</a></li>
									<li class="divider"></li>
									<li><a href="listarinscripciones.php" id="">Inscripciones</a></li>
								</ul>
							</li>
								<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="glyphicon glyphicon-user" id="icono"></span>Institucional<span class="caret"></span></a> 
								<ul class="dropdown-menu" role="menu">
									<li><a href="registro_sliderinfo.php" id="">Registrar Información</a></li>
									<li class="divider"></li>
									<li><a href="lista_sliderinfo.php" id="">Listar Información Institucional</a></li>
								</ul>
							</li>
							
							<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="glyphicon glyphicon-user" id="icono"></span>Proyectos<span class="caret"></span></a> 
								<ul class="dropdown-menu" role="menu">
									<li><a href="registro_slidereventos.php" id="">Registrar Proyectos</a></li>
									<li class="divider"></li>
									<li><a href="lista_slidereventos.php" id="">Listar Proyectos</a></li>
								</ul>
							</li>
							
							<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="glyphicon glyphicon-user" id="icono"></span> Personal <span class="caret"></span></a> 
								<ul class="dropdown-menu" role="menu">
									<li><a href="registro_slider.php" id="">Registrar Empleado</a></li>
									<li class="divider"></li>
									<li><a href="lista_slider.php" id="">Listar Empleado</a></li>
								</ul>
							</li>
														
							<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="glyphicon glyphicon-calendar" id="icono"></span> Calendario <span class="caret"></span></a> 
								<ul class="dropdown-menu" role="menu">
									<li><a href="../calendario/index1.php" target="_black" id="">Publicar Eventos</a></li>
								</ul>
							</li>
							<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="glyphicon glyphicon-bullhorn" id="icono"></span> Noticias <span class="caret"></span></a> 
								<ul class="dropdown-menu" role="menu">
									<li><a href="registro_slidern.php" id="">Crear Noticias</a></li>
									<li class="divider"></li>
									<li><a href="lista_slidern.php" id="">Listar Noticias</a></li>
								</ul>
							</li>
							<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="glyphicon glyphicon-th" id="icono"></span> Usuarios <span class="caret"></span></a> 
								<ul class="dropdown-menu" role="menu">
									<li><a href="registro.php" id="">Nuevo Usuario</a></li>
									<li class="divider"></li>
									<li><a href="modusuarios.php" id="">Modificar Usuario</a></li>
									<li class="divider"></li>
									<li><a href="consultarusuario.php" id="">Consultar Usuario</a></li>
								</ul>
							</li>
							<li><a href="cerrarSesion.php"><span class="glyphicon glyphicon-log-out" id="icono"></span> Salir</a></li>
						</ul>
					</div>
				<!-- Finaliza Menú-->
			</div>			
		</nav>
		<!-- Finaliza Navbar-->
		
	</header>
		<br>

<section id="personal">
   <div class="row">
      <section class="posts col-md-12">       
        <div class="migas-de-pan"> <!--Inicia migas de pan-->       
          <ol class="breadcrumb" id="miga">
            <li class="active">Usted está aquí.::</li>
            <li><a href="#">Inicio</a></li>
            <li class="active">Proyectos</li>
            <li class="active">Proyectos Institucionales</li>
          </ol>
        </div> <!--Finaliza migas de pan--> 
      </section>
    </div>
				<div align= "right"><?php  echo "<b style='color: #42a5e8';> BIENVENID@: >". $_SESSION["usuario"];"</b>" ?>
				<a href="cerrarSesion.php"><span class="glyphicon glyphicon-log-out btn-lg" title="Cerrar Sesión"></span></a></div>

                    <h2 class="post-title">
                        <p class="titulos"><u>PROYECTOS INSTITUCIONALES</u></p><br>
                    </h2>

<?php require_once('./conexiones/cnx_slider.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO eveninstitucionales (titulo, descripcion, imagen, orden, estado) VALUES (%s,%s,%s,%s,%s)",
                       GetSQLValueString($_POST['titulo'], "text"),
                       GetSQLValueString($_POST['descripcion'], "text"),
                       GetSQLValueString($_POST['imagen'], "text"),
                       GetSQLValueString($_POST['orden'], "int"),
                       GetSQLValueString($_POST['estado'], "int"));

  mysql_select_db($database_cnx_slider, $cnx_slider);
  $Result1 = mysql_query($insertSQL, $cnx_slider) or die(mysql_error());

  $insertGoTo = "lista_slidereventos.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
 // header(sprintf("Location: %s", $insertGoTo));
}
?><!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar Eventos</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">

  </head>
  <body>
  <script type="text/javascript">
function subirimagen(nombrecampo)
{
	self.name='opener';
	remote = open('gestionimagen2.php?campo='+nombrecampo, 'remote', 
	'width=400,height=150,location=no,scrollbars=yes,menubars=no,toolbars=no,resizable=no,fullscreen=no,status=yes');
	remote.focus();
	}
</script>
	<div class="container">
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
		<form method="post" name="form1" action="<?php echo $editFormAction; ?>">
		<div class="form-group">
			<label for="titulo">Título</label>
			<input type="text" class="form-control" name="titulo" value="" placeholder="Título" required>
		</div>
		<div class="form-group">
			<label for="descripcion">Descripción</label>
			<textarea name="descripcion" class="form-control" rows="3" placeholder="Descripción" required></textarea>
	  	</div>
			<br>
			<div class="form-group">
			<label for="imagen">Imágen</label>
			<input type="text" class="form-control" name="imagen" value="" >
			<br>
			<input class="btn btn-warning" type="button" name="button" id="button" value="Subir Imagen"
       onclick="javascript:subirimagen('imagen');"/>
	    </div>
	    <div class="form-group">
			<label for="orden">Orden</label>
			<input type="text" class="form-control" name="orden" value="" placeholder="Orden" required>
		</div>
		<div class="form-group">
			<label for="orden">Estado</label>
		  	<select id="seleccionar" class="form-control" name="estado" required>
			  	<option value="1" <?php if (!(strcmp(1, ""))) {echo "SELECTED";} ?>>Activo</option>
            	<option value="0" <?php if (!(strcmp(0, ""))) {echo "SELECTED";} ?>>Desactivado</option>
			</select>
		</div>
		
		<input type="submit" class="btn btn-success" value="Insertar registro">
    <input type="hidden" name="MM_insert" value="form1">
	
  </form>
    </div>
        
        <div class="col-md-2"></div>
      </div>
<footer>
			
			<div class="panel-body" id="divFooter">
				<hr class="linea">

				<div class="row">
				<div class="col-xs-3" align="center">
					<a href="http://www.mintic.gov.co"><img src="../images/logo_mintic.png" class="img-responsive" alt="minTic" id="logos"></a>
				</div>
				<div class="col-xs-3" align="center">
					<a href="http://www.talentodigital.gov.co"><img src="../images/talento-digital.png" class="img-responsive" alt="talentoDigital" id="logos"></a>
				</div>
				<div class="col-xs-3" align="center">
					<a href="https://www.icetex.gov.co"><img src="../images/logo-icetex.png" class="img-responsive" alt="Icetex" id="logos"></a>
				</div>
				<div class="col-xs-3" align="center">
					<a href="#"><img src="../images/compunet.png" class="img-responsive" alt="CompuNet" id="logos"></a>
				</div>
			</div> 
			<hr>

				<div class="col-xs-12" align="center" id="datos">
					<br>
					<span class="glyphicon glyphicon-screenshot datos"></span> <span id="contac">Dirección: Cra 5 N° 04-10 Barrio San Carlos</span><br>
					<span class="glyphicon glyphicon-phone-alt datos"></span> <span id="contac">Fax: (092) 7288086</span><br>
					<span class="glyphicon glyphicon-envelope datos"></span> <span id="contac">coordinacioncultura@sandona-narino.gov.co</span>				
				</div>
			</div>			

	</footer>	
</body>
</html>
