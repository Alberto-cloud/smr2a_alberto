  
<?php
function calcula($a,$b,$c) {
	$r='acutángulo';
	if($a==90 or $b==90 or $b==90)
		$r='rectángulo';
	if($a>90 or $b>90 or $c>90)
		$r='obtusángulo';
	if(($a+$b+$c)!=180)
		$r='error';
	return $r;
}
	echo calcula(60,60,60).' => acutangulo<br/>';
	echo calcula (90,45,45).' => rectángulo<br/>';
	echo calcula (20,60,100).' => obtusángulo<br/>';
	echo calcula (100,40,40).' => otusángulo<br/>';
	echo calcula (45,45,90).' => rectángulo<br/>';
	echo calcula (45,90,45).' => rectángulo<br/>';
	echo calcula (120,45,45).' => error<br/>';
?>