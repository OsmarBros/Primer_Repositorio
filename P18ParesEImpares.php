<?php
/*
CBTIS89
Programa que imprime del 1 al 30 y clasifica PARES e IMPARES
Luna Roacho Osmar Farid
Programaciòn 3A TM
*/
$np=0;$ni=0;
for($i=1;$i<=30;$i++)
{$residuo=$i%2;
if($residuo==0)
{$np=$np+$i;}
else
{$ni=$ni+$i;}
}
echo "La suma de los nùmeros PARES es: ",$np,"<br>";
echo "La suma de los nùmeros IMPARES es: ",$ni,"<br>";
//Ei ei ei im on vacation//
?>