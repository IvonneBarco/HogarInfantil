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
                        <li class="active">Editar</li>
                        <li class="active">Modalidad </li>
                    </ol>
                </div> <!--Finaliza migas de pan--> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                <div id="divIndex"> 
                <div align= "right"><?php  echo "<b style='color: #42a5e8';> BIENVENID@: >". $_SESSION["usuario"];"</b>" ?>
                <a href="cerrarSesion.php"><span class="glyphicon glyphicon-log-out btn-lg" title="Cerrar Sesión"></span></a></div>
                    <h2 class="post-title">
                        <p class="titulos"><u>MODIFICACIÓN DE MODALIDADES</u></p><br>                        
                    </h2>
                        <?php

                            // A partir de aquí, copiar a un esquema de página que funcione bien el estilo
                            include("conecta.php");
                            $sql="select * from modalidad, tipoevento where modalidad.tipoevento_codigo = tipoevento.codigo";
                            echo "<center><table id='miiTabla' class='table table-hover'><tr><th>Codigo</th><th>Modalidad</th><th>Tipo de evento</th><td></td></tr>";
                                $cs=mysqli_query($conexion, $sql);
                                while($resul=mysqli_fetch_array($cs)){
                                    echo "<tr><td>".$resul['codigomodalidad']."</td>";
                                    echo "<td> ".utf8_encode($resul['nombremodalidad'])."</td>";
                                    echo "<td> ".utf8_encode($resul['nombre'])."</td> ";
                                    echo "<td><a href = 'modmodalidad02.php?idmod=".$resul["codigomodalidad"]."'>Modificar</a></td> </tr>";
                                }
                            echo "</table>";
                                // Hasta aqui. Esto es todo lo que se necesita para listar las modalidades y seleccionar una para modificarla
                        ?>
                        <tr>
                            <td colspan="2">
                                <center><button type="button" class="btn btn-success" value="Regresar" id="regresar" onclick="location = 'administracion.php'"> Regresar </button></center>
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
            <li class="active">Editar</li>
            <li class="active">Modalidad</li>
        </ul>
    </div>
</div>      
</body>
</html>