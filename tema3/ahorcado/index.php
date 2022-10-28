index.php

<!DOCTYPE html>

<html>

    <head>        

        <title>Juego Ahorcado</title>

    </head>

    <body bgcolor="lightblue">

        <form action="ahorcado.php" method="post" name="formulario" id="formulario">

            <br><br>
            <h3 align="center"> JUEGO AHORCADO</h3>
            <br>
            <p align="center">palabra: <input type="password" name="palabra" id="palabra" autofocus></p>
            <p align="center"><input type="submit" name="enviar" id="enviar" value="Comenzar"></p>

        </form>

    </body>

</html>

<?php

    session_start();

    $_SESSION['primeravez'] = true;

?>