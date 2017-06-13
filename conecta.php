<?php
$servidor = "localhost";
$basedatos = "bdhmercedes";
$usuario = "root";
$clave = "";
$conexion = mysqli_connect($servidor, $usuario, $clave, $basedatos);

// verificamos conexion, si no se pudo conectar muestra el error
if (mysqli_connect_errno())
  {
  echo "Error de conexión a la base de datos: " . mysqli_connect_error();
  }


  //*****

 	$cn=mysql_connect("localhost","root","")or die("Error en Conexion");
	$db=mysql_select_db("bdhmercedes")or die("Error en Db");
	return($cn);
	return($db);


# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_cnx_slider = "localhost";
$database_cnx_slider = "bdhmercedes";
$username_cnx_slider = "root";
$password_cnx_slider = "";
$cnx_slider = mysql_pconnect($hostname_cnx_slider, $username_cnx_slider, $password_cnx_slider) or trigger_error(mysql_error(),E_USER_ERROR); 

$host_db = "localhost"; // Host de la BD
    $usuario_db = "root"; // Usuario de la BD
    $clave_db = ""; // Contraseña de la BD
    $nombre_db = "bdhmercedes"; // Nombre de la BD
    
    //conectamos y seleccionamos db
    mysql_connect($host_db, $usuario_db, $clave_db);
    mysql_select_db($nombre_db);
   ?>
