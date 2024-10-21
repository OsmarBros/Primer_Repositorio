<?php
/*CBTIS 89
Programa que almacena diversos datos en un arreglo y luego los imprime por medio de un ciclo For
Luna Roacho Osmar Farid
3a Programaciòn TM 
*/
$nombre1="Jazmin";
$nombre2="Osmar";
$nombre3="Papu";
$nombre4="Poto";
$nombre5="Ela Nito";
$nombre6="Pepe";

$array=array($nombre1,$nombre2,$nombre3,$nombre4,$nombre5,$nombre6);

$longitud=count($array);
///Recoge todo los elentos
for($i=0; $i<$longitud; $i++)
	{echo $array[$i];
		echo "<br>";
	}
?>