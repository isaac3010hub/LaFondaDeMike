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
<body background="../src/img/contacito.jpg">
 

<div class="contenedorITZA">
<H1 class="mikeDickchiquita">Crear</H1>
<form class="formulari"> 
     <input type ="text-input" placeholder="NOMBRE:" required>
   <div class="mikecontacto">
    <input class="text-input" type="text" placeholder="Distribuidora:" required>
     <input class="text-input" type="number" placeholder="Precio:" required>  
     <input class="text-input" type="text" placeholder="Comida:" required>   
   </div>
      <textarea class="text-input" required placeholder="MENSAJE:"></textarea>
    <div class="boton">
      <a href="">ENVIAR</a>
    </div>
</form>
</div>


    <?php
        include '../includes/templates/footer.php';
    ?> 
    
<!-- <div class="MikeContacto">
   <div class="campo">
     <input type ="text" placeholder="Tu Nombre" required>
   </div>
   <div class="campo">
     <input class="text-input" type="email" placeholder="Tu Email" required>
   </div>
</div>

 <div class="campo"> 
   <textarea class="text-input" required></textarea>
 </div>
<div class="alinear-derecha flex">
 <input class="boton w-sm-100"  type ="submit" value="Enviar"> 
</div> -->
</body>
</html>