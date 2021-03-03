<?php
$Numeros=$_GET["número"];
$Cant=1;
$S=1;
$T=0;

if($Numeros > 20)
{}
else 
{
    echo "<h2><center><br>La cantidad de numeros aleatorios son: $Numeros<br/><center/></h2>";
    while ($Cant<=$Numeros)
    {
        $rand=rand(0,20);
        echo "<br><center>Número: $rand<br/>";
        $T+=$rand;
        $Cant++;
 
    }

    $S+=$Cant;
    echo "<h3><br>La suma de los n&uacute;meros generados es: $T<br/>";
}
