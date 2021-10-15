<?php
$mysql = new mysqli("localhost", "root", "", "calas");
if ($mysql->connect_error)
    die("Problems with the conection");

$mysql->query("delete from clientes where id=$_REQUEST[codigo]") or
    die($mysql->error);

$mysql->close();

header('Location:pedidos_list_admin.php')
?>