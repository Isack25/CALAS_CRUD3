<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pedidos en linea</title>
	<style type="text/css">
		.fondo{
			background:white;
			font-family: 'Poppins', sans-serif;
		}
		h2{
			color:#EBA271;
			
		}
		.tabla{
			padding-left: 20%;
		}
		input{
			border: 1px solid #796458;
			border-radius: 9px;
			padding: 10px;
			width: 600px;
			border: 1px solid #CECCCC;
		}
		input:hover{
			color: black;
			background-color: #F2F2F2;
			border: none;
		}
		
		.boton{
			width:150px;
			border-radius: 2rem;
			background-color: white;
			color: #EBA271 ;
			border:none;
		}
		.boton:hover{
			background-color: #EBA271;
			color: white;
		}
		td{
			text-align: left;
		}
		td{
			padding: 10px;
		}

	</style>
</head>
<body class="fondo">
<h2 align="center">Realiza tus pedidos en linea</h2>
<form action="pedidos_add_admin.php" method="post">
	<table class="tabla">
		<tr>
			<td><input type="" name="nombre" placeholder="Nombre" required></td>
		</tr>
		<tr>
			<td><input type="number" name="info" placeholder="Cántidad" required></td>
		</tr>
		<tr>
			<td><input type="text" name="direccion" placeholder="Dirección" required></td>
		</tr>
		<tr>
			<td><input type="text" name="telefono" placeholder="+503 Numero" required></td>
		</tr>
		<tr>
			<td class="letra">Seleccione el servicio que desea:</td>
		</tr>
		<tr>
			<td>
				<select name="servicio">
					<?php 
						$mysql = new mysqli("localhost", "root", "", "calas");
						if ($mysql->connect_error)
						die("Problemas con la conexion a la base de datos");
						$registros = $mysql->query("select precio,nombre from productos") or 
						die($mysql->error);
						while ($reg = $registros->fetch_array()) {
							echo "<option value=\"" . $reg['precio'] . "\">" . $reg['nombre'] . "</option>";
						}
					$mysql->close();
					 ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<center><input type="submit" name="Enviar" class="boton"></center>
			</td>
		</tr>
	</table>
</form>
</body>
</html>