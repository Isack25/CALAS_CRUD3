<?php 
$mysql = new mysqli("localhost", "root", "", "calas");
	if ($mysql->connect_error)
		die("Problemas con la conexion a la base de datos");

$mysql->query("insert into clientes(name,disponible,service,phone,location)
	values('$_REQUEST[nombre]','$_REQUEST[info]','$_REQUEST[servicio]','$_REQUEST[phone]','$_REQUEST[direccion]')") or
die($mysql->error);

$mysql->close();

header('Location:pedidos_list_admin.php')
?>