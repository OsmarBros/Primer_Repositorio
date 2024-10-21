<?php
/*
CBTIS89
Programa que imprime los valores desde el 1 hasta el numero que se genero aleatoriamente
Luna Roacho Osmar Farid
Programaciòn 3A TM
*/

$valor=rand(1,100);
   $inicio=1;
   while ($inicio<=$valor)
   {echo $inicio;
    echo "<br>";
    $inicio++;
   }
?>