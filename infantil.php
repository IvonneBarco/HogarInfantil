<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>.:: Hogar Infantíl - Las Mercedes</title>
    <link rel="shortcut icon" href="./img/favicon.png"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

	<link id="callCss" rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />
	<link id="callCss"rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8" />

	<link rel="stylesheet" href="slider/css/estiloslider.css">
	<link rel="stylesheet" href="slider/css/style.css">
	<link rel="stylesheet" href="slider/css/stylefont.css">	
	<link rel="stylesheet" href="css/social.css">

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

	<body>
		<!-- Barra red social==============================-->
		<div class="social">
			<ul>
				<li id="facebook">
					<a href="https://www.facebook.com/" target="_black" id="facebook-" class="facebook-">
						<img src="images/facebook.png" alt="facebook" id="facebook-">
					</a>
				</li>
				<li id="twitter">
					<a href="https://twitter.com/?lang=es" target="_black" id="twitter-" class="twitter-">
						<img src="images/twitter.png" alt="twitter" id="twitter-">
					</a>
				</li>
				<li id="youtube">
					<a href="https://www.youtube.com" target="_black" id="youtube" class="youtube">
						<img src="images/youtube.png" alt="youtube" id="youtube">
					</a>
				</li>
				<li id="googleplus">
					<a href="https://plus.google.com/collections/featured" target="_black" id="googleplus" class="googleplus">
						<img src="images/googleplus.png" alt="googleplus" id="googleplus">
					</a>
				</li>
			</ul>	
		</div>
		<!-- Fin Barra red social==============================-->

			
<div id="headerSection">
			<div class="container">
				
				
				<div class="navbar">

					<!-- El logotipo y el icono que despliega el menú se agrupan para mostrarlos mejor en los dispositivos móviles -->
					<div class="navbar-header">
				    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				    		<span class="sr-only"></span>
				    		<span class="icon-bar"></span>
				    		<span class="icon-bar"></span>
				    		<span class="icon-bar"></span>
				    	</button>
				    	<a class="navbar-brand" href="#" id="logo"><img src="img/logo1.png" alt="" / class="img-logo"></a>
					</div>

		            <!-- Agrupar los enlaces de navegación, los formularios y cualquier otro elemento que se pueda ocultar al minimizar la barra -->
  					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav mynav nav2">				
							<li><a href="#quienesSomos" class="rojo">Quiénes Somos</a></li> 
							<li><a href="#niveles" class="azul">Niveles</a></li>							
							<li><a href="#personal" class="rosa">Personal</a></li>
							<li><a href="#eventos" class="amarillo">Eventos</a></li>
							<li><a href="#galeria" class="violeta">Galería</a></li>
							<li><a href="#preinscripcion" class="naranja">Preinscripción</a></li>
							<li><a href="calendario/index.php" target="_blank" class="verde" label="ver"><span class="glyphicon glyphicon-calendar"></span> Ver Eventos</a></li>
						</ul>				

					</div>
					
				</div>
			</div>
</div>

		<br><br><br>
		<!-- Inicia Slider=========================================================== -->
				
		<div class="hidden-xs hidden-sm">
			<center>
				<a href="noticia.php"><?php include("slider1.php");?><h5><span class="glyphicon glyphicon-eye-open btn-lg"></span>Ver noticia</h5><br><br><br></a>
				<br>
				<br>
				<script src="slider/js/wowslider.js"></script>
				<script src="slider/js/script.js"></script>
			</center>
		</div>

		<!-- Finaliza Slider=========================================================== -->	

		<!-- Quienes Somos======================================== -->
		<div id="quienesSomos"> 			
			<div class="container">	
				<div class="row">
				<div class="col-xs-12"><h1 class="qtitulo">¿QUIÉNES SOMOS?</h1><br><br></div>
		    	<?php 
					include("sliderinfo.php"); // Incluimos nuestro archivo de conexión con la base de datos 
				?>
		    	</div>
			</div> 
		</div>

		<!-- Niveles======================================== -->
		<div id="niveles"> 			
			<div class="container">	
				<div class="row">
				<div class="col-xs-12"><h1 class="qtitulo">NIVELES ESCOLARES</h1><br><br></div>
		    	<?php 
					include("nivel_inicio.php"); // Incluimos nuestro archivo de conexión con la base de datos 
				?>
		    	</div>
		    	<br><br>
		    	<a href="niveles.php" class="btn btn-large btn-primary">Ver más</a>
			</div> 
		</div>

		<!-- Personal======================================== -->
		<div id="personal">
			<div class="col-xs-12"><h1 class="cntr">EQUIPO DE TRABAJO</h1>
			<h3>Contamos con el profesional especializado para brindar el mejor trato y cuidado a nuestros pequeños. </h3></div>
			<div class="container">	
				
				<?php 
					include("personal.php"); // Incluimos nuestro archivo de conexión con la base de datos 
				?>		
			</div>
			<div class="container"><a href="equipo.php" class="btn btn-large btn-primary">Ver más</a></div>
		</div>

		<!-- Eventos======================================== -->
		<div id="eventos">
			<div class="col-xs-12"><h1 class="cntr">EVENTOS INSTITUCIONALES</h1>
			<h3>Queremos que haga parte de nuestros eventos y actividades. </h3></div>
			<div class="container">	
				
				<div class="tabbable tabs">
					<div class="tab-content label-primary">

						<div class="tab-pane active" id="all">
							<ul class="thumbnails">

							<?php 
								include("slidereventos.php"); // Incluimos nuestro archivo de conexión con la base de datos 
							?>	
							</ul> 
						   <a href="eventos.php" class="btn btn-large btn-primary">Ver más</a>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- Galería======================================== -->
		<div id="galeria">
			<div class="col-xs-12"><h1 class="cntr">GALERÍA</h1>
			<p>Conozca un poco de nuestro Hogar Infantil. </p></div>

			<?php 
				include("miGaleria.php");
			?>
		</div>
		<!-- Preinscripción======================================== -->
		<div id="preinscripcion">
			<div class="col-xs-12"><h1 class="cntr">PRE-INSCRIPCIONES</h1>
				<br>

				<!--<h3>SISTEMA DE PRE-INSCRIPCIóN A NIVELES</h3>-->
				<p>
					Por favor Ingrese el número de identificación del niño, 
					luego haga clic en "Buscar", para verificar si ya está 
					Preinscrito en nuestro sistema.
				</p>
				<p>
					Si desea volver a generar el Recibo, 
					debe ingresar el "Código de Inscripción" que fue 
					generado al momento de realizar su pre-inscripción.
				</p> <br> <br>
			</div>
			<div class="container">	
				<div class="row form-cover">	
					<div class="col-xs-12 ">
						
						<div class="col-xs-6">
							<form name="frmconsulta" class="form-horizontal" action ="consulta.php" method ="GET">
								<fieldset>
								  <div class="control-group">
									<img src="img/img-29.png" style="width: 100%; height:100% margin-top: 20px;">
									<div class="controls">
									  <input type="text" class="input-xlarg" id="input01" name="identificacion" placeholder="Identificación" >
									 <br><br>
									</div>
								  </div>
								 
									<button type="submit" class="btn btn-large btn-primary">Buscar</button>	<br><br>								
								</fieldset>
						  	</form>
						  <br><br>
						</div>				

						<div class="col-xs-6">
							<form name="frmconsulta" class="form-horizontal" action ="reciboinscripcion.php" method ="POST">
								<fieldset>
								  <div class="control-group">
									<img src="img/img-28.png" style="width: 78%; height: 78% margin-top: 20px;">
									<div class="controls">
									  <input type="text" class="input-xlarg" name="nins" id="nins" placeholder="Código de Inscipción" >
									 <br><br>
									</div>
								  </div>
									<button type="submit" class="btn btn-large btn-primary" target="_black">Buscar</button>	 <br><br>				
								</fieldset>
						  </form>
						  <br><br>
						</div>
						
						
					</div> 
				</div> 
			</div> 
		</div>

		        
		<div id="footer">
			<hr class="linea clear"/>
			<br>
			<div class="container">
				<div class="row">
					<div class="col-xs-3" align="center">
						<a href="http://www.mintic.gov.co"><img src="./img/logo_mintic.png" class="img-responsive" alt="minTic" id="logos"></a>
					</div>
					<div class="col-xs-3" align="center">
						<a href="http://www.talentodigital.gov.co"><img src="./img/talento-digital.png" class="img-responsive" alt="talentoDigital" id="logos"></a>
					</div>
					<div class="col-xs-3" align="center">
						<a href="https://www.icetex.gov.co"><img src="./img/logo-icetex.png" class="img-responsive" alt="Icetex" id="logos"></a>
					</div>
					<div class="col-xs-3" align="center">
						<a href="#"><img src="./img/compunet.png" class="img-responsive" alt="CompuNet" id="logos"></a>
					</div>
				</div> 
			</div>

			<div class="footerSection container">	

				<div class="col-xs-12">
					<span class="glyphicon glyphicon-screenshot datos"></span> <span id="contac"><b>Dirección:</b> Kra 1 No. 06-16 Barrio Belen Sandoná-Nariño</span><br>
					<span class="glyphicon glyphicon-phone-alt datos"></span> <span id="contac"><b>Telefono:</b> 7288043</span><br>
					<span class="glyphicon glyphicon-envelope datos"></span> <span id="contac"><b>Email:</b> hogarlasmercedes2014@gmail.com</span>	
				</div>
								
			</div>
			<div class="copyright footerSection container"><p>  Sandoná (N) 2016 | Desarrollado por <a href="#footer">COMPUNET</a></p></div>
		</div>

		<!-- Scroll -->

		<!--<a href="#" class="go-top" ><i class="glyphicon glyphicon-arrow-up"></i></a>-->
		<a href="#" class="go-top" ><img src="img/icon_top.png" alt=""></i></a>


	</body>
</html>
