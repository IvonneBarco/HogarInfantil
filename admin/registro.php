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

<title id="titulo">.:: Registrar Usuarios</title>
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
                        <li class="active">Nuevo</li>
                    </ol>
                </div> <!--Finaliza migas de pan--> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                <div id="divIndex"> 
                <div align= "right"><?php  echo "<b style='color: #42a5e8';> BIENVENID@: >". $_SESSION["usuario"];"</b>" ?>
                <a href="cerrarSesion.php"><span class="glyphicon glyphicon-log-out btn-lg" title="Cerrar Sesión"></span></a></div>
                    <h2 class="post-title">
                        <p class="titulos"><u>FORMULARIO DE REGISTRO DE USUARIOS</u></p><br>
                        <p class="post-contenido text-center font-cs">Recuerde que al crear un nuevo usuario este tendrá todos los permisos para realizar diferentes actividades en el Sitio</p>
                    </h2><br>

                    <?php
    include('conecta.php'); // incluimos el archivo de conexión a la Base de Datos
?>
    <?php
        if(isset($_POST['enviar'])) { // comprobamos que se han enviado los datos desde el formulario
            // creamos una función que nos parmita validar el email
            function valida_email($correo) {
                if(preg_match('/^[A-Za-z0-9-_.+%]+@[A-Za-z0-9-.]+\.[A-Za-z]{2,4}$/', $correo)) return true;
                else return false;
            }
            // Procedemos a comprobar que los campos del formulario no estén vacíos
            $sin_espacios = count_chars($_POST['usuario_id'], 1);
            if(!empty($sin_espacios[32])) { // comprobamos que el campo usuario_nombre no tenga espacios en blanco
                echo "El campo <em>usuario_id</em> no debe contener espacios en blanco. <a href='javascript:history.back();'>Reintentar</a>";
            }else if(empty($_POST['usuario_id'])) { // comprobamos que el campo usuario_nombre no esté vacío
                echo "El campo <em>usuario_nombre</em> no debe contener espacios en blanco. <a href='javascript:history.back();'>Reintentar</a>";
            }else if(empty($_POST['usuario_nombre'])) { // comprobamos que el campo usuario_nombre no esté vacío
                 echo "No haz ingresado tu usuario. <a href='javascript:history.back();'>Reintentar</a>";
            }else if(empty($_POST['usuario_clave'])) { // comprobamos que el campo usuario_clave no esté vacío
                echo "No haz ingresado contraseña. <a href='javascript:history.back();'>Reintentar</a>";
            }else if($_POST['usuario_clave'] != $_POST['usuario_clave_conf']) { // comprobamos que las contraseñas ingresadas coincidan
                echo "Las contraseñas ingresadas no coinciden. <a href='javascript:history.back();'>Reintentar</a>";
            }else if(!valida_email($_POST['usuario_email'])) { // validamos que el email ingresado sea correcto
                echo "El email ingresado no es válido. <a href='javascript:history.back();'>Reintentar</a>";
            }else {
                // "limpiamos" los campos del formulario de posibles códigos maliciosos
                $usuario_id= mysql_real_escape_string($_POST['usuario_id']);
                $usuario_nombre = mysql_real_escape_string($_POST['usuario_nombre']);
                $usuario_clave = mysql_real_escape_string($_POST['usuario_clave']);
                /*$miclave= md5($usuario_clave);
                echo $miclave;*/
                $usuario_email = mysql_real_escape_string($_POST['usuario_email']);
                // comprobamos que el usuario ingresado no haya sido registrado antes
                $sql = mysql_query("SELECT usuario_nombre FROM usuarios WHERE usuario_nombre='".$usuario_nombre."'");
                if(mysql_num_rows($sql)>0){
                    echo "<center><span class='letter-cs'>El nombre usuario elegido ya ha sido registrado anteriormente.</span></center>" ;
                    echo "<center><button type='button' class='btn btn-success' value='Reintentar' id='regresar' onclick='javascript:history.back()'> Reintentar </button></center><br>";

                }else {
                    $usuario_clave =($usuario_clave); // encriptamos la contraseña ingresada con md5
                    // ingresamos los datos a la BD
                    $reg = mysql_query("INSERT INTO usuarios (usuario_id, usuario_nombre, usuario_clave, usuario_email, usuario_freg) VALUES ('".$usuario_id."','".$usuario_nombre."', '".$usuario_clave."', '".$usuario_email."', NOW())");
                    if($reg) {
                        echo "<center><span class='letter-cs'>Datos ingresados correctamente.</span></center>" ;
                        echo "<center><a href ='registro.php' class='btn btn-success'>Regresar</a></center><br>";
                    }else {

                        echo "<center><span class='letter-r'>Ha ocurrido un error y no se registraron los datos...</span></center>";
                        echo "<center><button type='button' class='btn btn-danger' value='Reintentar' id='regresar' onclick='javascript:history.back()'> Reintentar </button></center><br>";

                    }
                }
            }
        }else {
    ?>
            <form  action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <table id="mi_tabla">
                <tr>
                    <td align="center"><b>Identificación:</b></td>
                </tr>
                <tr>
                    <td><input type="text" name="usuario_id" class='form-control'  aria-describedby='sizing-addon1' maxlength="15" /><br /></td>
                </tr>
                <tr>
                    <td align="center"><b>Usuario:</b></td>
                </tr>
                <tr>
                    <td><input type="text" name="usuario_nombre" class='form-control'  aria-describedby='sizing-addon1' maxlength="15"/><br /></td>
                </tr>
                <tr>
                    <td align="center"><b>Contraseña:</b></td>
                </tr>
                <tr>
                    <td><input type="password" name="usuario_clave" class='form-control'  aria-describedby='sizing-addon1' maxlength="15" /><br /></td>
                </tr>
                <tr>
                    <td align="center"><b>Confirmar Contraseña:</b></td>
                </tr>
                <tr>
                    <td align="center"><b><input type="password" name="usuario_clave_conf" class='form-control'  aria-describedby='sizing-addon1' maxlength="15" /><br /></td>
                </tr>
                <tr>
                    <td align="center"><b>Email:</b></td>
                </tr>
                <tr>
                    <td><input type="email" name="usuario_email" class='form-control'  aria-describedby='sizing-addon1' maxlength="50" /><br/><br></td>
                </tr>
                <tr>
                    <td align="center">
                        <input type="submit" class="btn btn-success" name="enviar" value="Registrar"/>
                        <input type="reset" class="btn btn-default" value="Limpiar"/>
                    </td>
                </tr>
            </table>            
        </form>
    <?php
        }
    ?> 
    




                </div>
                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
                
            </section>
            <!-- <?php #include("adminaside.html") ?> -->
        </div>
    </section>  <!-- Finaliza Pagina Principal -->
    <hr>
        
    <?php include("adminfooter.html") ?>
    <div class="col-xs-12" align="center">
        <ul class="list-inline text-right" id="pie">
            <li><a href="#">Inicio</a></li>
            <li class="active">Usuarios</li>
            <li class="active">Nuevo</li>
        </ul>
    </div>
</div>      
</body>
</html>
