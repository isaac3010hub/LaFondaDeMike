<?php
include '../includes/templates/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Carrito</title>
</head>
<body background="/src/img/carrtioMenu.PNG">
    <!-- <div class="fondo"> -->
        <div class="lista-cursos" id="lista-cursos" class="container">
        <h3  id="encabezado" class="">ELIGE UNA SECCION</h3>
        <!-- <img class="fondo" src="../src/img/index.PNG" alt=""> -->

        <div class="iconos2-nosotros">
            <div class="icono">
                <img class="img" src="../src/img/indexss.PNG" alt="">
                <a href="adminComidas.php" class="u-full-width button-primary boton-verde-block input agregar-carrito" data-id="1" >Comidas</a>
            </div>
            <div class="icono">
                <img class="img" src="../src/img/gru.png" alt="">
                <a href="adminDistri.php" class="boton-verde-block" data-id="2">Distribuidores</a>
            </div>
         
        </div>
    <!-- </div> -->
    <?php
        include '../includes/templates/footer.php';
    ?> 
</body>

<script src="/src/js/app.js"></script>

</html>