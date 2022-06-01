<?php
include '../includes/templates/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body background="/src/img/carrtioMenu.PNG">

    <!-- <div class="forma"> -->
    <form method="POST" class="forma formulario" action="">
        <fieldset>
            <h1>Iniciar Sesion</h1>

            <!-- <label for="email">E-mail</label> -->
            <input type="email"  name="email" placeholder="Tu Email" id="email">

            <!-- <label for="password">Password</label> -->
            <input type="password" name="password"  placeholder="Tu password" id="password">

        </fieldset>

        <input type="submit" value="Iniciar Sesión " class="boton boton-verde">
    </form>
    <!-- </div> -->

    <?php
        include '../includes/templates/footer.php';
    ?> 
</body>
</html>