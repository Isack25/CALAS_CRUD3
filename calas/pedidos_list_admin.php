<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Calas | Articles</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        * {
            font-family: Arial;
        }

        .title{
            color: #EBA271;
        }

        body{
            background: white;
            font-family: Arial;
        }

        table{
            border-collapse: collapse;
            width: 100%;
            text-align: left;
        }

        th, td{
            padding: 2%;
        }
        
        th{
            background-color:#EBA271;
            color: white;
            border-bottom: 5px solid white;
        }

        th:nth-child(4){
            width: 300px;
        }

        tr:nth-child(even){
            background-color: #F9E5D7;
        }

        tr:hover{
            background-color: #F2C4A4;
            color: white;
        }

        a{
            text-decoration: none;
            color: black;
        }

        a:hover{
            color: white;
        }
       /*  }
        th{
            text-align:center;
        }
        td{
            width: 190px;
        }
        td:nth-child(1){
            width: 130px;
            text-align: center;
        }
        td:nth-child(2){
            width: 300px;
            text-align: left;
        }
        td:nth-child(3){
            width: 106px;
            text-align: center;
        }
        td:nth-child(4){
            width: 300px;
            text-align: left;
        }
        td:nth-child(5){
            text-align: center;
        }
        a{
            text-decoration: none;
            color: #EBA271;
        }
        a:hover{
            color: #D47934;
        } */
        .boton {
	    color: #EBA271;
	    text-transform: uppercase;
	    margin-top: 1rem;
	    padding: .75rem;
	    border-radius: 2rem;
	    width: auto;
	    background-color: white;
	    border: none;
	    cursor: pointer;
        }

     .boton:hover {
	    background-color: #EBA271;
        color: white;
        }


    </style>
</head>
<body>
    <h1 class="title" align="center">Pedidos</h1>
    <br>
    <?php
    $mysql = new mysqli("localhost", "root", "", "calas");
    if ($mysql->connect_error)
        die("Problemas con la conexión a la base de datos");

    $registros = $mysql->query("select id as idproduct,
                                        name as nameart,
                                        service,
                                        disponible as disponibleart ,
                                        phone,
                                        location
                                    from clientes") or
        die($mysql->error);

    echo '<table align="center">';
    echo '<tr><th>Cliente</th><th>Pedido</th><th>Cantidad</th><th>Dirección</th><th>Finalizar</th></tr>';
    while ($reg = $registros->fetch_array()) {
        echo '<tr>';
        echo '<td>';
        echo $reg['nameart'];
        echo '</td>';
        echo '<td>';
        echo $reg['service'];
        echo '</td>';
        echo '<td>';
        echo $reg['disponibleart'];
        echo '</td>';
        echo '<td>';
        echo $reg['location'];
        echo '</td>';
        echo '<td>';
        echo '<a href="delete_pedidos.php?codigo=' . $reg['idproduct'] . '">Enviar pedido</a>';
        echo '</td>';
        echo '</tr>';
    }

    $mysql->close();
    ?>
    </table>
    <br><br>
    <center>
        <a href="pedidos_add.php">
            <input type="button" value="Añadir Pedido" class="boton"></a>
    </center>
</body>
</html>