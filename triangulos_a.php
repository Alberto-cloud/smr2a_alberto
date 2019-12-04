<?php
function calcula($a,$b,$c){
	$r='escaleno';
	if($a==$b or $b==$c or $a==$c)
		$r='isósceles';
	if($a==$b and $b==$c)
		$r='equilátero';
	return $r;
}
echo calcula(1,1,1).' => equilátero<br/>';
echo calcula(1,1,2).' => isósceles<br/>';
echo calcula(2,1,2).' => isósceles<br/>';
echo calcula(2,1,1).' => isósceles<br/>';
echo calcula(2,1,3).' => escaleno<br/>';
		?>