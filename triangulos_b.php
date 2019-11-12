  
<?php
function calcula($a,$b,$c) {
	$r='acutangulo';
	if($a==90 or $b==90 or $c==90)
	$r='rectangulo';
	if($a>90 or $b>90 or $c>90)
	$r='obtusangulo';
	echo $r;
}
	echo calcula(75,50,80)
?>