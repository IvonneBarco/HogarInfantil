<?php
/*Rutinna verificarSesion:
* Me permitirá verificar si se inicio sesion
*
*/

	session_start();
	function verificar(){
		if (!isset($_SESSION["usuario"]) || $_SESSION["usuario"]=="") {  //si no esta creado el usuario o el usuario esta vacio
			/*echo "<h3>Error</h3>";
			echo "<br>Sesión no Inicializada";
			echo "<br><a href='index.php'>Regresar*</a>";*/
			header("Location: index.php");
			return 0;
		}

		return 1;
	}
?>