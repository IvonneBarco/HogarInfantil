<?php
header("Content-Type: text/html;charset=utf-8");
require_once('fpdf.php');
//header("Content-Type: text/html;charset=utf-8");

 $ins=$_POST['nins'];
 //echo "numero de inscripcion recibido: ".$ins;
 class PDF extends FPDF{
// Cabecera de página
function Header()
{
    // Logo
    $this->Cell(5);
	$this->Image('./img/logo_sinfondo.gif',150,10,40,30);
	$this->Image('./img/logo.png',20,10,40,35);
    $this->Ln(5);
     
      // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(40);
    $this->SetDrawColor(0,80,180);
    $this->SetFillColor(230,230,0);
    $this->SetTextColor(75,0,130);
    $txt=utf8_decode("Formulario de Preinscripción \n");
    $this->MultiCell(0,40,$txt, 'c');
    $this->Ln(1);
}
     
   

	 
// Pie de página
function Footer()
{
	$this->Cell(5);
	
    $this->SetFont('Arial','I',12);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}

//funcion tabla

	 
 }
 //declarar hoja
 $pdf= new PDF('P', 'mm', 'letter');
 $pdf->SetMargins(20,18);
 $pdf->AliasNbPages();
 $pdf->AddPage();
//$pdf->FancyTable($header,$data);
  mysql_connect("localhost", "root", "");
 mysql_select_db("bdhmercedes");
 //http://www.fpdf.org/   dato del título
  $pdf->SetFont("Arial","b",12);
 $pdf->SetFillColor(232,232,232);//este
 $pdf->SetTextColor(0x00, 0x00, 0x00);
 $pdf->Ln(2);//salto de linea

 //mostrar la tabla
 $pdf->Ln(1);//salto de linea
 
//mysql_set_charset('utf8');
 
 // Se consulta los datos de inscripcion
 $sql1="select inscripciones .*, ninos.* from inscripciones, ninos where numeroinscripciones=108 and inscripciones.identificacion=1010 and ninos.identificacion=1010";
 $rec1=mysql_query($sql1);
 $ced="";
 $nom="";
if($row1=mysql_fetch_array($rec1)){
 $cod=$row1['codigo'];
 $ced=$row1['identificacion'];
 $nom=$row1['nombre'];
 $fechins=$row1['fechainscripcion'];
 $fechana=$row1['fechanacimiento'];
 $edad=$row1['edad'];
 $genero=$row1['genero'];
 $direccion=$row1['direccion'];
 $telefono=$row1['telefono'];
 $estrato=$row1['estrato'];
 $eps=$row1['eps'];
 $vacunas=$row1['vacunas'];
 $crecimiento=$row1['crecimiento'];
 $gruposanguineo=$row1['gruposanguineo'];
 $acudiente=$row1['acudiente'];
 $redunidos=$row1['redunidos'];
 $desplazados=$row1['desplazados'];
 $minoriaetnica=$row1['minoriaetnica'];
 $sisben=$row1['sisben'];
 $salariominimo=$row1['salariominimo'];
 $discapacidad=$row1['discapacidad'];
 $rna=$row1['rna'];
 
 

}
else{
	echo"Inscripcion no encontrada";
}
$pdf->Ln(0);//salto de linea
$pdf->Cell(0,8,utf8_decode('DATOS REGISTRADOS'),0,1,'C');//el uno hace un salto de linea y c para centrar
$pdf->Cell(0,8,utf8_decode('Número de Inscripción: ').$ins,0,1);



$pdf->SetFont("Arial","",12);


$pdf->Ln(4);//salto de linea
 //$pdf->SetTextColor(85,107,47); 
 $pdf->SetFont('Times','b',12);
 $pdf->SetFillColor(192,192,192);
 $pdf->SetDrawColor(0,100,00);
 $pdf->Cell(40,8, "Cod Nivel",1,0,'C',95);
 $pdf->Cell(40,8,utf8_decode( 'Identificación'),1,0,'C',95);
 $pdf->Cell(65,8,utf8_decode( 'Nombre'),1,0,'C',95);
 $pdf->Cell(40,8,utf8_decode( 'Fecha Inscripción'),1,0,'C',95);
 $pdf->Ln(8);//salto de linea
 $pdf->Cell(40,8,utf8_decode($cod),1,0,95);
 $pdf->Cell(40,8,utf8_decode($ced),1,0,95);
 $pdf->Cell(65,8,utf8_decode($nom),1,0,95);
 $pdf->Cell(40,8,utf8_decode($fechins),1,0,95);
 $pdf->Ln(8);//salto de linea
 $pdf->Cell(40,8,utf8_decode( 'Fecha Nacimiento'),1,0,'C',95);
 $pdf->Cell(40,8,utf8_decode( 'Edad'),1,0,'C',95);
 $pdf->Cell(65,8,utf8_decode( 'Genero'),1,0,'C',95);
 $pdf->Cell(40,8,utf8_decode( 'Dirección'),1,0,'C',95);
 $pdf->Ln(8);//salto de linea
 $pdf->Cell(40,8,utf8_decode($fechana),1,0,95);
 $pdf->Cell(40,8,utf8_decode($edad),1,0,95);
 $pdf->Cell(65,8,utf8_decode($genero),1,0,95);
 $pdf->Cell(40,8,utf8_decode($direccion),1,0,95);
 $pdf->Ln(8);//salto de linea
 $pdf->Cell(40,8,utf8_decode( 'Teléfono'),1,0,'C',95);
 $pdf->Cell(40,8,utf8_decode( 'Estrato'),1,0,'C',95);
 $pdf->Cell(65,8,utf8_decode( 'EPS'),1,0,'C',95);
 $pdf->Cell(40,8,utf8_decode( 'Vacunas'),1,0,'C',95);
 $pdf->Ln(8);//salto de linea
 $pdf->Cell(40,8,utf8_decode($telefono),1,0,95);
 $pdf->Cell(40,8,utf8_decode($estrato),1,0,95);
 $pdf->Cell(65,8,utf8_decode($eps),1,0,95);
 $pdf->Cell(40,8,utf8_decode($vacunas),1,0,95);
 $pdf->Ln(8);//salto de linea
 $pdf->Cell(40,8,utf8_decode( 'Crecimiento'),1,0,'C',95);
 $pdf->Cell(40,8,utf8_decode( 'Grupo Sanguineo'),1,0,'C',95);
 $pdf->Cell(65,8,utf8_decode( 'Acudiente'),1,0,'C',95);
 $pdf->Cell(40,8,utf8_decode( 'Red Unidos'),1,0,'C',95);
 $pdf->Ln(8);//salto de linea
 $pdf->Cell(40,8,utf8_decode($crecimiento),1,0,95);
 $pdf->Cell(40,8,utf8_decode($gruposanguineo),1,0,95);
 $pdf->Cell(65,8,utf8_decode($acudiente),1,0,95);
 $pdf->Cell(40,8,utf8_decode($vacunas),1,0,95);
 $pdf->Ln(8);//salto de linea
 $pdf->Cell(40,8,utf8_decode( 'Desplazados'),1,0,'C',95);
 $pdf->Cell(40,8,utf8_decode( 'Minoria Étnica'),1,0,'C',95);
 $pdf->Cell(65,8,utf8_decode( 'Sisben'),1,0,'C',95);
 $pdf->Cell(40,8,utf8_decode( 'Salariominimo'),1,0,'C',95);
 $pdf->Ln(8);//salto de linea
 $pdf->Cell(40,8,utf8_decode($desplazados),1,0,95);
 $pdf->Cell(40,8,utf8_decode($gruposanguineo),1,0,95);
 $pdf->Cell(65,8,utf8_decode($sisben),1,0,95);
 $pdf->Cell(40,8,utf8_decode($salariominimo),1,0,95);
 $pdf->Ln(8);//salto de linea
 $pdf->Cell(93,8,utf8_decode( 'Discapacidad'),1,0,'C',95);
 $pdf->Cell(92,8,utf8_decode( 'RNA'),1,0,'C',95);
 $pdf->Ln(8);//salto de linea
 $pdf->Cell(93,8,utf8_decode($discapacidad),1,0,95);
 $pdf->Cell(92,8,utf8_decode($rna),1,0,95);



 $pdf->Ln(10);//salto de linea
 $txt1=utf8_decode("Sandoná, ");
 $pdf->Cell(40,10,$txt1.date('d/m/Y'),0,1,'L');
 $pdf->Ln(12);//salto de linea
 $pdf->Cell(0,5,utf8_decode("Recuerde: Con esta inscripción separará el cupo, para legalizar "), 0,1,'C');
 $pdf->Cell(0,5,utf8_decode("la inscripción debe acercarse a la oficina del Hogar Infantil."),0,1,'C');
 
 $pdf->Ln(20);//salto de linea
 $pdf->Cell(0,5,utf8_decode("Dirección: Kra 1 No. 06-16 Barrio Belen Sandoná-Nariño"),0,1,'C');
 $pdf->Cell(0,5,utf8_decode("Telefono: 7288043"),0,1,'C');
 $pdf->Cell(0,5,utf8_decode("Email: hogarlasmercedes2014@gmail.com"),0,1,'C');
 $pdf->Output();
 
 //Segunda Impresion 
 
?>
