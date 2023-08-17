<?php
/*
Creamos 3 variables en PHP y luego lo mostramos en el html
*/

$nombre='Irina Medina';
$fecha=date('d-m-Y');
$hora=date('H:i:s');
$precio=5;
$cantidad=10;
$_edad=15;
$EdaD=25;
define('MINOMBRE',"IRINA MEDINA");
const OTRONOMBRE="Diego Zaballos";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
  <p>Hola <?=$nombre;?></p>
  <p>Hoy es <?=$fecha?></p>
  <p>Y son las <?=$hora ?></p>
  <p>El total es <?=$precio + $cantidad; ?> Euros</p>
<?php echo "Mi nombre es " ,MINOMBRE,"<br/>" , "El nombre del alumno es ", OTRONOMBRE;
?>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iste laboriosam libero repellat! Eos expedita impedit iste magni natus nesciunt nulla, porro praesentium quaerat quam quia recusandae repellendus repudiandae sit?</p>
</body>
</html>