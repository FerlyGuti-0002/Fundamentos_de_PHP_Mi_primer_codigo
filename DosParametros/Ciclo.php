<?php
if(!$_POST) {
    header('Location:DosParametros.html');
}

$nombre = $_POST['nombre'];
$número = $_POST['número'];
$ciclo = 1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de registro</title>
</head>
<body>
<h2><center>Nombre de la persona registrada: <?php echo $nombre ?></h2>
<center>
    <body>
        <table border="1";
            <thead>
            <tr>
            <th>Cantidad de Registro:<td> <?php echo $número ?></td></th>                                      
            </tr>
            
        </thead>
        </table>
        </body>
    <?php       
   
if($número > 10000){

}

else{
    while($ciclo <= $número){
        
       echo "<center><p>{$ciclo} {$nombre} " . "</p>";
        $ciclo++;
     }

}
    ?>
    
   
  
</body>
</html>

