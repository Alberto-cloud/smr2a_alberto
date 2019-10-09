<?php
$meses=["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
for($i=0;$i<12;$i++)
	echo $meses[$i].'<br>';	
foreach ($meses as $mes)
	echo $mes.'<br>';
//	exit();
function mes($n){
	$meses=["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
	return $meses[$n-1];
}
$m = mes(9);

echo $m;







?>