<?php
include '../includes/templates/header.php';

//require 'includes/config/database.php';
//$db = conectarDB();

$errores = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // echo "<pre>";
    // var_dump($_POST);
    // echo "<pre>";

    $email = mysqli_real_escape_string($db, filter_var ( $_POST['email'], FILTER_VALIDATE_EMAIL) );
    $password = mysqli_real_escape_string($db,  $_POST['password']);

    if(!$email) {
        $errores[] = "El email es obligatorio o no es válido";  
    }

    if(!$password) {
        $errores[] = "El Password es obligatorio";
    }

    if(empty($errores)) {

        // Revisar si el usuario existe.
        $query = "SELECT * FROM usuarios WHERE email = '${email}'";
        $resultado = mysqli_query($db, $query);


     

        if($resultado->num_rows) {
            // Revisar si el password es correcto
            $usuario = mysqli_fetch_assoc($resultado);

            // var_dump($usuario['password']);

            // Verificar si el password es correcto o no

            $auth = password_verify($password, $usuario['password'] );

            if($auth) {
                // El usuario esta autenticado
                session_start();

                // Llenar el arreglo de la sesión 
                $_SESSION['usuario'] = $usuario['email'];
                $_SESSION['login'] = true;

                header('Location: /admin');

            } else {
                $errores[] = 'El password es incorrecto';
            }
        } else {
            $errores[] = "El Usuario no existe";
        }
    }

}





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



<?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>




    <form data-cy="formulario-login" method="POST" class="forma formulariocp" action="login">
        

        
            <h1>Iniciar Sesion</h1>

            <input type ="email" name="email" placeholder="Tu Correo:" id="email" required>

            <input type="password" name="password"  placeholder="Tu password" id="password">

            <input type="submit" value="Iniciar Sesión " class="boton boton-verde">
        </form>
    









    <div class="mikendex4">
        <img src="../src/img/sesion.png" alt="">
        <p>Lorem ipsum dolor sit agmet consectetur adipisicing elit. Placeat deserunt quasi sint dolorem odit nam voluptate.Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat deserunt quasi sint dolorem odit nam voluptate. Accusamus numquam por Accusamus numquam porro perferendis earum doloribus error natus recusandae fugiat vero. Nulla, eaque optio?</p>
    </div>
    <?php
        include '../includes/templates/footer.php';
    ?> 
</body>
</html>