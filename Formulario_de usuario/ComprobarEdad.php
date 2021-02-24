<?php
$nombre = $_GET['nombre'];
$correo = $_GET['correo'];
$fecha_de_nacimiento = $_GET['fecha_de_nacimiento'];

echo "<h2>Bienvenido al sitio</h2>";
echo "El nombre del usuario es: " . $nombre . "<br/>";
echo "El correo del usuario es: " . $correo . "<br/>";
echo "La fecha de nacimiento del usuario es: " . $fecha_de_nacimiento . "<br/>";


?>