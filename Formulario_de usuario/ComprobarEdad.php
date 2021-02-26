<?php
$Nombre = $_GET["nombre"];
$Correo = $_GET["correo"];
$Fecha  = $_GET["fecha"];


$anio_actual = strftime("%Y");

$f = $Fecha[0];
$c = $Fecha[1];
$q = $Fecha[2];
$g = $Fecha[3];
$total = $f.$c.$q.$g;

if(($anio_actual-$total) > 18) 
{
    echo "<br><h2><center>Bienvdenido a mi página web" . "\n$Nombre</h2>";  
    echo "<br><center>" . "Te dejo mi orreo electrónico". $Correo;
}

else{
    echo "No puedes acceder, porque eres menor de edad";
}
?>