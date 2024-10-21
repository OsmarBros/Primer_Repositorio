<?php
/*
*/
//Almacena datos en un arreglo.
$arraydatos=["Karina","Rosales","Orozco"];

//Convierte un array en una cadena de texto.
$string=implode(" ",$arraydatos);
echo "Cadena de texto <br>";
echo $string;
echo "<br>","<br>";

//Cadena de texto a separar.
$cadena="Tercero de programación matutino";

//Convierte una cadena de texto en un array
$array=explode(" ",$cadena);

$longitud=count($array);
echo "<br>";
echo "Arreglo con datos de tipo string <br>";

//Imprime los elementos del arreglo.
for ($i=0;$i<$longitud;$i++)
{//Se obtiene el valor de cada elemento
echo $array[$i];
echo "<br>";
}
?>