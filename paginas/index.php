<?php
// require __DIR__ . '/../includes/app.php';

// include '../includes/templates/footer.php';
include '../includes/templates/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Fonda</title>
    <!-- <link rel="stylesheet" href="../css/styles.css"> -->
    <!-- <link rel="stylesheet" href="../scss/estilos.scss -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

</head>
<body background="/src/img/index.PNG">
    <div class="contenidoFondo"></div>
    <div>
        <h5>La Fonda de Mike</h5>
        <h6>Sai che ti stanno tradendo quando ti mentono</h6>
                <div class="index" >
                <!-- <img src="../../src/img/index.PNG" alt=""> -->

                    <h4>Comidas</h4>
                    <div class="index2">
                        <div class="iconoUwU">
                            <img class="img" src="../src/img/indexss.PNG" alt="">
                            <a type="submit" href="pedir.php" class="baj boton boton-verde" >Agregar al Carrito</a>
                            <input type="submit" class="sup boton boton-verde texto-encima" value="$24">
                            <!-- <input  type="submit" value="Pedir " class="boton boton-verde"> -->
                            <!-- <div class="texto-encima"><input  type="submit" value="Pedir " class="boton boton-verde"> </div> -->
                        </div>
                        <div class="iconoUwU">
                            <img class="img" src="../src/img/indexsss.PNG" alt="">
                            <!-- <input  type="submit" value="Pedir " class="boton boton-verde"> -->
                            <a type="submit" href="#" class="baj boton boton-verde" >Agregar al Carrito</a>
                            <input type="submit" class="sup boton boton-verde texto-encima" value="$24">
                            <!-- <div class="texto-encima"><input  type="submit" value="Pedir " class="boton boton-verde"> </div> -->
                        </div>
                        <div class="iconoUwU">
                            <img class="img" src="../src/img/indexssss.PNG" alt="">
                            <a type="submit" href="#" class="baj boton boton-verde" >Agregar al Carrito</a>
                            <input type="submit" class="sup boton boton-verde texto-encima" value="$24">
                            <!-- <div class="texto-encima"><input  type="submit" value="Pedir " class="boton boton-verde"> </div> -->
                        </div>
                    </div>
                    <div class="botonmike">
                        <a href="menu.php">VER MAS</a>
                    </div>
                <h4>Reseñas</h4>
                <div class="index3">
                <div>
                    <h1>Que dicen nuestros clientes</h1>
                    <img src="../src/img/iconoIndex2.png" alt="">
                </div>
                <div>
                    <p>Cocinas conforts nos trajo el verdadero confort a nuestra mesa. Estos kits de comida CTM son incribles</p>
                    <p>@MIKECRACK</p>
                    <p>No sabía que podía cocinar platos como estos.
Es muy fácil, y mi familia lo agradece.</p>
                    <p>@JUANCUCKNIZO</p>
                    <p>Admiro a las empresas que evolucionan con los tiempos,
¡y Cocinas Conforts lo hizo de forma deliciosa!</p>
                    <p>@VEGETTA777</p>
                </div>
                </div>
                
            </div>      
    </div>

   
    
    <?php
        include '../includes/templates/footer.php';
    ?>    
</body>

<script src="/src/js/app.js"></script>

</html>