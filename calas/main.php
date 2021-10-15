<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio | Main</title>
    <link rel="shortcut icon" href="media/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/main.css">
</head>
<style>
    body{
    font-family: Arial;
    background-image: url(../calas/assets/images/bg-min.jpg);
    
}
h3{
    color: white;
}

.cerrar{
        border-radius: 2rem;
        border: none;
        padding: .75rem;
        color: #EBA271;
        background-color: white;
    }
h1{
    color:white;
}

ul{
    list-style: none;
    display: block;
    list-style-type: disc;
    margin-block-end: 1em;
    padding-inline-start: 40px;
}

.products .filters li {
    text-transform: uppercase;
    font-size: 13px;
    font-weight: 700;
    color: #121212;
    display: inline-block;
    margin: 0px 10px;
    transition: all .3s;
    cursor: pointer;
}

.ctext{
    color: white;
    text-decoration: none;
}

.ctext:hover{
    color: #EBA271;
}
</style>
<body>
    <center>
        <?php
        session_start();
        error_reporting(0);
        $vsesion = $_SESSION['username'];
        if ($vsesion == null or $vsesion = '') {
            echo '<font><h1>¤ No tienes acceso a esta Página Web</h1></font>';
            die();
        }
        ?>
        <div>
        <h3 class="text">Bienvenido/a: Administrador</h3>
        <br>
        <div class="products">
      <div>
        <div>
          <div >
            <div class="filters">
              <ul>
                <li><a href="list_panel.php" target="myiframe" class="ctext" >Mantenimiento</a></li>
                <li><a href="add_panel.php" target="myiframe" class="ctext">Agregar Productos</a></li>
                <li><a href="pedidos_list_admin.php" target="myiframe" class="ctext">Panel de Pedidos</a></li>
              </ul>
            </div>
          </div>
        <center><iframe name="myiframe" src="list_panel.php" width="82%" height="480px" style="
        background-color: white; border:none"></iframe></center>
        </section>
        <br>
        <a href="cerrar_sesion.php"><input type="button" value="Cerrar sesión" class="cerrar"></a>
    </center>
    
</body>
</html>