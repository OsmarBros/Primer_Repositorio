<?php
/*CBTIS89
P39Array19.php
Programa que almacena infomación de 6 personas y dependiendo la edad los pone en arreglos dependiendo:
Si alguien es menor a 18, se coloca 1 en $Grupo1 y en otros 0.
Si alguien tiene 18 a 49 se coloca 1 en $Grupo2 y en otros 0.
Si alguien tiene 50 o más, se pone 1 en $Grupo3 y en otros 0.
Luna Roacho Osmar Farid
Programación 3A TM
*/
$Nombre=array("Paco","Mari","Lalo","Rosi","Paty","Beto");
$Edad=array(17,30,71,38,12,58);
$Grupo1=array();
$Grupo2=array();
$Grupo3=array();

for($i=0;$i<count($Nombre);$i++){
if ($Edad[$i]<18)
	{$Grupo1[]=1;}
else{$Grupo1[]=0;}

if($Edad[$i]>=18&&$Edad[$i]<50)
{$Grupo2[]=1;}
else{$Grupo2[]=0;}

if ($Edad[$i]>50)
	{$Grupo3[]=1;}
else{$Grupo3[]=0;}
}
echo "Nombre ---- Edad ---- Grupo 1 ---- Grupo 2 ---- Grupo 3 </P>";
for($i=0;$i<count($Nombre);$i++){
	echo $Nombre[$i]," -------------",$Edad[$i]," ------------- ",$Grupo1[$i]," ------------- ",$Grupo2[$i]," ------------- ",$Grupo3[$i];
	echo "<br>";
}

?>