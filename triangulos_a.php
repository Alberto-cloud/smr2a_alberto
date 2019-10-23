<?php
function lados($a,$b,$c){
if ($a==$b and $b==$c){
	echo "Equilátero";
}
if ($a==$b or $a==$c or$b==$c){
	echo "Isósceles";
}
if ($a!==$b and $b!==$c){
	echo "Escaleno";
}
}
lados(58,43,43);

?>