<?php
$número1 = $_POST["numero1"];
$número2 = $_POST["numero2"];
$operación = $_POST["operación"];

$resultado = "";
//echo "Numeros . $numero1 . " " . $numero2 . " " . $operación;

if($operación == "Suma")
{
   $resultado = $número1 + $número2;
}

if($operación == "Resta")
{
   $resultado = $número1 - $número2;
}

if($operación == "Multiplicación")
{
   $resultado = $número1 * $número2;
}

if($operación == "División")
{
   $resultado = $número1 / $número2;
}

echo "Resultado = " . $resultado; 

?>