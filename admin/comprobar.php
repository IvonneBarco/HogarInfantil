<!--font api================================================ -->
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet"> <!-- titulos-->
    <link href="https://fonts.googleapis.com/css?family=Actor" rel="stylesheet"> <!-- body-->
<!--font api================================================ -->
 <?php
   
    include('conecta.php');
    if(isset($_POST['enviar'])) { // comprobamos que se hayan enviado los datos del formulario
        // comprobamos que los campos usuarios_nombre y usuario_clave no estén vacíos
        if(empty($_POST['usuario_nombre']) || empty($_POST['usuario_clave'])) {
            echo "El usuario o la contraseña no han sido ingresados. <a href='javascript:history.back();'>Reintentar</a>";
        }else {
            // "limpiamos" los campos del formulario de posibles códigos maliciosos
            $usuario_nombre = mysql_real_escape_string($_POST['usuario_nombre']);
            $usuario_clave = mysql_real_escape_string($_POST['usuario_clave']);
            $usuario_clave = ($usuario_clave);
           
            // comprobamos que los datos ingresados en el formulario coincidan con los de la BD
            $sql = mysql_query("SELECT usuario_id, usuario_nombre, usuario_clave FROM usuarios WHERE usuario_nombre='".$usuario_nombre."' AND usuario_clave='".$usuario_clave."'");
            if($row = mysql_fetch_array($sql)) {
                $_SESSION['usuario_id'] = $row['usuario_id']; // creamos la sesion "usuario_id" y le asignamos como valor el campo usuario_id
                $_SESSION['usuario_nombre'] = $row["usuario_nombre"]; // creamos la sesion "usuario_nombre" y le asignamos como valor el campo usuario_nombre
                header("Location: administracion.php");
            }else {
?>
                Error el uruario o conteseña son incorrector, <a href="acceso.php">Reintentar</a>
<?php
            }
        }
    }else {
        header("Location: administracion.php");
    }
?> 
