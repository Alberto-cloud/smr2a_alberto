<?php
function calcula($a){
	
	$r='SOBRESALIENTE';
	if ($a<8.5)
		$r='NOTABLE';
	if ($a<7)
		$r='APROBADO';
	if($a<5)
		$r='PENDIENTE';
	return $r;
}
echo calcula(8.8);
?>