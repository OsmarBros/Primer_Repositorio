<?php
/*CBTIS89
Programa que almacena en $Compras valores de 6 compras, y luego en otros arreglos se almacena datos de acuerdo a lo siguiente:
Compra menor 300=0%
Compra mayor 300 y menor o igual 1000= 10%
Compra mayor 1000 y menor o igual a 2500= 15%
Compra mayor 2500 y menor o igual a 5000= 20%
Comprea mayor a 5000= 25%

En el arreglo $Total se coloca la diferencia entre la compra y el descuento y en arreglo $Porcentaje colocar el porcentaje que se le aplico al descuento.
Luna Roacho Osmar Farid
Programación 3A TM*/
echo "Compras  --  Descuentos  --  Total  --  P.Descuento<br>";
$Compras=array(800,2700,1900,150,7600,1000);
$Descuentos=array();
$Total=array();
$Porcentaje=array();

$l=count($Compras);
for($i=0;$i<$l;$i++){
	if($Compras[$i]<=300){
$Porcentaje[$i]="0%";
$Descuentos[$i]=0;
	}


	if($Compras[$i]>300 && $Compras[$i]<=1000){
$Porcentaje[$i]="10%";
$Descuentos[$i]=$Compras[$i]*0.10;
	}

		if($Compras[$i]>1000 && $Compras[$i]<=2500){
	$Porcentaje[$i]="15%";
	$Descuentos[$i]=$Compras[$i]*0.15;
		}

	if($Compras[$i]>2500 && $Compras[$i]<=5000){
$Porcentaje[$i]="20%";
$Descuentos[$i]=$Compras[$i]*0.20;
	}

	if($Compras[$i]>5000){
$Porcentaje[$i]="25%";
$Descuentos[$i]=$Compras[$i]*0.25;
}

$Total[$i]=$Compras[$i]-$Descuentos[$i];
	echo "$Compras[$i] ----------  $Descuentos[$i] ----------  $Total[$i] ----------  $Porcentaje[$i]" ;
   echo "<br>";
}
?>