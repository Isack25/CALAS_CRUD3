<!-- Jennifer Saravia -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            padding-top: 15px;
        }
        body h2{
            color: #EBA271;
        }
        td:first-child{
            text-align: center;
        }
        th {
            text-align: center;
            color: white;
        }
        .tablalistado{
            border-collapse: collapse;
            box-shadow: 0px 0px 8px  #EBA271;
            margin: 20px;
            margin: auto;
        }
        .tablalistado th {
            border: 1px solid #fff;
            padding: 5px;
            background-color: #EBA271;
        }
        .tablalistado td{
            border: 1px solid #fff;
            padding: 5px;
            background-color: #FFCEA8;
            color: white
        }
    </style>
</head>
<body>
    <h2 align="center">Lista de Productos</h2>
    <br>
    <?php
    $mysql = new mysqli("localhost", "root", "", "calas");
    if ($mysql->connect_error)
        die("Problemas con la conexión a la base de datos");
    
    $registros = $mysql->query("select nombre, descripcion, disponible from productos") or
        die($mysql->error);
    
    echo "<table class='tablalistado' align='center'>";
    echo "<tr><th>Disponible</th><th>Producto</th><th>Descripción</th></tr>";
    while ($reg = $registros->fetch_array()) {
        echo "<tr>";
        echo "<td>";
        echo $reg['disponible'];
        echo "</td>";
        echo "<td>";
        echo $reg['nombre'];
        echo "</td>";
        echo "<td>";
        echo $reg['descripcion'];
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
    $mysql->close();
    ?>
</body>
</html>
