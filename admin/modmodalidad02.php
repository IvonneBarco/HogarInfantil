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
<title id="titulo">.:: Modificar Modalidad</title>
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
						<li class="active">Editar</li>
                        <li class="active">Modalidad </li>
					</ol>
				</div> <!--Finaliza migas de pan-->	

				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

				<div id="divIndex">	
				<div align= "right"><?php  echo "<b style='color: #42a5e8';> BIENVENID@: >". $_SESSION["usuario"];"</b>" ?>
				<a href="cerrarSesion.php"><span class="glyphicon glyphicon-log-out btn-lg" title="Cerrar Sesión"></span></a></div>
					<h2 class="post-title">
						<p class="titulos"><u>MODIFICAR MODALIDAD</u></p>
					</h2><br><br>	


<?php
$idmod = $_GET['idmod'];
include("conecta.php");
$sql1="select * from modalidad where modalidad.codigomodalidad = $idmod";
$mod=mysqli_query($conexion, $sql1);
if($rmod=mysqli_fetch_array($mod)){

echo "<form name = 'modmod' action='modmodalidad03.php' method='POST'>";
echo "<table id='mi-Tabla' class='table table-hover'><tr><td>";
echo "Codigo: <input type='text' name='idmod' value='".$rmod['codigomodalidad']."' readonly='true'></td></tr>";
echo "<tr><td>Nombre: <input type='text' name='nmod' value='".$rmod['nombremodalidad']."'></td></tr>";
echo "<tr><td>Tipo de evento: <select name = 'evento'>"; 
// se llena el primer registro en el combo con el tipo evento ya asignado a la modalidad
// esto evita que se cambie involutanriamente la relación entre modalidad y tipo evento
$codeve=$rmod['tipoevento_codigo'];
$sql2="select * from tipoevento where codigo = $codeve";
$auxeve=mysqli_query($conexion, $sql2);
if($aux=mysqli_fetch_array($auxeve)){
	echo "<option value =".$aux['codigo'].">".$aux['nombre']."</option>";
}
// se genera la lista de tipoevento

$sql3="select * from tipoevento";
$teve=mysqli_query($conexion, $sql3);
while($rteve=mysqli_fetch_array($teve)){
	echo "<option value =".$rteve['codigo'].">".$rteve['nombre']."</option>";
}

echo "</select></td></tr>";
echo "</table>";
echo "<input type='submit' value='Actualizar datos'>";
echo"</form><br>";
				

// se le da la oportunidad de volver sin cambiar nada

echo "<form action='modmodalidad01.php'>";
echo "<input type='submit' value='Descartar'>";
echo "</form>";
}
else{
echo"<p>No se encontraron registros para el codifo ".$idmod."</p>";
}	
?>
</select>
																	</td>
																</tr>
																															
															</table>
														</center>
													</div>
												</div>
											</form>												
									</center>
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
			<li class="active">Editar</li>
            <li class="active">Modalidad </li>
		</ul>
	</div>
</div>		
</body>
</html>

