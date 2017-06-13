<!--font api================================================ -->
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet"> <!-- titulos-->
    <link href="https://fonts.googleapis.com/css?family=Actor" rel="stylesheet"> <!-- body-->
<!--font api================================================ -->

<title id="titulo">.:: Consultar Oferta Académica</title>
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
                        <li class="active">Consultar Oferta Académica</li>
                    </ol>
                </div> <!--Finaliza migas de pan--> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                <div id="divIndex"> 
                    <h2 class="post-title">
                        <p class="titulos"><u>CONSULTAR OFERTA ACADÉMICA</u></p><br>
                        <p class="post-contenido text-center font-cs">Para consultar la oferta académica, debe digitar el codigo de la oferta.</p>
                    </h2>
                    <br><br>

                    <body onLoad="carga();">

                        <?php
                            $var="";
                            $var1="";
                            $var2="";
                            $var3="";
                            $var4="";
                            $var5="";
                            $var6="";

                            if(isset($_POST["btn1"])){
                                $btn=$_POST["btn1"];
                                $bus=$_POST["txtbus"];
                                if($btn=="Buscar"){
                                    
                                    $sql="select * from oferta where codoferta='$bus'";
                                    $cs=mysql_query($sql,$cn);
                                    while($resul=mysql_fetch_array($cs)){
                                        $var=$resul[0];
                                        $var1=$resul[1];
                                        $var2=$resul[2];
                                        $var3=$resul[3];
                                        $var4=$resul[4];
                                        $var5=$resul[5];
                                        $var6=$resul[6];
                                        
                                        }
                                        }
                                    else if($btn=="Actualizar"){
                                    $codoferta=$_POST["txtcodoferta"];
                                    $codigo=$_POST["txtcodigo"];
                                    $estado=$_POST["txtestado"];
                                    $version=$_POST["txtversion"];
                                    $fecha=$_POST["txtfecha"];
                                    $valor=$_POST["txtvalor"];
                                    $descripcion=$_POST["txtdescripcion"];
                                    
                                    if($codoferta!='' and $codigo!='' and $estado!='' and $version!='' and $fecha!='' and $valor!='' and $descripcion!=''){
                                    $sql="update niveles set codoferta='$codoferta' codigo='$codigo' estado='$estado' version='$version' fecha='$fecha' valor='$valor' descripcion='$descripcion' where codoferta='$codoferta'";
                                    
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
                                        <table class="color-font" align="center"> 
                                        <tr>
                                            <td class="color-font">Buscar </td>
                                                <td>
                                                    <div class="input-group">                                                        
                                                        <input type="text" class="form-control color-font" name="txtbus" id="txtbus" placeholder="Código Evento...">
                                                        <span class="input-group-btn">
                                                            <input type="submit" class="btn btn-default" name="btn1"  value="Buscar"/>
                                                        </span>
                                                    </div><br>
                                                </td>
                                            </tr>                                        
                                        <tr>
                                            <td>Código Oferta </td>
                                            <td><input type='text' class='form-control' name='txtcodoferta' id='txtcodoferta' value="<?php echo $var?>" placeholder="" readonly aria-describedby='sizing-addon1'><br></td>
                                        </tr>
                                        <tr>
                                            <td>Nivel</td>
                                            <td><input type='txt' class='form-control' name='txtcodigo' id='txtcodigo' value="<?php echo $var1?>" placeholder="" readonly aria-describedby='sizing-addon1'><br></td>
                                        </tr>
                                        <tr>
                                            <td>Estado </td>
                                            <td><input type='txt' class='form-control' name='txtmod' id='txtmod' value="<?php echo $var2?>" placeholder="" readonly aria-describedby='sizing-addon1'><br></td>
                                        </tr>
                                        <tr>
                                            <td>Version </td>
                                            <td><input type='txt' class='form-control' name='txtestado' id='txtestado' value="<?php echo $var3?>" placeholder="" readonly aria-describedby='sizing-addon1'><br></td>
                                        </tr>
                                        <tr>
                                            <td>Fecha </td>
                                            <td><input type='txt' class='form-control' name='txtfecha' id='txtfecha' value="<?php echo $var4?>" placeholder="" readonly aria-describedby='sizing-addon1'><br></td>
                                        </tr>
                                        <tr>
                                            <td>Valor </td>
                                            <td><input type='txt' class='form-control' name='txtvalor' id='txtvalor' value="<?php echo $var5?>" placeholder="" readonly aria-describedby='sizing-addon1'><br></td>
                                        </tr>
                                        <tr>
                                            <td>Descripción </td>
                                            <td><input type='txt' class='form-control' name='txtdescripcion' id='txtdescripcion' value="<?php echo utf8_encode($var6)?>" placeholder="" readonly aria-describedby='sizing-addon1'></textarea><br></td>
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
                                        
                                        $sql="select * from tipoevento";
                                        $cs=mysql_query($sql,$cn);
                                        echo "<br>";
                                        echo "
                                    
                                    <center><h1><font face='Comic Sans MS'>TIPO DE EVENTOS REGISTRADOS</font></h1></center>
                                <table border='1' bgcolor='#EAE89F'>

                                <tr>
                                <td>Codigo</td>
                                <td>Nombre</td>
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
            <li class="active">Consultar Eventos</li>
        </ul>
    </div>
</div>      
</body>
</html>
