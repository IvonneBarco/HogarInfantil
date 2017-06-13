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
<title id="titulo">.:: Consultar Usuarios</title>
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
                        <li class="active">Usuarios</li>
                        <li class="active">Consultar</li>
                    </ol>
                </div> <!--Finaliza migas de pan--> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                <div id="divIndex"> 
                <div align= "right"><?php  echo "<b style='color: #42a5e8';> BIENVENID@: >". $_SESSION["usuario"];"</b>" ?>
                <a href="cerrarSesion.php"><span class="glyphicon glyphicon-log-out btn-lg" title="Cerrar Sesión"></span></a></div>
                    <h2 class="post-title">
                        <p class="titulos"><u>CONSULTAR USUARIOS</u></p><br>
                        <p class="post-contenido text-center font-cs">Para consultar al usurio, debe ingresar su identificación.</p>
                    </h2><br>

                    <?php include('conecta.php'); ?>

                    <?php
                        $var="";
                        $var1="";
                        $var2="";
                        $var3="";


                        if(isset($_POST["btn1"])){
                            $btn=$_POST["btn1"];
                            $bus=$_POST["txtbus"];
                            if($btn=="Buscar"){
                                
                                $sql="select * from usuarios where usuario_id='$bus'";
                                $cs=mysql_query($sql,$cn);
                                while($resul=mysql_fetch_array($cs)){
                                    $var=$resul[0];
                                    $var1=$resul[1];
                                    $var2=$resul[2];
                                    $var3=$resul[3];
                                
                                    }
                                    }
                                else if($btn=="Actualizar"){
                                $id=$_POST["txtid"];
                                $usuario_nombre=$_POST["txtusuario_nombre"];
                                $usuario_clave=$_POST["txtusuario_clave"];
                                $usuario_email=$_POST["txtusuario_email"];
                                        
                                if($id!='' and $usuario_nombre!=''and $usuario_clave!='' and $usuario_email!=''){
                                $sql="update usuarios set usuario_nombre='$usuario_nombre', usuario_clave='$usuario_clave', usuario_email='$usuario_email' where usuario_id='$id'";
                                
                                $cs=mysql_query($sql,$cn);
                                echo "<script> alert('Los datos se actualizaron correctamente');</script>";
                                
                                }
                                else 
                            
                                echo "<script> alert('Los Campos no pueden estar vacios ');</script>";
                                }}

                        ?>
                        <form name="fe" action="" method="post">
                        <table id="miTabla">
                        <tr>
                            <th>Buscar</th>
                            <td>
                                <div class="input-group">
                                    <input type="text" class='form-control' name="txtbus"/>
                                    <span class="input-group-btn">
                                        <input type="submit" class="btn btn-default" name="btn1"  value="Buscar"/>
                                    </span>
                                </div><br>
                            </td>
                        </tr>
                        <tr>
                            <th>Identificación</th>
                            <td><input type="text" name="txtid" readonly="true" value="<?php echo $var?>" class='form-control' readonly aria-describedby='sizing-addon1'/><br></td>
                        </tr>

                        <tr>
                            <th>Usuario</th>
                            <td><input type="text" name="txtusuario_nombre"  value="<?php echo $var1?>" class='form-control' readonly aria-describedby='sizing-addon1'/><br></td>
                        </tr>

                        <tr>
                            <th>Clave</th>
                            <td><input type="password" name="txtusuario_clave"  value="<?php echo $var2?>" class='form-control' readonly aria-describedby='sizing-addon1'/><br></td>
                        </tr>

                        <tr>
                            <th>E-mail</th>
                            <td><input type="text" name="txtusuario_email"  value="<?php echo $var3?>" class='form-control' readonly aria-describedby='sizing-addon1'/><br></td>
                        </tr>
                        <tr>
                            <th colspan="2"><center><input type="button" name="btn1" value="Regresar" class='btn btn-success' onclick="location= 'administracion.php'" readonly aria-describedby='sizing-addon1'/></center><br></th>
                        </tr>    
                        </table>
                        </form>

                        <?php
                        if(isset($_POST["btn1"])){
                            $btn=$_POST["btn1"];

                            if($btn=="Listar"){
                                
                                $sql="select * from usuarios";
                                $cs=mysql_query($sql,$cn);
                                echo "<br>";
                                echo "<center><h1><font face='Comic Sans MS'>USUARIOS REGISTRADOS</font></h1></center>
                        <table border='1' bgcolor='#EAEAEA' width='90%'>

                        <tr>
                        <td>Identificacion</td>
                        <td>Usuario</td>
                        <td>Clave</td>
                        <td>Email</td>

                        </tr>";
                                while($resul=mysql_fetch_array($cs)){
                                    $var=$resul[0];
                                    $var1=$resul[1];
                                    $var2=$resul[2];
                                    $var3=$resul[3];
                                    
                                    echo "<tr>
                        <td>$var</td>
                        <td>$var1</td>
                        <td>$var2</td>
                        <td>$var3</td>

                        </tr>";
                                    }
                                    
                                    echo "</table>
                        </center>";
                            }
                            }
                        ?>





                </div>
                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
                
            </section>
            <!-- <?php #include("adminaside.html") ?> -->
        </div>
        <hr>
    </section>  <!-- Finaliza Pagina Principal -->

        
    <?php include("adminfooter.html") ?>
    <div class="col-xs-12" align="center">
        <ul class="list-inline text-right" id="pie">
            <li><a href="#">Inicio</a></li>
            <li class="active">Usuarios</li>
            <li class="active">Consultar</li>
        </ul>
    </div>
</div>      
</body>
</html>