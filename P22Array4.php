<?php
/*
CBTIS89
Programa que almacena datos en un arreglo y posteriormente los imprime
Luna Roacho Osmar Farid
Programaciòn 3A TM
*/
$equipo=array("portero"=>'Julio','defensa'=>'Diego','medio'=>'Jair','delantero'=>'Rafa');

echo "** SELECCIÒN NACIONAL **","<br>","<br>";
foreach($equipo as $posicion=>$jugador)
	{echo "El jugador ".$jugador." es el ".$posicion;
echo "<br>","<br>";}
?>