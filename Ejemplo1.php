<?php
$num1 = "10.34"; //Cadena
$num2 = 15; //Entero

$suma = $num1 + $num2;
echo $suma;
$num1 = "50";
echo "<br>";
settype($num1, 'float');

echo number_format($num1, 1);
