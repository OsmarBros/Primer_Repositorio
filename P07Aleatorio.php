<?php
/*CBTIS89
P07Aleatorio
Programa que imprime un nùmero aleatorio del 1 al 100
Luna Roacho Osmar Farid
3a Programaciòn Matutino
*/

$num=rand(1,100);

echo $num;
if($num<=50)
	{echo "<br>El nùmero es menor o igual a 50";}

else
{echo "<br>El nùmero es mayor a 50";}

?>
