<?php

function fecha_actual()
{
 $nds=date("w");
 $ndm=date("d");
 $nms=date("n");
 $anio=date("Y");
 switch($nds)
 {
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
 switch($nms)
 {
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
  $f="$ndm de $nommes de $anio";
  //return $f;
}
?>
