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
<?php include("conecta.php");?>
<title id="titulo">.:: Consultar Niños</title>
<link rel="shortcut icon" href="../images/img_escudo.png"/>
    <a href="#" class="scrollup"><img src="../images/icon_top.png" alt=""></a>
    <!-- Inicia Head -->
    <?php include("adminavbar.html");?>
    
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
                        <li class="active">Consultar Niños</li>
                    </ol>
                </div> <!--Finaliza migas de pan--> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                <div id="divIndex"> 
                <div align= "right"><?php  echo "<b style='color: #42a5e8';> BIENVENID@: >". $_SESSION["usuario"];"</b>" ?>
                <a href="cerrarSesion.php"><span class="glyphicon glyphicon-log-out btn-lg" title="Cerrar Sesión"></span></a></div>
                    <h2 class="post-title">
                        <p class="titulos"><u>CONSULTAR NIÑOS</u></p><br>
                        <p class="post-contenido text-center font-cs">Para consultar la información, debe digitar la identificación del niño.</p>
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
                            $var7="";
                            $var8="";
                            $var9="";
                            $var10="";
                            $var11="";
                            $var12="";
                            $var13="";
                            $var14="";
                            $var15="";
                            $var16="";
                            $var17="";
                            $var18="";
                            $var19="";
                           
                             if(isset($_POST["btn1"])){
                                $btn=$_POST["btn1"];
                                $bus=$_POST["txtbus"];
                                if($btn=="Buscar"){
                                    
                                    $sql="select * from  ninos where identificacion='$bus'";
                                    $cs=mysql_query($sql,$cn);
                                    while($resul=mysql_fetch_array($cs)){
                                        $var=$resul[0];
                                        $var1=$resul[1];
                                        $var2=$resul[2];
                                        $var3=$resul[3];
                                        $var4=$resul[4];
                                        $var5=$resul[5];
                                        $var6=$resul[6];
                                        $var7=$resul[7];
                                        $var8=$resul[8];
                                        $var9=$resul[9];
                                        $var10=$resul[10];
                                        $var11=$resul[11];
                                        $var12=$resul[12];
                                        $var13=$resul[13];
                                        $var14=$resul[14];
                                        $var15=$resul[15];
                                        $var16=$resul[16];
                                        $var17=$resul[17];
                                        $var18=$resul[18];
                                        $var19=$resul[19];
                                        
                                           }
                                        }
                                    else if($btn=="Actualizar"){
                                    $identificacion=$_POST["txtidentificacion"];
                                    $nom=$_POST["txtnom"];
                                    $fechana=$_POST["txtfechana"];
                                    $edad=$_POST["txtedad"];
                                    $genero=$_POST["txtgenero"];
                                    $direccion=$_POST["txtdireccion"];
                                    $telefono=$_POST["txttelefono"];
                                    $estrato=$_POST["txtestrato"];
                                    $eps=$_POST["txteps"];
                                    $vacunas=$_POST["txtvacunas"];
                                    $crecimiento=$_POST["txtcrecimiento"];
                                    $grupo=$_POST["txtgrupo"];
                                    $acudiente=$_POST["txtacudiente"];
                                    $red=$_POST["txtred"];
                                    $desplazados=$_POST["txtdesplazados"];
                                    $minoria=$_POST["txtminoria"];
                                    $sisben=$_POST["txtsisben"];
                                    $salario=$_POST["txtsalario"];
                                    $discapacidad=$_POST["txtdiscapacidad"];
                                    $rna=$_POST["txtrna"];
                                    
                                    
                                    if($identificacion!='' and $nom!=''){
                                    $sql="update ninos nombre='$nom', fechanacimiento='$fechana', edad='$edad', genero='$genero', direccion='$direccion', 
                                    telefono='$telefono', estrato='$estrato', eps='$eps', vacunas='$vacunas', 
                                    crecimiento='$crecimiento', gruposanguineo='$grupo', acudiente='$acudiente', redunidos='$red', 
                                    desplazados='$desplazados', minoriaetnica='$minoria', sisben='$sisben', salario='$salario',
                                    discapacidad='$discapacidad', rna='$rna' where identificacion='$identificacion'";
                                    
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
                                                            <input type="text" class="form-control" name="txtbus" id="txtbus" placeholder="Identifiación...">
                                                            <span class="input-group-btn">
                                                                <input type="submit" class="btn btn-default" name="btn1"  value="Buscar"/>
                                                            </span>
                                                        </div><br>
                                                    </td>
                                                </tr> 
                                            </tr>
                                        </table>
                                        <hr>
                                        <br>
                                        <center><span class="letter-cs">DATOS CONSULTADOS</span></center><br>
                                        <table align="center" class="table table-hover" id="mi-tabla"> 
                                        <tr>                                        
                                            <td><b>Identificación </b></td>
                                            <td><input type='text' class='form-control' name='txtidentificacion' id='txtidentificacion' value="<?php echo $var?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                                <tr>
                                            <td><b>Nombre y Apellido</b></td>
                                            <td><input type='txt' class='form-control' name='txtnom' id='txtnom' value="<?php echo $var1?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Fecha de Nacimiento </b></td>
                                            <td><input type='txt' class='form-control' name='txtfechana' id='txtfechana' value="<?php echo $var2?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                         <tr>
                                            <td><b>Edad </b></td>
                                            <td><input type='txt' class='form-control' name='txtedad' id='txtedad' value="<?php echo $var3?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>  
                                        <tr>
                                            <td><b>Género </b></td>
                                            <td><input type='txt' class='form-control' name='txtgenero' id='txtgenero' value="<?php echo $var4?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr> 
                                        <tr>
                                            <td><b>Dirección Residencia </b></td>
                                            <td><input type='txt' class='form-control' name='txtdireccion' id='txtdireccion' value="<?php echo $var5?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr> 
                                        <tr>
                                            <td><b>Telefono (s) </b></td>
                                            <td><input type='txt' class='form-control' name='txttelefono' id='txttelefono' value="<?php echo $var6?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>  
                                        <tr>
                                            <td><b>Estrato Residencia </b></td>
                                            <td><input type='txt' class='form-control' name='txtestrato' id='txtestra' value="<?php echo $var7?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr> 
                                        <tr>
                                            <td><b>EPS </b></td>
                                            <td><input type='txt' class='form-control' name='txteps' id='txteps' value="<?php echo $var8?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Vacunas </b></td>
                                            <td><input type='txt' class='form-control' name='txtvacunas' id='txtvacunas' value="<?php echo $var9?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Crecimiento </b></td>
                                            <td><input type='txt' class='form-control' name='txtcrecimiento' id='txtcrecimiento' value="<?php echo $var10?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Grupo Sanguineo</b></td>
                                            <td><input type='txt' class='form-control' name='txtgrupo' id='txtgrupo' value="<?php echo $var11?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Acudiente </b></td>
                                            <td><input type='txt' class='form-control' name='txtacudiente' id='txtacudiente' value="<?php echo $var12?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Red Unidos</b></td>
                                            <td><input type='txt' class='form-control' name='txtred' id='txtred' value="<?php echo $var13?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Desplazados</b></td>
                                            <td><input type='txt' class='form-control' name='txtdesplazados' id='txtdesplazados' value="<?php echo $var14?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Moniria Etnica</b></td>
                                            <td><input type='txt' class='form-control' name='txtminoria' id='txtminoria' value="<?php echo $var15?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Sisben</b></td>
                                            <td><input type='txt' class='form-control' name='txtsisben' id='txtsisben' value="<?php echo $var16?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Salario Mínimo</b></td>
                                            <td><input type='num' class='form-control' name='txtsalario' id='txtsalario' value="<?php echo $var17?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Discapacidad</b></td>
                                            <td><input type='txt' class='form-control' name='txtdiscapacidad' id='txtdiscapacidad' value="<?php echo $var18?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>RNA</b></td>
                                            <td><input type='txt' class='form-control' name='txtrna' id='txtrna' value="<?php echo $var19?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
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
                                        
                                        $sql="select * from ninos";
                                        $cs=mysql_query($sql,$cn);
                                        echo "<br>";
                                        echo "
                                    
                                    <center><h1><font face='Comic Sans MS'>NIÑOS REGISTRADOS</font></h1></center>
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
            <li class="active">Consultar Niño</li>
        </ul>
    </div>
</div>      
</body>
</html>
