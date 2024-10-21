<?php
/*
CBTIS89
Programa que usa Array para una tienda
Luna Roacho Osmar Farid
Programaciòn 3A TM
*/
$producto=array("papa"=>"44","maruchan"=>"25","yakult"=>"32","agua"=>"23","leche"=>"43","cepillo dental"=>"34");

echo "**Miscelano**","<br>","<br>";
foreach($producto as $producto=>$precio)
	{echo "El kilo de ".$producto." cuesta ".$precio;
echo "<br>","<br>";
}
?>