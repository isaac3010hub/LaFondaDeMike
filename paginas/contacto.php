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
    <H1 class="mikeDick">Contacta con nosotros</H1>
<div class="contenedor">
<form class="formulari"> 
     <input type ="text-input" placeholder="NOMBRE:" required>
   <div class="mikecontacto">
    <input class="text-input" type="tel" placeholder="TELEFONO:" required>
     <input class="text-input" type="email" placeholder="CORREO:" required>      
   </div>
      <textarea class="text-input" required placeholder="MENSAJE:"></textarea>
    <div class="boton">
      <a href="">ENVIAR</a>
    </div>
</form>
</div>

<div class="mikeuwu">
  <p>Sociales</p>
  <a href="">Instagram</a>
  <a href="">Twitter</a>
  <a href="">Facebook</a>
  <p>MIKEGAMER@PAPURE.COM</p>
  <p>UBICACIONES</p>
</div>
<div class="mikeuwu2 flex">
  <p>BENITO JUAREZ, 56CTM</p>
  <p>CALLE CTM, 53 C.P 7777 ITAPALAPAxd, MEXICO</p>
  <p>Avenida CTM, 21 C.P 35000 colosio,</p>
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