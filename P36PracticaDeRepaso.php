<?php
/*CBTIS89
Programa que usa Arrays como lista de animales de un zoologico.
Luna Roacho Osmar Farid
Programacion 3A TM*/

//Define.
$arrayani=array("Pollo","Gallina","Burro","Caballo","Cerdo","Cabra","Zebra","Cobra");

//Ordena.
sort($arrayani);
	foreach($arrayani as $animales){echo $animales."<br>";}
echo "<br>";
echo "Agregamos un capibara a la lista<p>";

//Agrega al capibara.
array_push($arrayani,"Capibara");
sort($arrayani);
foreach ($arrayani as $arraymas){echo $arraymas."<br>";}

//No puede ser :(
echo "Se nos busca al pollo porque no se encuentra";
for($i=0;$i<count($arrayani);$i++)
	//Justo iba a hacer un codigo que cheque al pollo pero ya nos vamos :(

/*Codigo descartado o ineficiente:
Iba ser una tienda pero... hasta que me acuerde como hacerlo lo dejo asi.
$arrayxd=["354"=>"Pollo","738"=>"Gallina","1432"=>"Burro","2939"=>"Caballo","1829"=>"Cerdo","1222"=>"Cabra"];
var_dump($arrayxd);

*/
?>