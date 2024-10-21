<?php
/*
CBTIS 89
P05Ventas
Programa que imprime el descuento y pago total de un producto
Osmar Farid Luna Roacho
3a Programaciòn Matutino
*/

$P1;$P2;$P3;$Suma;$Des;$Pago;
$P1=102;
$P2=rand(323,342);
$P3=rand(22,1444);
$Suma=$P1+$P2+$P3;

echo "La suma es= ",$Suma;

if ($Suma<1000)
{echo "<br>";
$Des=$Suma*0.05;
echo "El descuento es= ", $Des;
echo "<br>";
$Pago=$Suma-$Des;
echo "El total es= ", $Pago;
echo "<br>";}

elseif ($Suma >= 1000 && $Suma<2500)
{echo "<br>";
$Des = $Suma * 0.1;
echo "El descuento es= ", $Des;
echo "<br>";
$Pago = $Suma - $Des;
echo "El total es= ", $Pago;
echo "<br>";}

?>