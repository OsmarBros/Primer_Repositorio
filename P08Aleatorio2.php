<?php
/*CBTIS89
P08Aleatorio2
Programa que imprime un numero o calificacion aleatorio del salon
Luna Roacho Osmar Farid
3a Programaciòn Matutino
*/

$alumno="Popo";
$num=rand(1,10);

if ($num<6)
	{echo $alumno," reprobo con ",$num;}
else
	{echo $alumno," aprobo con ",$num;}
?>