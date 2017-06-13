<?php

/* Rutinna Cerrar:
 * Me permitirá cerrar sesiones
 *
 */
session_start();
$_SESSION["usuario"] = "";
/*session_destroy(); //elimina todas las variables que se han creado
echo "<center><h2>GRACIAS POR VISITARNOS</h2></center>";
echo "<center><h3>Su Sesión ha Finalizado</h3></center>";
echo "<center><a href='index.php'>REGRESAR AL INICIO</a></center>";*/

if (session_destroy()) {
	header("Location: index.php");
}
?>