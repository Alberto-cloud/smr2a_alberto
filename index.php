<?php
include 'usuarios.php';
?>
<html>
<body>
<center>
<h1><u>AzurePlaces</u></h1>
Por favor, introduce el usuario y la clave

<form name="formulario" method="post" action="usuarios.php">

	Nombre: <input type="text" name="login" value="">
	Clave:	<input type="text" name="password" value="">

<input type="submit" />

</form>
 
</center>
</body>
</html>