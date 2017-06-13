

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
<title id="titulo">.:: Listado de Inscritos</title>
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
                        <li class="active">Listar</li>
                        <li class="active">Inscritos</li>
                    </ol>
                </div> <!--Finaliza migas de pan--> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                <div id="divIndex"> 
                <div align= "right"><?php  echo "<b style='color: #42a5e8';> BIENVENID@: >". $_SESSION["usuario"];"</b>" ?>
                <a href="cerrarSesion.php"><span class="glyphicon glyphicon-log-out btn-lg" title="Cerrar Sesión"></span></a></div>
                    <h2 class="post-title">
                        <p class="titulos"><u>LISTADO INSCRITOS</u></p>
                    </h2>
                    <br><br>
                        <div class="row">
                            <div class="col-lg-12"> 
                            <?php
                                include("conecta.php");
                                $resultado = mysqli_query($conexion,"select inscripciones.*, ninos.nombre as nom, ninos.acudiente, ninos.telefono, niveles.nombre from inscripciones, ninos, niveles where inscripciones.identificacion= ninos.identificacion and inscripciones.codigo=niveles.codigo order by numeroinscripciones asc");
                                echo "<center><table class='titulo-2 tscroll table table-bordered table-hover table-responsive' align='center' id='tabla-22'>";
                                echo "<tr class='header-2'><th><center><b> Numero Inscripción</b></center></th>
                                <th><center><b>Código Nivel</b></center></th>
                                <th><center><b>Nombre Nivel</b></center></th>
                                <th><center><b>Identificación Niño</b></center></th>
                                <th><center><b>Nombre Niño</b></center></th>
                                <th><center><b>Nombre Acudiente</b></center></th>
                                <th><center><b>Telefono Contacto</b></center></th>
                                <th><center><b>Fecha de Inscripción</b></center></th></tr>
                                </table></center>\n";
                                //$resultado = mysqli_query($conexion,$sql);
                                 ?>
                                 <div class="contienetabla-2">
                                 <table class="tscroll-2 table table-bordered table-hover table-responsive"> <?php
                                $registro;
                                while ($registro = mysqli_fetch_assoc($resultado)){ 
                                echo "<tr><td>".$registro['numeroinscripciones']."</td><td>".$registro['codigo']."</td><td>".$registro['nombre']."</td><td>".$registro['identificacion']."</td><td>".$registro['nom']."</td><td>".$registro['acudiente']."</td><td>".$registro['telefono']."</td><td>".$registro['fechainscripcion']."</td></tr>";
                                }
                            ?>
                            </table></div></center></div></div>
                            </div>
                        </div>
                            <br><br>
               
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
            <li class="active">Listar</li>
            <li class="active">Inscritos</li>
        </ul>
    </div>
</div>      
</body>
</html>
