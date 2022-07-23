<?php
//DECLARACION DE VARIABLES
/* 1. MOSTRAR EL NOMBRE, APELLIDO, EDAD, TELEFONO, DUI SEXO DE UNA PERSONA 
*/
$_nombre = "DARWIN ALFONSO";
$_apellido = "FLORES COLINDRES";
$edad = 20;
$telefono = "2323-2323";
$dui = "02324234-0";
$sexo = 'M';

//IMPRIMIR
echo "<h1><strong>NOMBRE COMPLETO:</strong> " . $_nombre . " " . $_apellido . "<br>";
echo "<strong>EDAD: </strong>" . $edad . "<br>";
echo "<strong>TELÉFONO: </strong>" . $telefono . "<br>";
echo "<strong>DUI:</strong> " . $dui . "<br>";
echo "<strong>SEXO: </strong> " . $sexo . "<br></h1>";

$n1 = 4;
$n2 = 2;
$n3 = 3;

$promedio = ($n1 + $n2 + $n3) / 3;
echo "NOmbre del alumno: " . $_nombre . " " . $_apellido . "<br><h2>Hola</h2>";
echo "EL PROMEDIO ES: " . $promedio;
