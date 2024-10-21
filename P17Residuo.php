<?php
/*
CBTIS89
Programa que genera numeros aleatorios  e indica si uno es PAR o IMPAR
Luna Roacho Osmar Farid
Programaciòn 3A TM
*/
echo "Nùmeros Aleatorios";
echo "<br>","<br>";

for($k=1; $k<=5; $k++)
	{$valor=rand(1,50);
		$resi=$valor%2;
		echo "El nùmero es ", $valor;
		if ($resi==0)
			{echo " es nùmero PAR","<br>","<br>";}
		else
			{echo " es nùmero IMPAR","<br>","<br>";}
	
}
?>