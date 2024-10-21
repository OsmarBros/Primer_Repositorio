<?php
/*
CBTIS89
Programa que los valores desde el 1 hasta el nùmero aleatorio generado usando Do While
Luna Roacho Osmar Farid
Programaciòn 3A TM
*/
$valor=rand(1,100);
$inicio=1;
do {
	echo $inicio;
	echo"<br>";
	$inicio ++;
} while ($inicio <= $valor);
	?>