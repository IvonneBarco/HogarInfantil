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
<title id="titulo">.:: Consultar Inscritos</title>
<link rel="shortcut icon" href="../images/img_escudo.png"/>

    <a href="#" class="scrollup"><img src="../images/icon_top.png" alt=""></a>
    <!-- Inicia Head -->
    <?php include("adminavbar.html");
    include("conecta.php"); ?>
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
                        <li class="active">Consultar</li>
                        <li class="active">Consultar Inscritos</li>
                    </ol>
                </div> <!--Finaliza migas de pan--> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                <div id="divIndex"> 
                <div align= "right"><?php  echo "<b style='color: #42a5e8';> BIENVENID@: >". $_SESSION["usuario"];"</b>" ?>
                <a href="cerrarSesion.php"><span class="glyphicon glyphicon-log-out btn-lg" title="Cerrar Sesión"></span></a></div>
                    <h2 class="post-title">
                        <p class="titulos"><u>PREINSCRITOS POR NIVELES</u></p><br>                        
                    </h2><br>
                        <?php
                            $ideven= $_GET['ideven'];
                                                    
                            
                            // A partir de aquí, copiar a un esquema de página que funcione bien el estilo
                            include("conecta.php");
                            // ahora se consulta las inscripciones al evento
                           $sql2="select inscripciones.*, oferta.codoferta, oferta.codigo, oferta.version from inscripciones, oferta WHERE  oferta.codoferta=$ideven and inscripciones.codigo=oferta.codigo" ;  
                            echo "<center><table id='mi-tabla'  class='table table-hover'><tr><th>Numero Inscripción</th><th>Codigo Nivel</th><th>Nombre Nivel</th><th>Identificación Niño</th><th>Nombre Niño</th><th>Versión</th><th>Fecha Inscripcion</th></tr>";
                                    $vecdatos2=mysqli_query($conexion, $sql2);
                                    while($reg2=mysqli_fetch_array($vecdatos2)){
                                        echo "<tr> ".$reg2['numeroinscripciones']."</td>";
                                        echo "<td> ".$reg2['codoferta']."</td>";
                                        echo "<td> ".$reg2['codigo']."</td>";
                                        echo "<td> ".$reg2['identificacion']."</td>";
                                        echo "<td> ".$reg2['version']."</td>";
                                        echo "<td> ".$reg2['fechainscripcion']."</td>";
                                        
                                        }
                                    echo "</table></center>";

                            ?>
                            <br>
                        <tr>
                            <td colspan="2">
                                <center><button type="button" class="btn btn-success" value="Regresar" id="regresar" onclick="location = 'coninsevento01.php'"> Regresar </button></center>
                            </td>
                        </tr> 
                                              
                </div>
                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
                
            </section>
            <!-- <?php #include("adminaside.html") ?> -->
        </div>
    </section>  <!-- Finaliza Pagina Principal -->

        
    <?php include("adminfooter.html") ?>
    <div class="col-xs-12" align="center">
        <ul class="list-inline text-right" id="pie">
            <li><a href="#">Inicio</a></li>
            <li class="active">Consultar</li>
            <li class="active">Consultar Inscritos</li>
        </ul>
    </div>
</div>      
</body>
</html>
