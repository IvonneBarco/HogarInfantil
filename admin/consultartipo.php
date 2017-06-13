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
<title id="titulo">.:: Consultar Niveles</title>
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
                        <li class="active">Consultar Niveles</li>
                    </ol>
                </div> <!--Finaliza migas de pan--> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                <div id="divIndex">
                <div align= "right"><?php  echo "<b style='color: #42a5e8';> BIENVENID@: >". $_SESSION["usuario"];"</b>" ?>
                <a href="cerrarSesion.php"><span class="glyphicon glyphicon-log-out btn-lg" title="Cerrar Sesión"></span></a></div> 
                    <h2 class="post-title">
                        <p class="titulos"><u>CONSULTAR NIVELES</u></p><br>
                        <p class="post-contenido text-center font-cs">Para Consultar los Niveles, debe digitar el codigo del nivel.</p>
                    </h2>
                    <br><br>

                    <body onLoad="carga();">

                        <?php                        
                            $var="";
                            $var1="";

                            if(isset($_POST["btn1"])){
                                $btn=$_POST["btn1"];
                                $bus=$_POST["txtbus"];
                                if($btn=="Buscar"){
                                    
                                    $sql="select * from niveles where codigo='$bus'";
                                    $cs=mysql_query($sql,$cn);
                                    while($resul=mysql_fetch_array($cs)){
                                        $var=$resul[0];
                                        $var1=$resul[1];
                                        }
                                        }
                                    else if($btn=="Actualizar"){
                                    $cod=$_POST["txtcod"];
                                    $nom=$_POST["txtnom"];
                                    if($cod!='' and $nom!=''){
                                    $sql="update niveles set nombre='$nom' where codigo='$cod'";
                                    
                                    $cs=mysql_query($sql,$cn);
                                    echo "<script> alert('Los datos se actualizaron correctamente');</script>";
                                    
                                    }
                                    else 
                                
                                    echo "<script> alert('Los Campos no pueden estar vacios ');</script>";
                                    }}

                            ?>
        
                            <form  name="fe" action="" method="POST"> 

                                <div class="row">
                                    <div class="col-lg-12">
                                        <table align="center"> 
                                        <tr>
                                            <td><b>Buscar </b></td>
                                                <td>
                                                    <div class="input-group">                                                        
                                                        <input type="text" class="form-control" name="txtbus" id="txtbus" placeholder="Código Nivel...">
                                                        <span class="input-group-btn">
                                                            <input type="submit" class="btn btn-default" name="btn1"  value="Buscar"/>
                                                        </span>
                                                    </div><br>
                                                </td>
                                            </tr>                                        
                                        <tr>
                                            <td><b>Código Nivel</b></td>
                                            <td><input type='text' class='form-control' name='txtcod' id='txtcod' value="<?php echo $var?>" placeholder="Código Nivel" readonly aria-describedby='sizing-addon1'><br></td>
                                        </tr>
                                        <tr>
                                            <td><b>Nombre Nivel</b></td>
                                            <td><input type='txt' class='form-control' name='txtnom' id='txtnom' value="<?php echo utf8_encode($var1)?>" placeholder="Nombre Nivel" readonly aria-describedby='sizing-addon1' id="datepicker"><br></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <center><button type="button" class="btn btn-success" value="Regresar" id="regresar" onclick="location = 'administracion.php'"> Regresar </button></center>
                                            </td>
                                        </tr>                        
                                        </table>
                                    </div>
                                </div> 
                            </form>

                            <?php
                                if(isset($_POST["btn1"])){
                                    $btn=$_POST["btn1"];

                                    if($btn=="Listar"){
                                        
                                        $sql="select * from niveles";
                                        $cs=mysql_query($sql,$cn);
                                        echo "<br>";
                                        echo "
                                    
                                    <center><h1><font face='Comic Sans MS'>NIVELES REGISTRADOS</font></h1></center>
                                <table border='1' bgcolor='#EAE89F'>

                                <tr>
                                <td>Codigo Nivel</td>
                                <td>Nombre Nivel</td>
                                </tr>";
                                        while($resul=mysql_fetch_array($cs)){
                                            $var=$resul[0];
                                            $var1=$resul[1];
                                            echo "<tr>
                                <td>$var</td>
                                <td>$var1</td>
                                </tr>";
                                            }
                                            
                                            echo "</table>
                                </center>";
                                    }
                                }
                                ?>
                            
                            <br>                    
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
            <li class="active">Consultar Niveles</li>
        </ul>
    </div>
</div>      
</body>
</html>
