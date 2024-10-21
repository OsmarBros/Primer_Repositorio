<?php
/* CBTIS 89
P04Edad
Programa que imprime el nombre y edad de una persona
Osmar Farid Luna Roacho
3a Programaciòn Matutino
*/

$edad=106;
$nombre="Osmar";
$nombre1="Farid";
$apellido1="Luna";
$apellido2="Roacho";

echo "Tu nombre es ", $nombre." ".$apellido1." ".$apellido2;
echo "<br>";
echo "Tienes ", $edad, " años";

if ($edad>=18)
	{echo "<br>";
echo "Eres mayor de edad";}

elseif ($edad<18)
	{echo "<br>";
echo "Eres menor de edad";}

?>