<?php

session_start();

function verificar() {
    if (!isset($_SESSION["usuario"]) || $_SESSION["usuario"] == "") {  //si no esta creado el usuario o el usuario esta vacio
        /*echo "<h3 align= 'center'>USTED NO HA INICIADO SESIÓN</h3>";
        echo "<br><center>Acceda con su cuenta de usuario y contraseña</center>";
        echo "<br><center><a href='index.php'>REGRESAR</a></center>";*/
        header("Location: index.php");
        return 0;
    }

    return 1;
}

function conectar() {

    $bd = mysqli_connect("	mysql12.000webhost.com", "a5927512_root", "123456sandona", "a5927512_cultura");
    if (!$bd) {
        echo "<h3>Conexión fallida</h3>";
        echo mysqli_error($bd);
        return NULL;
    }
    return $bd;
}


/*function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}*/

/*$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO personal (identificacion, descripcion, imagen) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['identificacion'], "text"),
                       GetSQLValueString($_POST['descripcion'], "text"),
                       GetSQLValueString($_POST['imagen'], "text"));

  mysql_select_db($database_cnx_slider, $cnx_slider);
  $Result1 = mysql_query($insertSQL, $cnx_slider) or die(mysql_error());

  $insertGoTo = "lista_slider.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}*/

function fecha_actual(){
 $nds=date("w");
 $ndm=date("d");
 $nms=date("n");
 $anio=date("Y");
 switch($nds) {
  case 0:
       $nomdia="Domingo";
       break;
  case 1:
       $nomdia="Lunes";
       break;
  case 2:
       $nomdia="Martes";
       break;
  case 3:
       $nomdia="Mi&eacute;rcoles";
       break;
  case 4:
       $nomdia="Jueves";
       break;
  case 5:
       $nomdia="Viernes";
       break;
  case 6:
       $nomdia="S&aacute;bado";
       break;
 }
 switch($nms) {
  case 1:
     $nommes="Enero";
     break;
 case 2:
     $nommes="Febrero";
     break;
 case 3:
     $nommes="Marzo";
     break;
 case 4:
     $nommes="Abril";
     break;
 case 5:
     $nommes="Mayo";
     break;
 case 6:
     $nommes="Junio";
     break;
 case 7:
     $nommes="Julio";
     break;
 case 8:
     $nommes="Agosto";
     break;
 case 9:
     $nommes="Septiembre";
     break;
 case 10:
     $nommes="Octubre";
     break;
 case 11:
     $nommes="Noviembre";
     break;
 case 12:
     $nommes="Diciembre";
     break;
 }
  $fa="$ndm de $nommes de $anio";
  return $fa;
}

?>
