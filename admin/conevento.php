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
<title id="titulo">.:: Listar Oferta</title>
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
                        <li class="active">Oferta</li>
                    </ol>
                </div> <!--Finaliza migas de pan--> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                <div id="divIndex"> 
                <div align= "right"><?php  echo "<b style='color: #42a5e8';> BIENVENID@: >". $_SESSION["usuario"];"</b>" ?>
                <a href="cerrarSesion.php"><span class="glyphicon glyphicon-log-out btn-lg" title="Cerrar Sesión"></span></a></div>
                    <h2 class="post-title">
                        <p class="titulos"><u>LISTADO OFERTAS REGISTRADAS</u></p>
                    </h2>
                    <br><br>
                        <div class="row">
                            <div class="col-lg-12"> 
                            <?php
                                include("conecta.php");
                                $even;
                                $resultado = mysqli_query($conexion, "SELECT oferta.codoferta, oferta.codigo, oferta.estado, oferta.version, oferta.fecha, oferta.valor,  oferta.descripcion, oferta.estado, niveles.nombre FROM oferta, niveles where oferta.codigo=niveles.codigo order by codigo asc");
                                
                                echo "<center><table class='titulo-3 tscroll-3 table table-bordered table-hover table-responsive' align='center' id='tabla-2'>\n";
                                echo "<tr class='header-3'><th><center><b>Código Oferta</b></center></th><th><center><b>Codigo Nivel</b></center></th><th><center><b>Nombre Nivel</b></center></th><th><center><b>Versión</b></center></th><th><center><b>Fecha</b></center></th><th><center><b>Valor</b></center></th><th><center><b>Descripción</b></center></th><th><center><b>Estado</b></center></th></tr></table></center>\n";
                                ?>
                                <div class="contienetabla-3">
                                <table class="tscroll-3 table table-bordered table-hover table-responsive">
                                <?php
            
                                $even = 100;
                                while ($registro = mysqli_fetch_assoc($resultado)) {
                                    echo "<tr><td>".$registro['codoferta']."</td><td>" . utf8_encode($registro['codigo']) . "</td><td>" . utf8_encode($registro['nombre']) . "</td><td>" . $registro['version'] . "</td><td>" . $registro['fecha'] . "</td><td>" . "$" . $registro['valor'] . "</td><td>" . $registro['descripcion'] . "</td><td>" . $registro['estado'] . "</td></tr>\n";
                                    $even = $registro['codoferta'];
                                }
                                $even+=1;
                            ?>
                            </table></div>
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
            <li class="active">Eventos</li>
        </ul>
    </div>
</div>      
</body>
</html>
