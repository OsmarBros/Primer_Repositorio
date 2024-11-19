<?php
/*CBTIS89
P40Array20.php
Programa que almacena por medio de un ciclo los números del 150 al 200 de la siguiente manera:
En $Arreglo1 van pares, en $Arreglo2 van impares, en $Arreglo3 va la suma de números correspondiente al mismo índice.
Luna Roacho Osmar Farid
Programación 3A TM*/

$Arreglo1=array();
$Arreglo2=array();
$Arreglo3=array();

echo "Arreglo1 ---- Arreglo2 ---- Arreglo3";echo"<br>";

for($i=150; $i<=201; $i++)
	{if ($i%2==0)
		{$Arreglo1[]=$i;}

else {$Arreglo2[]=$i;}}

for($i=0;$i<$longitud=count($Arreglo1);$i++){
	$Arreglo3[]=$Arreglo1[$i]+$Arreglo2[$i];
}
for($i=0;$i<$longitud=count($Arreglo1);$i++){
	echo $Arreglo1[$i],"------------",$Arreglo2[$i],"-----------",$Arreglo3[$i];
	echo "<br>";
}
?>