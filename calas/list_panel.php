
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Calas | Articles</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body{
            background: white;
            font-family: Arial;
        }

        .tittle{
            text-align:center;
            color:  #D47934;
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

      /*   h1, h2, table{
            font-family: Arial;
        }
        td:first-child{
            text-align: center;
        }
        td:nth-child(2){
            text-align: center;
        }
        td:nth-child(3){
            text-align: center;
        }
        td:nth-child(5){
            text-align: center;
        }
        th:first-child{
            width: 10px;
        }
        th:nth-child(2){
            width: 10px;
            text-align: center;
        }
        th:nth-child(3){
            width: 200px;
        }
        th:nth-child(4){
            width: 300px;
        }
        td:nth-child(6){
            text-align: center;
        }
        td:nth-child(7){
            text-align: center;
        }
        th{
            text-align: center;
            width: 89px;
        }
        div{
            text-align: center;
            color: #fff;
        }

        th{
            background-color: 
        } */


    </style>
</head>
<body>
    <h2 class="tittle">Panel de Mantenimiento</h2>
    <br>
    <center>
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button> 
    </center>
    <br>

    <?php
    $mysql = new mysqli("localhost", "root", "", "calas");
    if ($mysql->connect_error)
        die("Problemas con la conexión a la base de datos");

    $registros = $mysql->query("select codigo as codigoart,
                                        descripcion as descripcionart,
                                        disponible as dis,
                                        precio,
                                        nombre as nombreart 
                                    from productos") or
        die($mysql->error);

    echo '<table align="center">';
    echo '<tr><th>Cód</th><th>Disponible</th><th>Nombre</th><th>Descripción</th><th>Precio</th>
            <th>Eliminar</th><th>Modificar</th></tr>';
    while ($reg = $registros->fetch_array()) {
        echo '<tr>';
        echo '<td>';
        echo $reg['codigoart'];
        echo '</td>';
        echo '<td>'; 
        echo $reg['dis'];
        echo '</td>';
        echo '<td>';
        echo $reg['nombreart'];
        echo '<td>';
        echo $reg['descripcionart'];
        echo '</td>';
        echo '<td>';
        echo $reg['precio'];
        echo '</td>';
        echo '<td>';
        echo '<a href="delete_panel.php?codigo=' . $reg['codigoart'] . '">Borrar</a>';
        echo '</td>';
        echo '<td>';
        echo '<a href="edit_panel.php?codigo=' . $reg['codigoart'] . '">Modificar</a>';
        echo '</td>';
        echo '</tr>';
    }    
    echo '<table> <br>'; 

    $mysql->close();
    ?>
</body>

</html>