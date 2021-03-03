<?php
 require 'ConexBD.php';
 $Nombre  = $_POST['nombre'];
 $Apellido  = $_POST['apellido'];
 $Edad = $_POST['edad'];
 $Sexo = $_POST['sexo'];
 $Dirección = $_POST['dirección'];
 

$query = <<<SQL
INSERT INTO registropersonal(Nombre,Apellido,Edad,Sexo,Dirección) VALUES (:nombre,:apellido,:edad,:sexo,:dirección)
SQL;
$statement = $db->prepare($query);
$params = [
    'nombre' => $Nombre,
    'apellido' => $Apellido,
    'edad' => $Edad,
    'sexo' => $Sexo,
    'dirección' => $Dirección,
];
//$statement->execute($params);
if($statement){
   echo "<script> alert('Datos Correctamente Ingresados'); location.href = '../Index.html'; </script>";
}else{
    echo "<script> alert('Datos Incorrecto'); location.href = '../Index.html'; </script>";
}
?>