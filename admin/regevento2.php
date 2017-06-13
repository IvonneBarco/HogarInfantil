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

<title id="titulo">.:: Registar Oferta Académica</title>
<link rel="shortcut icon" href="../images/img_escudo.png"/>

	<a href="#" class="scrollup"><img src="../images/icon_top.png" alt=""></a>
	<!-- Inicia Head -->
	<?php include("adminavbar.html") ?>
	<!-- Finaliza Head -->

		<!-- Inicia Slider -->
		<!--<div id="divMiSlider"></div>-->
		<!-- Finaliza Slider -->
	
	
	<br>
	<section> <!-- Inicia Pagina Principal -->		

		<div class="row"> <!-- Inicia contenedor-->			

			<section class="posts col-md-12">				
				<div class="migas-de-pan"> <!--Inicia migas de pan-->				
					<ol class="breadcrumb" id="miga">
						<li class="active">Usted está aquí.::</li>
						<li><a href="#">Inicio</a></li>
						<li class="active">Registro</li>
						<li class="active">Registrar Oferta Académica</li>
					</ol>
				</div> <!--Finaliza migas de pan-->	

				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

				<div id="divIndex">	
				<div align= "right"><?php  echo "<b style='color: #42a5e8';> BIENVENID@: >". $_SESSION["usuario"];"</b>" ?>
				<a href="cerrarSesion.php"><span class="glyphicon glyphicon-log-out btn-lg" title="Cerrar Sesión"></span></a></div>
					<h2 class="post-title">
						<p class="titulos"><u>FORMULARIO PARA REGISTRO DE NIVELES</u></p>
					</h2><br><br>						
								

								<div class="row">
									<div class="col-lg-12">
										<table class="table table-bordered guardado">
										    <tr>
										    <td>
										    <center>
										    	<?php
										    		$coferta = $_POST['codoferta'];
													$codigo = $_POST['codigo'];
													$estado = $_POST['estado'];
													$version = $_POST['version'];
													$fecha = $_POST['fecha'];
													$valor = $_POST['valor'];
													$descripcion = $_POST['descripcion'];
													$coferta=str_pad($coferta, 5,"0",0);
													echo "<b>Código Oferta:</b> ".$coferta."<br><b>Nivel:</b> ".$codigo."<br><b>Estado: </b>".$estado."<br><b>Versión: </b>".$version."<br><b>Fecha: </b>".$fecha."<br><b>Valor: </b>".$valor."<br><b>Descripción: </b>".$descripcion;

													//conexion a base de datos
													require_once("conecta.php");
													//construccion de la clausula sql
													$sql = "INSERT INTO oferta(codoferta,codigo,estado,version,fecha,valor,descripcion)VALUES('$coferta','$codigo','$estado','$version','$fecha','$valor','$descripcion')";
													//ejecucion de la instruccion
													$resultado = mysqli_query($conexion,$sql);
													if($resultado){
														echo"<p class='ok'><b>Registro guardado con exito</b></p>";
													}
													else{
														echo"<p class='bad'><b>No se guardaron los datos</b></p>";	
													}
												?>
												<button type="button" class="btn btn-success" value="Regresar" id="regresar" onclick="location = 'regevento1.php'"> Regresar </button>
										    </center>
										    </td>
										    </tr>
										</table>
									</div>
								</div>	
	                        <br>					
				</div>
				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
				
			</section>
			<!-- <?php #include("adminaside.html") ?> -->
		</div>
	</section>	<!-- Finaliza Pagina Principal -->

		
	<?php include("adminfooter.html") ?>
	<div class="col-xs-12" align="center">
		<ul class="list-inline text-right" id="pie">
			<li><a href="#">Inicio</a></li>
			<li class="active">Registro</li>
			<li class="active">Registrar Oferta Académica</li>
		</ul>
	</div>
</div>		
</body>
</html>
