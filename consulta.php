<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>.:: Consultas</title>
    <link rel="shortcut icon" href="./img/favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
  <link id="callCss" rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />
  <link id="callCss"rel="stylesheet" href="css/style_body.css" type="text/css" media="screen" charset="utf-8" />
  <link id="callCss"rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8" />

  <link rel="stylesheet" href="slider/css/estiloslider.css">
  <link rel="stylesheet" href="slider/css/style.css">
  <link rel="stylesheet" href="slider/css/stylefont.css">

<!--font api================================================ -->
  <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet"> <!-- titulos-->
  <link href="https://fonts.googleapis.com/css?family=Actor" rel="stylesheet"> <!-- body-->
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> <!-- personal-->
  <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet"> <!-- personal-->
  <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet"> <!-- personal-->
<!--font api================================================ -->

<!--Scripts .js================================================ -->
  <script src="js/jquery-1.9.1.min.js"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <script src="js/jquery.scrollTo-1.4.3.1-min.js" type="text/javascript"></script>
  <script src="js/jquery.easing-1.3.min.js"></script>
  <script src="js/default.js"></script>
  <script src="js/my_js.js"></script>
<!--Scripts .js================================================ -->

</head>

<body id="preinscripcion2">
  <?php 
    include("navbar.html");
  ?>


<div class="container">
  <h1 id="miGaleria">Bienvenid@!</h1> <br><br>  
  <p align="right"><a href="ayuda.php" class="glyphicon glyphicon-question-sign btn-lg text-left"><label>Ayuda</label></a></p>
  <p>Bienvenido, el niño ya está registrado en nuestro sistema, puede inscribirse a los niveles ofertados.</p><br><br>


<?php
  include("funciones.php");
  $ide = $_GET['identificacion'];
?>

<?php
  require("conecta.php");
  if($ide>0){

    $sql = "SELECT * FROM ninos WHERE identificacion = ".$ide;
    $resultado = mysqli_query($conexion,$sql); 
    $registro = mysqli_fetch_assoc($resultado);
                
    if($registro['identificacion']!=""){
        $ced=$registro['identificacion'];
        $nom=$registro['nombre'];   

        ?>      
        <form name = 'fins' action='inscripcion.php' method='POST'>          
          <table align='center'>
            <tr>                                        
              <td><b>Identificación </b></td>
              <td><input type='text' class='form-control' name='ide' id='ide' value = '<?php echo $ide?>' placeholder="" aria-describedby='sizing-addon1'></td>
            </tr>
            <tr>
              <td><br><b>Nombres </b></td>
              <td><br><input type='text' class='form-control' name='nomape' id='nomape' value = '<?php echo $nom?>'  placeholder=""  aria-describedby='sizing-addon1'></td>
            </tr>
            <tr>
              <td colspan="2">
                <center>
                <br>
                  <button type="submit" class="btn btn-large btn-primary">Inscripción a Niveles</button>  <br><br>
                  </center>
              </td>
             </tr> 
          </table><br>
        </form>
        <?php
          
    }else{
      echo '<script>alert("EL USUARIO INGRESADO NO EXISTE EN LA BASE DE DATOS");</script>';
      echo "<script>location.href='preinscripcion.php'</script>";
    }
  }
?>

