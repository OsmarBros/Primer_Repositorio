<?php

/*CBTIS89
P10Promedio
Programa que imprime la tres calificaciones de un alumno
Luna Roacho Osmar Farid
3a Programaciòn Matutino
*/

$alumno="Osborn";
$N1;$N2;$N3;
$N1=6.8;
$N2=8.9;
$N3=10;
$Tot=($N1+$N2+$N3)/3;

if ($Tot<6)
	{echo $alumno," reprobo con ",$Tot," de promedio.";}

if ($Tot>=6)
	{echo $alumno," aprobo con ",$Tot," de promedio.";}
?>