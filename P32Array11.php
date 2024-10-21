<?php


$arraynumero=array("Camisa",	"Pantalon","Cinturon");
	foreach($arraynumero as $ropa){
echo "$ropa","<br>";
}
echo "Orden Ascendente ";
sort($arraynumero);
var_export($arraynumero);

echo "<p>";
echo "Orden Descendente ";
rsort($arraynumero);
var_export($arraynumero);
?>