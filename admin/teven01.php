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
<title id="titulo">.:: Registro de Niveles</title>

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
						<li class="active">Niveles</li>
					</ol>
				</div> <!--Finaliza migas de pan-->	

				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

				<div id="divIndex">	
				<div align= "right"><?php  echo "<b style='color: #42a5e8';> BIENVENID@: >". $_SESSION["usuario"];"</b>" ?>
				<a href="cerrarSesion.php"><span class="glyphicon glyphicon-log-out btn-lg" title="Cerrar Sesión"></span></a></div>
					<h2 class="post-title">
						<p class="titulos"><u>FORMULARIO PARA REGISTRO DE NIVELES</u></p>
					</h2>
					<br><br>

					<center><span class="letter-cs">NIVELES REGISTRADOS</span></center><br>
						<div class="row">
							<div class="col-lg-12">	
					  		<?php
								include("conecta.php");
								$ucod;
								$resultado = mysqli_query($conexion,"SELECT codigo, nombre, descripcion, imagen, duracion FROM niveles order by codigo asc");
								echo "<div class='center-block'>";
								echo "<div class='table-responsive'>";
								echo "<center><table class='table table-hover table-bordered align='center' id='tabla-center'>\n";
								echo "<tr><th>Código</th><th>Nombre</th><th>Descripción</th><th>Imagen</th><th>Duración</th></tr>\n";
								$ucod=1;
								while ($registro = mysqli_fetch_assoc($resultado)){
									echo "<tr><td>".$registro['codigo']."</td><td>".utf8_encode($registro['nombre'])."</td><td>".utf8_encode($registro['descripcion'])."</td><td>"."</td><td>".utf8_encode($registro['imagen'])."</td><td>".utf8_encode($registro['duracion'])."</td></tr>\n";
									$ucod=$registro['codigo']+1;
								}
								echo"</table></center>\n";
								mysqli_close($conexion);
							?>
							</table></center></div></div>
							</div>
						</div>
							<br><br>

							<center><span class="letter-cs">AGREGAR NUEVO NIVEL</span></center><br>
		
							<form  action="teven02.php" method="POST" onSubmit="return validacion();">							
								

								<div class="row">
									<div class="col-lg-12">
										<table align="center">
										    <tr>
										        <td><b>Código Nivel</b></td>
										        <td><b><input type='text' class='form-control' name='ncod' id='ncod' value="<?php echo $ucod;?>" readonly placeholder='' aria-describedby='sizing-addon1'></b></td>
										    </tr>
										    <tr>
										       	<td><b>Nombre Nivel</b></td>
										       	<td><input type='text' class='form-control' name='ntip' id='ntip' required placeholder='Nombre Evento' aria-describedby='sizing-addon1'></td>
										    </tr>
										    
										    <tr>
										       	<td><b>Descripción</b></td>
										       	<td><input type='text' class='form-control' name='descripcion' id='ntip' required placeholder='Descripción' aria-describedby='sizing-addon1'></td>
										    </tr>
										    
										     <tr>
										       	<td><b>Duración</b></td>
										       	<td><input type='text' class='form-control' name='duracion' id='ntip' required placeholder='Duración' aria-describedby='sizing-addon1'></td>
										    </tr>
										    <tr>
										    	<td><b>Imagen</b></td>
										    	<td>
													<input type="text" class="form-control" name="imagen" value=""  required placeholder='Imagen'>
													<input class="btn btn-warning" type="button" name="button" id="button" value="Subir Imagen"
										       onclick="javascript:subirimagen('imagen');"/>
											    </td>
										    </tr>
										    
										    <tr>
										    	<td colspan="2"><br><center><button type="submit" class="btn btn-success">Enviar</button></center></td>
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
			<li class="active">Niveles</li>
		</ul>
	</div>
</div>		
</body>
</html>
