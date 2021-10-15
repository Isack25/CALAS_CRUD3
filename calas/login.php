
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" href="media/favicon.ico" type="image/x-icon">
</head>
<body>
    
    <center>
        <div class="container">
            <img src="calas-icon.png">
            <h2>LOGIN<b>CALAS</b></h2>
            <form action="validar.php" method="post">
                <input class="login_input" type="text" name="user" placeholder="Ingrese su usuario" required>
                <br> <br>
                <input class="login_input" type="password" name="password" placeholder="Digite su contraseña" required>
                <br><br>
                <input type="submit" value="Ingresar" class="login_submit"> 
                <br>
                <a class="login_regresar" href="index.html"> <b> Regresar</b></a>
                <br><br>
            </form>
        </div>
    </center>
</body>
</html>