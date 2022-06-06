<?php
    if(!isset($_SESSION)){
        session_start();
    }

    $auth = $_SESSION['login'] ?? null;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Fonde De Mike</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>

<body>
    
    <header class="header ">
        <div class="contenedor contenido-header">
            <div class="barra">
                <div class="mobile-menu">
                    <img src="/src/img/barras.svg" alt="icono menu responsive">
                </div>
                <div class="izquierda">
                <nav class="navegacion">





                <div class="two colums u-pull-right">

                    <ul>

                        <li class="submenu">
                            <img class="linduritas" id="img-carrito" src="/build//img/carrito.svg" alt="">
                            <div id="carrito">
                                <p class="vacio">carrito vacio</p>
                                <table id="lista-carrito" class="u-full-width">

                                    <thead>
                                        <tr>
                                            <th>Imagen</th>
                                            <th>nombre</th>
                                            <th>Precio</th>
                                            <th>cantidad</th>
                                        </tr>
                                    </thead>

                                    <thbody>
                                       
                                    </thbody>

                                </table>
                                <a href="#" id="vaciar-carrito"
                                class="button u-full-width">vaciar carrito</a>
                            </div>
                        </li>
                    </ul>

                </div>










                        
                        <a href="acercaDe.php">ACERCA DE</a>
                        <a href="contacto.php">CONTACTO</a>
                        <a href="funciona.php">COMO FUNCIONA</a>
                        <a href="index.php">INICIO</a>
                        
                        <!-- <img class="dark-mode-boton" src="/build/img/dark-mode.svg"> -->
                    </nav>
                
                </div>
                <div class="derecha">  
                    <nav class="navegacion">
                        <a href="login.php">INICIAR SESION</a>
                        <a href="adminsito2.php">ADMIN</a>
                        <?php if($auth): ?>
                            <a href="cerrar-sesion.php">CERRAR SESION</a>
                        <?php endif; ?>
                    </nav>
                </div>
            </div>
            <!--.barra-->
            <script src="/src/js/app.js"></script>
            <!-- <h1>La Fonda de Mike</h1> -->
        </div>
    </header>