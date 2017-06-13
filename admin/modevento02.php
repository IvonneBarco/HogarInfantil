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
<title id="titulo">.:: Modificar Oferta</title>
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
                        <li class="active">Oferta</li>
					</ol>
				</div> <!--Finaliza migas de pan-->	

				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

				<div id="divIndex">	
				<div align= "right"><?php  echo "<b style='color: #42a5e8';> BIENVENID@: >". $_SESSION["usuario"];"</b>" ?>
				<a href="cerrarSesion.php"><span class="glyphicon glyphicon-log-out btn-lg" title="Cerrar Sesión"></span></a></div>
					<h2 class="post-title">
						<p class="titulos"><u>MODIFICAR OFERTA</u></p>
					</h2><br><br>	

<?php
$cod= $_GET['cod'];
include("conecta.php");
$sql1="select * from oferta where oferta.codoferta = $cod";
$mod=mysqli_query($conexion, $sql1);
if($rmod=mysqli_fetch_array($mod)){

echo "<form name = 'modmod' action='modevento03.php' method='POST'>";
echo "<table id='mi-Tabla' class='table table-hover'><tr><td>";
echo "Codigo Oferta: <input type='text' name='codoferta' value='".$rmod['codoferta']."' readonly='true'></td></tr>";


echo "<tr><td>Codigo Nivel: <select name = 'codigo'>"; 
$codigo=$rmod['codigo'];
$sql2="select * from niveles where codigo = $codigo";
$auxeve=mysqli_query($conexion, $sql2);
if($aux=mysqli_fetch_array($auxeve)){
	echo "<option value =".$aux['codigo'].">".$aux['nombre']."</option>";
	
	


}
/*
echo "<tr><td>Estado: <select name = 'estado'>"; 
$estado=$rmod['estado'];
$sql3="select oferta.estado from estado";
$teve=mysqli_query($conexion, $sql3);
if($rteve=mysqli_fetch_array($estado)){
	echo "<option value =".$rteve['estado']."</option>";
}*/

echo "</select></td></tr>";
echo "<tr><td>version: <input type='text' name='version' value='".$rmod['version']."'></td></tr>";
echo "<tr><td>Descripcion: <input type='text' name='descrip' value='".$rmod['descripcion']."'></td></tr>";
echo "<tr><td>Fecha: <input type='text' name='fecha' value='".$rmod['fecha']."'></td></tr>";
echo "<tr><td>Valor: <input type='text' name='valor' value='".$rmod['valor']."'></td></tr>";
echo "<tr><td>Estado: <select name = 'estado'>"; 
if($rmod['estado'] == 'Activo'){
   echo "<option value ='Activo'>Activo</option>";
   echo "<option value ='Desactivo'>Desactivo</option>";
}else{
	echo "<option value ='Desactivo'>Desactivo</option>";
    echo "<option value ='Activo'>Activo</option>";
}
echo "</td></tr></table>";
	
//echo "</table></form> <br>";
//echo "<input type='submit' value='Actualizar datos'>";

echo "<p><form action='modevento03.php'><br>";
echo "<table><tr><td colspan='2'><center> <input type='submit' class='btn btn-success' value='Actualizar datos'></button>";
echo "</form></td>";

// se le da la oportunidad de volver sin cambiar nada
echo "<form action='modevento01.php'><br>";
echo "<td><input type='submit' class='btn btn-success' value='Limpiar'>";
echo "</form></td>";

echo "<form action='modevento01.php'><br>";
echo "<td><input type='submit' class='btn btn-success' id='regresar' value='Regresar'>";
echo "</form></center></td></tr></table>";
}
else{
echo"<p>No se encontraron registros para el codifo ".$codoferta."</p>";
echo "<form action='modevento01.php'>";
echo "<input type='submit' value='Volver'>";
echo "</form>";
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
            <li class="active">Evento</li>
		</ul>
	</div>
</div>		
</body>
</html>
