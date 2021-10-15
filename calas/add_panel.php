<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar artículo</title>
    <style>
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

<body >
    <h2 class="tittle">Agregar artículos</h2>
        <form action="add_panel_art.php" method="post">
            <div class="box">
            <p>Ingrese el nombre del artículo:</p>
            <input type="text" name="nombre" size="30" placeholder="Ingrese el nombre del artículo" class="input_text" required>
            </div>
            <div class="box">
            <p>Ingrese la cantidad de artículos disponibles:</p>
            <input type="text" name="disponible" size="34" placeholder="Insertar" class="input_text" required>
            </div>
            <div class="box">
            <p>Ingrese la descripcion del artículo:</p>
            <textarea name="descripcion" cols="50" rows="5" placeholder="Ingrese la descripcion" class="input_text"></textarea>
            </div>
            <div class="box">
            <p>Ingrese el precio:</p>
            <input type="text" name="precio" size="30" placeholder="Ingrese el precio" class="input_text"required>
            </div>
            <br>
            <center>
            <input type="submit" value="Confirmar" class="boton">
            <a href="list_panel.php"><input type="button" value="Cancelar" class="boton"></a>
            </center>
        </form>
</body>

</html>