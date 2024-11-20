<?php
/*CBTIS89
Programa que almacena datos en un arreglo multidimensional y luego los imprime en diferentes posiciones
Luna Roacho Osmar Farid
Programacion 3A TM
*/
$datos=array(array(10, 20, 30),array(40, 50, 60),array(70, 80, 90));

echo "<br>Normal";
echo"<br>";
for($i=0;$i<3;$i++)
{for($j=0;$j<3;$j++)
{echo $datos[$i][$j]." ";}
echo "<br>";}

echo "<br>Columnas";
echo"<br>";
for($i=0;$i<3;$i++)
{for($j=0;$j<3;$j++)
{echo $datos[$j][$i]." ";}
echo "<br>";}

echo "<br>Columnas inversas";
echo"<br>";
for($i=0;$i<3;$i++)
{for($j=0;$j<3;$j++)
{rsort($datos[$i]);
	echo $datos[$i][$j]." ";}
echo "<br>";}

echo "<br>Inversas";
echo"<br>";
for($i=0;$i<3;$i++)
{for($j=0;$j<3;$j++)
{sort ($datos[$i]);
rsort($datos[$i]);
echo $datos[$j][$i]." ";}
echo "<br>";}


?>