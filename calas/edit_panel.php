<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: arial;
        }
        h2{
            color:#EBA271;
        }
         form{
             padding-left: 35%;
         }
         body{
            font-family: Arial;
        }
        .tittle{
            text-align: center;
            color: #EBA271;
        }
        .box{
            padding: 0%;
            text-align: left;
            padding-left: 30%;
        }
        p{
           font-size: 15px;
           margin: 10px;
           color: black;
        }

        .input_text{
            color: #796458;
	        padding: .5rem 1rem;
	        border: 0.5px solid #EBA271;
	        outline: none;
	        border-radius: 7px;
    	    padding: 10px;
            width:auto;
	        background-color: white;
	
        }   
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

<body bgcolor="white">
    <h2 align="center">Modificar Producto</h2>
    <?php
    $mysql = new mysqli("localhost", "root", "", "calas");
    if ($mysql->connect_error)
        die("Problemas con la conexion");

    $registro = $mysql->query("select codigo,
                                        nombre,
                                        disponible,
                                        descripcion, 
                                        precio
                                    from productos where codigo='$_REQUEST[codigo]'") or

        die($mysql->error);

    if ($reg = $registro->fetch_array()) {
    ?>
        <form action="edit_alta_panel.php" method="post">
            <p align="left" >Nombre del Artículo:</p>
            <input type="text" name="nombre" size="30" value="<?php echo $reg['nombre']; ?>" placeholder="Nombre del artículo" class="input_text">
            <br>
            <p align="left">Disponibles:</p>
            <input type="text" name="disponible" size="50" value="<?php echo $reg['disponible']; ?>" required class="input_text">
            <br>
            <p align="left">Descripción del Artículo:</p>
            <textarea name="descripcion" cols="50" rows="5" class="input_text"><?php echo $reg['descripcion'];?></textarea>
            <br>
            <p align="left">Precio del Artículo:</p>
            <input type="text" name="precio" size="30" value="<?php echo $reg['precio']; ?>" required class="input_text">
            <br>
            <input type="hidden" name="codigo" value="<?php echo $_REQUEST['codigo']; ?>">
            <br>
            <input type="submit" value="Confirmar" class="boton">
            <a href="list_panel.php"><input type="button" value="Cancelar" class="boton"></a>
            <br><br>
        </form>
    <?php
    } else
        echo '<center>No existe un artículo con dicho código</center>';

    $mysql->close();
    ?>
</body>

</html>