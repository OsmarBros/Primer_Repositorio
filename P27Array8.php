<?php
/*
*/

$numeros=array();
for ($i=1;$i<=100;$i++){
	$numeros[]=$i;
}

foreach($numeros as $numero){
	if ($numero%2==0){
	echo $numero . "\n";
}
echo "<br>";
if ($numero%2!=0){
	echo $numero . "\n";
}
}
?>