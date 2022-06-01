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
<body background="/src/img/carrtioMenu.PNG">
    
    <div class="index">
        <h1>PEDIR</h1>
        <form class="formulari"> 
            <input type ="text-input" placeholder="NOMBRE:" required>
            <div class="mikecontacto">
            <input class="text-input" type="tel" placeholder="TELEFONO:" required>
            <input class="text-input" type="text" placeholder="COMIDA:" required>      
            </div>
            <input type ="text-input" placeholder="DISTRIBUIDORA:" required>
            <input type ="text-input" placeholder="DIRECCION:" required>
            <textarea class="text-input" required placeholder="MENSAJE:"></textarea>
            <div class="boton">
            <a href="">ENVIAR</a>
            </div>
        </form>
    </div>
    
    <?php
        include '../includes/templates/footer.php';
    ?>    
</body>
</html>