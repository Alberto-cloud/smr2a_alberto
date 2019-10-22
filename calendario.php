<?php
$meses=[
	"1"=>['31','Enero','Invierno'],
	"2"=>['28/29','Febrero','Invierno'],
	"3"=>['31','Marzo','Primavera'],
	"4"=>['30','Abril','Primavera'],
	"5"=>['31','Mayo','Primavera'],
	"6"=>['30','Junio','Verano'],
	"7"=>['31','Julio','Verano'],
	"8"=>['30','Agosto','Verano'],
	"9"=>['31','Septiembre','Otoño'],
	"10"=>['30','Octubre','Otoño'],
	"11"=>['31','Noviembre','Otoño'],
	"12"=>['30','Diciembre','Invierno'],
];
/*
echo '<pre>';
print_r($meses);
echo '</pre>';
echo $meses[1] [0];
*/
foreach($meses as $mes){
	echo $mes['1'];
	echo ' tiene '; 
	echo $mes['0'].' dias ';
	echo ' y es ';
	echo $mes['2'];
	echo '<br>';
}
?>