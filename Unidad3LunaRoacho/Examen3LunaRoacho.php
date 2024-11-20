<?php
/*CBTIS89
Examen3LunaRoacho.php

Programa que almacena el nombre de 4 personas en $Productos y en otro arreglo multidimensional $Precios almacena los precios almacena los precios correspondientes de 3 meses, por medio de filas y columnas.

Calcula con ciclos el subtotal y promedio de cada producto y guardalo en $Subtotal y $Promedio correspondientemente.

Luna Roacho Osmar Farid
Programación 3A TM*/

echo "CBTIS89<br> Luna Roacho Osmar Farid - Programación 3A TM";

//Define los arreglos.
$Productos=array("Vestido","Pantalon","Cinturon","Camiseta");
$Precio=array(array(500 ,600 ,550),array(800 ,700 ,600),array(400,200,300),array(500 ,200 ,500));
$Subtotal=array();
$Promedio=array();
//foreach ($Productos as $Productos->$Precio);

echo "<p>TIENDA DE ROPA<br>";

echo "Productos------Subtotal------Promedio<br>";
$l=count($Productos);

//Imprime la filas de la tienda con sus productos, subtotales y promedios usando ciclos for (si funcionara bien).
for($a=0;$a<4;$a++){echo $Productos[$a];
	$Subtotal[$a]=$Precio[$a]+$Precio[$a];
	echo $Subtotal[$a];
}
for($a=0;$a<$l;$a++){

}

echo "<p>Precios<br><br>";

//Imprime los precios en tabla usando 2 ciclos for.
for($i=0;$i<4;$i++){
for($j=0;$j<3;$j++){
echo $Precio[$i][$j]." ";}
echo "<br>";}

/*for($a=0;$a<3;$a++)
{//echo "---",$Productos[$a];

for($b=0;$b<3;$b++){
	$Subtotal[]=$Precio[$b]+[$b];
	}}

echo "Producto","Subtotal","Promedio";

for($d=0;$d<3;$d++){
for($c=0;$c<3;$c++){
	echo $Subtotal[$c];
}}*/

//No puedo con esto :,(

?>