<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>.:: Preinscripción</title>
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

<body id="preinscripcion2">
	<?php 
		include("navbar.html");
	?>


<div class="container">
	<h1 id="miGaleria">PREINSCRIPCIÓN A NIVELES</h1> <br><br>
	<p align="right"><a href="ayuda.php" class="glyphicon glyphicon-question-sign btn-lg text-left"><label>Ayuda</label></a></p><br>
	<p>Por favor diligencie la siguiente información de su niñ@. De esta manera quedará preinscrito en nuestro sistema</p><br>

	<article class="post clearfix">                    


						<?php
							$identificacion = "";
							$nombres = "";
							$fechanacimiento = "";
							$edad = "";
							$genero = "";
							$direccion = "";
							$telefono = "";
							$estrato = "";
							$sistemasalud = "";
							$vacunas = "";
							$crecimiento = "";
							$gruposanguineo = "";
							$acudiente = "";
							$redunidos = "";
							$desplazados= "";
							$comunidadetnica = "";
							$sisben = "";
							$salariominimo = "";
							$discapacidad = "";
							$rna = "";
						
							

							include("conecta.php");
							$sql = "SELECT * from ninos where identificacion='$identificacion'";
							$resultado = mysqli_query($conexion,$sql);
							while ($registro = mysqli_fetch_assoc($resultado)){ 
							$identificacion = $registro['identificacion'];
							}
						?>
							<form name="artesano" action="guardarpreins.php" method="POST">							
							<table align="center" class="table table-hover"> 
                                        <tr>                                        
                                            <th><p>Identificación </p></th>
                                            <td><input type='text' class='form-control input-xlargo' name='identificacion' id='identificacion' value = '<?php echo $identificacion?>' placeholder="" aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <th><p>Nombres </p></th>
                                            <td><input type='text' class='form-control input-xlargo' name='nombres' id='nombres'  placeholder=""  aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <th><p>Fecha de Nacimiento </p></th>
                                            <td><input type='text' class='form-control input-xlargo' step="1"  name='fechanacimiento' id='fechanacimiento'  placeholder=""  aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <th><p>Edad </p></th>
                                            <td><input type='text' class='form-control input-xlargo' name='edad' id='edad'  placeholder=""  aria-describedby='sizing-addon1'></td>
                                        </tr>  
                                        <tr>
                                            <th><p>Género </p></th>
                                            <td>
                                                <select class='form-control input-xlargo' name="genero" >
                                                    <option  selected="selected">--- Seleccionar ---</option>
                                                    <option value="Masculino">Masculino</option>
                                                    <option value="Femenino">Femenino</option>
                                                    <option value="Otro">Otro</option>
                                                </select>
                                            </td>
                                        </tr> 
                                        <tr>
                                            <th><p>Dirección Residencia </p></th>
                                            <td><input type='text' class='form-control input-xlargo' name='direccion' id='direccion'  placeholder=""  aria-describedby='sizing-addon1'></td>
                                        </tr> 
                                        <tr>
                                            <th><p>Telefono (s) </p></th>
                                            <td><input type='text' class='form-control input-xlargo' name='telefono' id='telefono'  placeholder=""  aria-describedby='sizing-addon1'></td>
                                        </tr>  
                                        <tr>
                                            <th><p>Estrato Residencia </p></th>
                                            <td>
                                                <select class='form-control input-xlargo' name="estrato">
                                                    <option selected="selected">--- Seleccionar ---</option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">6</option>
                                                </select>
                                            </td>
                                        </tr> 
                                        <tr>
                                            <th><p>EPS</p></th>
                                            <td>
                                                <select class='form-control input-xlargo' name="eps">
                                                    <option selected="selected">---Seleccionar---</option>
                                                    <option value="Emsanar">Emssanar</option>
                                                    <option value="Asmet Salur">Asmet Salud</option>
                                                    <option value="Caprecom">Caprecom</option>
                                                    <option value="ProinSalud">ProinSalud</option>
                                                    <option value="Otro">Otro</option>
                                                    <option value="Ninguno">Ninguno</option>
                                                 </select>
                                            </td>
                                        </tr> 
                                        <tr>
                                            <th><p>¿Posee todas sus Vacunas? </p></th>
                                            <td>
                                                <select class='form-control input-xlargo' name="vacunas">
                                                    <option selected="selected">---Seleccionar---</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                       <th>
										   <p>¿Esta en vinculado al Control del crecimiento? </p></th>
                                            <td>
                                                <select class='form-control input-xlargo' name="crecimiento">
                                                    <option  selected="selected">Seleccionar</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <th><p>Grupo Sanguineo</p></th>
                                            <td>
                                                <select class='form-control input-xlargo' name="grupo">
                                                    <option selected="selected">---Selecionar</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="AB-">AB-</option>
                                                     <option value="A+">A+</option>
                                                    <option value="A-">A-</option>
                                                    <option value="B+">B+</option>
                                                    <option value="B-">B-</option>
                                                    <option value="O+">O+</option>
                                                    <option value="O-">O-</option>
                                                </select>
                                            </td>
                                        </tr>
                                         <tr>
                                            <th><p>Acudiente </p></th>
                                            <td><input type='txt' class='form-control input-xlargo' name='acudiente' id='acudiente' placeholder="" aria-describedby='sizing-addon1'></td>
                                        </tr> 
                                        <tr>
                                       <th>
										   <p>¿Pertenece a Red Unidos? </p></th>
                                            <td>
                                                <select class='form-control input-xlargo' name="red">
                                                    <option selected="selected">---Seleccionar---</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                       <th>
										   <p>¿Desplazado? </p></th>
                                            <td>
                                                <select class='form-control input-xlargo' name="desplazados">
                                                    <option selected="selected">---Seleccionar---</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </td>
                                        </tr>
                                         <tr>
                                            <th><p>¿Hace Parte de una Minoria Etnica?  </p></th>
                                            <td>
                                                <select class='form-control input-xlargo' name="minoria">
                                                    <option selected="selected">---Seleccionar---</option>
                                                    <option value="Negritudes">Negritudes</option>
                                                    <option value="Indigenas">Indigenas</option>
                                                    <option value="Gitanos">Gitanos</option>
                                                    <option value="Gitanos">Ninguno</option>
                                                    <option value="Otro">Otro</option>
                                                </select>
                                            </td>
                                        </tr>
                                         <tr>
                                            <th><p>¿Está Clasificado por el SISBEN?  </p></th>
                                            <td>
                                                <select class='form-control input-xlargo' name="sisben">
                                                    <option selected="selected">---Seleccionar---</option>
                                                    <option value="si">Si</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><p>Salario Mínimo</p></th>
                                            <td><input type='num' class='form-control input-xlargo' name='salario' id='salario' placeholder="" aria-describedby='sizing-addon1'></td>
                                        </tr>
                                         <tr>
                                            <th><p>Posee Alguna Discapacidad Física  </p></th>
                                            <td>
                                                <select name="discapacidad" class='form-control input-xlargo'>
                                                    <option selected="selected">---Seleccionar---</option>
                                                    <option value="si">Si</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                       <th>
										   <p>¿RNA? </p></th>
                                            <td>
                                                <select class='form-control input-xlargo' name="rna">">
                                                    <option selected="selected">---Seleccionar---</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </td>
                                        </tr>                 
                                        <tr>
                                            <td colspan="2">
                                                <center>
                                                    <button type="submit" class="btn btn-large btn-primary">Registrar</button>  <br><br>
                                                    <!--<a href="infantil.php" class="btn btn-large btn-primary">Regresar</a>-->
                                                </center>
                                            </td>
                                        </tr> 
                            </table>
						</form>
				</article>

</div>


<?php 
	include("footer.html");
?>


