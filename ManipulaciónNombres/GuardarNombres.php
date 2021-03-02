<?php
session_start();
$Nombre = array();
echo "<center>";

echo "<br><br><h2>Registrando Nombres</h1>";

if(isset($_POST['nombre']))
{
    if(isset($_SESSION['Nombre'])){
         $Nombre = $_SESSION['Nombre'];
         $Nombre[] = $_POST['nombre'];
         $_SESSION['Nombre'] = $Nombre;
     } 
}
$Contador = $_SESSION["Nombre"];
foreach($Contador as $Con)
{
    echo "<br>El nombre es: ";
    echo $Con."<br><center>" ;
} 
?>


