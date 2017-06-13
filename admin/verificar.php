<?php

/*
 *  Verificar que el usuario haya iniciado sesión para que 
 *  acceda con todos los privilegios y no por url
 * 
 */
session_start(); // Poder acceder a las variables globales

$usuario = $_POST["usuario_nombre"];
$clave = $_POST["usuario_clave"];

include './conectar.php';
$bd = conectar();
if (!$bd)
    return;

$sql = "SELECT * FROM usuarios WHERE usuario_nombre = '$usuario' AND usuario_clave = '$clave'";
$resutado = mysqli_query($bd, $sql);
$conteo = mysqli_num_rows($resutado);

if ($conteo == 0) {
    /*echo "<h3>Error</h3>";
    echo "Usuario no existe";
    echo "<br><a href='index.php'>Regresar</a>";*/
   header("Location: index.php");
} else {
    $arr = mysqli_fetch_array($resutado);
    //echo "<h3>Bienvenido</h3>";
    //echo $arr[1];
    $_SESSION["usuario"] = $arr[1]; //usuario y la manera de leerla es a traves de un arreglo
    header("Location: administracion.php"); //cargue menu.php
}
?>