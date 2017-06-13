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
<title id="titulo">.:: Registro de Modalidades</title>
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
						<li class="active">Modalidad</li>
					</ol>
				</div> <!--Finaliza migas de pan-->	

				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

				<div id="divIndex">	
				<div align= "right"><?php  echo "<b style='color: #42a5e8';> BIENVENID@: >". $_SESSION["usuario"];"</b>" ?>
				<a href="cerrarSesion.php"><span class="glyphicon glyphicon-log-out btn-lg" title="Cerrar Sesión"></span></a></div>
					<h2 class="post-title">
						<p class="titulos"><u>MODALIDAD DE PARTICIPACION EN EVENTO</u></p>
					</h2>
					<br><br>
						<div class="row">
							<div class="col-lg-12">	
					  		<?php
								$mcod;
								require_once("conecta.php"); //llama al archivo encargado de establecer la conexión, a partir de este momento ya existe la variable $conexion
								$tevento = mysqli_query($conexion,"SELECT * FROM tipoevento");
								$resultado = mysqli_query($conexion,"SELECT tipoevento.nombre as tipo, modalidad.codigomodalidad as codmod, modalidad.nombremodalidad as nommod FROM tipoevento, modalidad where tipoevento.codigo = modalidad.tipoevento_codigo");
								echo "<div class='center-block'>";
								echo "<div class='table-responsive'>";
								echo "<center><table class='table table-hover table-bordered' align='center' id='tabla-center'>\n";
								echo "<tr><th>Código Modalidad</th><th>Tipo de evento</th><th>Modalidad</th></tr>\n";
								$mcod=100;
								while ($registro = mysqli_fetch_assoc($resultado)){
								echo "<tr><td>".$registro['codmod']."</td><td>".utf8_encode($registro['tipo'])."</td><td>".utf8_encode($registro['nommod'])."</td></tr>\n";
								$mcod=$registro['codmod'];
								}
								$mcod+=1;
								echo"</table></center>\n";
							?>
							</table></center></div></div>
							</div>
						</div>
							<br><br>

							<center><span class="letter-cs">AGREGAR NUEVA MODALIDAD</span></center><br>
		
							<form  action="regmodalidad2.php" method="POST">							
								

								<div class="row">
									<div class="col-lg-12">
										<table class="table table-bordered mostrar">
										<table align="center">
										    <tr>
										        <td><b>Código de la Modalidad </b></td>
										        <td><b><input type='text' class='form-control' name='codigomodalidad' id='codigomodalidad' value="<?php echo $mcod;?>" readonly placeholder='' aria-describedby='sizing-addon1'></b></td>
										    </tr>										    
										    <tr>
										       	<td><b>Tipo Evento </b></td>
										       	<td>
											       	<select name="codeve" id="codeve" class="form-control" required>
											       		<option>-- Seleccionar ---</option>
						                                <?php 
						                                	while ($regevento = mysqli_fetch_assoc($tevento)){
															echo "<option value='".$regevento['codigo']."'>".$regevento['nombre']."</option>";	}
						                                ?>                               
						                            </select>
					                            </td>
										    </tr>
										    <tr>
										       	<td><b>Nombre de la Modalidad </b></td>
										       	<td><input type='text' class='form-control' name='nombremodalidad' id='nombremodalidad' required placeholder='Nombre modalidad' aria-describedby='sizing-addon1'></td>
										    </tr>
										    <tr>
	                                            <td colspan="2">
	                                                <center><button type="submit" class="btn btn-success">Guardar</button>  
	                                                <button type="reset" class="btn btn-default">Limpiar</button></center>
	                                            </td>
	                                        </tr>
										</table>
									</div>
								</div>						
								
							</form>
	                        
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
			<li class="active">Modalidad</li>
		</ul>
	</div>
</div>		
</body>
</html>
