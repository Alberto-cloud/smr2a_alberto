<a href="http://192.168.0.115/smr2A_Cristian/smr2a.php">Cristian</a>
Alberto <a href="http://192.168.0.108/SMR2A-VCR/smr2a.php">Victor</a>
<html>
	<h1>
		<a href="http://192.168.0.93/smr2a_alberto/catalogo.php">LISTA GITHUB</a>
	</h1>
	</html>
<?php
$f=fopen('visitas.txt','a');
fwrite($f,date('Y-m-d H:i'));
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f);
?>

<?php
if(isset($_GET['correo'])){
	$f=fopen('suscriptores.txt','a');
	fwrite($f,$_GET['correo']."\r\n");
	fclose($f);
}
?>


<html>
<body>

<form>
    Email: <input type="email" name="correo"><br>
    <button>Enviar</button>
</form>

</body>
</html>