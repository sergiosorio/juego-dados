<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-wiidth, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Lanzamiento de dados</title>
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
    </head>
    <body>
        <div id="container" class="principal">
            <h2>Juego de lanzamiento de dados</h2>
            <div id="formularios" class="formulariogeneral">
                
                <form action="" method="POST">
                    <label for="jugador1">Jugador 1</label>
                    <br>
                    <input type="text" name="jugador1" placeholder="Ingresa tu nombre"/>
                    <br>
                    <br>
                    <label for="jugador2">Jugador 2</label>
                    <br>
                    <input type="text" name="jugador2" placeholder="Ingresa tu nombre"/>
                    <br>
                    <br>
                    <input type="submit" name="lanzar" value="Lanzar"/>
                </form>
            </div>
            <div id="sidebar" class="lateral">
                <h3>Resultados</h3>         
                <?php
                    require_once('../autoload.php');

                    use controllers\Player;

                    $objplayer = new Player(); 
                    echo $objplayer->mensaje();
                    echo "<br/>";
                    echo $objplayer->getWinner();
                ?>
  
            </div>
        </div><!--end div id=container-->
    </body>
</html>
