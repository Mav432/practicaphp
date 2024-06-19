<?php
echo "My firts PHP script!";
echo "<br>";
echo "Mis datos";
$nombre="Marcial";
$edad=18;
$estatura=1.60;
echo " Soy ... " . strtoupper($nombre) . " tengo " . $edad . " años y mido " . $estatura . " metros ";
echo "<br>";
var_dump($nombre);
echo "<br>";
$x=34;
$y=3556.78;
$z=$x + $y;
$r=$x - $y;
$m=$x * $y;
$d=$x / $y;
$e=$x ** $y;
echo "La suma es $x + $y= $z<br>";
echo "La resta es $x - $y= $r<br>";
echo "La multiplicacion es $x * $y= $m<br>";
echo "La division es $x / $y = $d <br>";
echo "La exponenciación es $x ** $y=$e<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica php</title>
</head>
<body>
    Hola!!
</body>
</html>