<a href="http://192.168.0.110/smr2A_Jose/smr2a.php">Jose</a>
Alberto <a href="http://192.168.0.203/SMR2A_ADRIAN/smr2a.php">Adrian</a>

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