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
<title id="titulo">.:: Modificar Niños</title>
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
                        <li class="active">Editar</li>
                        <li class="active">Niños</li>
                    </ol>
                </div> <!--Finaliza migas de pan--> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                <div id="divIndex"> 
                <div align= "right"><?php  echo "<b style='color: #42a5e8';> BIENVENID@: >". $_SESSION["usuario"];"</b>" ?>
                <a href="cerrarSesion.php"><span class="glyphicon glyphicon-log-out btn-lg" title="Cerrar Sesión"></span></a></div>
                    <h2 class="post-title">
                        <p class="titulos"><u>EDITAR DATOS NIÑOS</u></p><br>
                        <p class="post-contenido text-center font-cs">Para editar información del niño, por favor digite su identificación.</p>
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
                                    
                                    
                                    if($identificacion!=''){
																			
                                   $sql="update ninos set nombre='$nom', fechanacimiento='$fechana', edad='$edad', genero='$genero', direccion='$direccion', 
                                    telefono='$telefono', estrato='$estrato', eps='$eps', vacunas='$vacunas', 
                                    crecimiento='$crecimiento', gruposanguineo='$grupo', acudiente='$acudiente', redunidos='$red', 
                                    desplazados='$desplazados', minoriaetnica='$minoria', sisben='$sisben', salariominimo='$salario',
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
                                        <table align="center" class="table table-hover miitabla"> 
                                        <tr>                                        
                                            <td><b>Identificación </b></td>
                                            <td><input type='text' class='form-control' name='txtidentificacion' id='txtidentificacion' value="<?php echo $var?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                         <tr>
                                            <td><b>Nombre y Apellido</b></td>
                                            <td><input type='txt' class='form-control' name='txtnom' id='txtnom' value="<?php echo $var1?>" placeholder=""  aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Fecha de Nacimiento </b></td>
                                            <td><input type='txt' class='form-control' name='txtfechana' id='txtfechana' value="<?php echo $var2?>" placeholder=""  aria-describedby='sizing-addon1'></td>
                                        </tr>
                                         <tr>
                                            <td><b>Edad </b></td>
                                            <td><input type='txt' class='form-control' name='txtedad' id='txtedad' value="<?php echo $var3?>" placeholder=""  aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Género </b></td>
                                            <td>
                                                <select class='form-control' name="txtgenero" value="<?php echo $var4?>">
                                                    <option value="<?php echo $var4?>" selected="selected"><?php echo $var4?></option>
                                                    <option value="Masculino">Masculino</option>
                                                    <option value="Femenino">Femenino</option>
                                                    <option value="Otro">Otro</option>
                                                </select>
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td><b>Dirección Residencia </b></td>
                                            <td><input type='txt' class='form-control' name='txtdireccion' id='txtdireccion' value="<?php echo $var5?>" placeholder=""  aria-describedby='sizing-addon1'></td>
                                        </tr>  
                                        <tr>
<tr>
                                            <td><b>Telefono (s) </b></td>
                                            <td><input type='txt' class='form-control' name='txttelefono' id='txttelefono' value="<?php echo $var6?>" placeholder="" aria-describedby='sizing-addon1'></td>
                                        </tr> 
                                        <tr>
                                            <td><b>Estrato Residencia </b></td>
                                            <td>
                                                <select class='form-control' name="txtestrato" value="<?php echo $var7?>">
                                                    <option value="<?php echo $var7?>" selected="selected"><?php echo $var7?></option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">6</option>
                                                    <option value="Otro">Otro</option>
                                                </select>
                                            </td>
                                        </tr> 
                                         <tr>
                                            <td><b>EPS</b></td>
                                            <td>
                                                <select class='form-control' name="txteps" value="<?php echo $var8?>">
                                                    <option value="<?php echo $var8?>" selected="selected"><?php echo $var8?></option>
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
                                            <td><b>¿Posee todas sus Vacunas? </b></td>
                                            <td>
                                                <select class='form-control' name="txtvacunas" value="<?php echo $var9?>">
                                                    <option value="<?php echo $var9?>" selected="selected"><?php echo $var9?></option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                       <td>
										   <b>¿Esta en vinculado al Control del crecimiento? </b></td>
                                            <td>
                                                <select class='form-control' name="txtcrecimiento" value="<?php echo $var10?>">
                                                    <option value="<?php echo $var10?>" selected="selected"><?php echo $var10?></option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <td><b>Grupo Sanguineo</b></td>
                                            <td>
                                                <select class='form-control' name="txtgrupo" value="<?php echo $var11?>">
                                                    <option value="<?php echo $var11?>" selected="selected"><?php echo $var11?></option>
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
                                            <td><b>Acudiente </b></td>
                                            <td><input type='txt' class='form-control' name='txtacudiente' id='txtacudiente' value="<?php echo $var12?>" placeholder="" aria-describedby='sizing-addon1'></td>
                                        </tr> 
                                        <tr>
                                       <td>
										   <b>¿Pertenece a Red Unidos? </b></td>
                                            <td>
                                                <select class='form-control' name="txtred" value="<?php echo $var13?>">
                                                    <option value="<?php echo $var13?>" selected="selected"><?php echo $var13?></option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                       <td>
										   <b>¿Desplazado? </b></td>
                                            <td>
                                                <select class='form-control' name="txtdesplazados" value="<?php echo $var14?>">
                                                    <option value="<?php echo $var14?>" selected="selected"><?php echo $var14?></option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </td>
                                        </tr>
                                         <tr>
                                            <td><b>¿Hace Parte de una Minoria Etnica?  </b></td>
                                            <td>
                                                <select class='form-control' name="txtminoria" value="<?php echo $var15?>">
                                                    <option value="<?php echo $var15?>" selected="selected"><?php echo $var15?></option>
                                                    <option value="Negritudes">Negritudes</option>
                                                    <option value="Indigenas">Indigenas</option>
                                                    <option value="Gitanos">Gitanos</option>
                                                    <option value="Otro">Otro</option>
                                                </select>
                                            </td>
                                        </tr>
                                         <tr>
                                            <td><b>¿Está Clasificado por el SISBEN?  </b></td>
                                            <td>
                                                <select class='form-control' name="txtsisben" value="<?php echo $var16?>">
                                                    <option value="<?php echo $var16?>" selected="selected"><?php echo $var16?></option>
                                                    <option value="si">Si</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </td>
                                        </tr>
                                         <tr>
                                            <td><b>Salario Mínimo</b></td>
                                            <td><input type='num' class='form-control' name='txtsalario' id='txtsalario' value="<?php echo $var17?>" placeholder="" aria-describedby='sizing-addon1'></td>
                                        </tr>
                                         <tr>
                                            <td><b>Posee Alguna Discapacidad Física  </b></td>
                                            <td>
                                                <select name="txtdiscapacidad" class='form-control' value="<?php echo $var18?>">
                                                    <option value="<?php echo $var18?>" selected="selected"><?php echo $var18?></option>
                                                    <option value="si">Si</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                       <td>
										   <b>¿RNA? </b></td>
                                            <td>
                                                <select class='form-control' name="txtrna" value="<?php echo $var19?>">
                                                    <option value="<?php echo $var19?>" selected="selected"><?php echo $var19?></option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </td>
                                        </tr>
                                                                       
                                        <tr>
                                            <td colspan="2">
                                                <center>
                                                    <input type="submit" class="btn btn-success" name="btn1" value="Actualizar"/>
                                                    <button type="button" class="btn btn-success" value="Regresar" id="regresar" onclick="location = 'administracion.php'"> Regresar </button>
                                                </center>
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
                                    
                                    <center><h1><font face='Comic Sans MS'>Niños Registrados</font></h1></center>
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
            <li class="active">Editar</li>
            <li class="active">Artesano</li>
        </ul>
    </div>
</div>      
</body>
</html>
