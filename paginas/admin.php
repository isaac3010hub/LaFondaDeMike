<?php

    //incluye un template
    
    include '../includes/templates/header.php';
?>

<main class="contenedor seccion">
    <h1>Administrador La Fonda de Mike</h1>
    <?php if( intval( $resultado ) === 1): ?>
        <p class="alerta exito">Platillo Creado Correctamente</p>
    <?php elseif(intval($resultado) === 2): ?>
        <p class="alerta exito">Platillo actualizado Correctamente</p>
    <?php elseif(intval($resultado) === 3): ?>
        <p class="alerta exito">Platillo eliminado Correctamente</p>
    <?php endif; ?>
    <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>

    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>platillo</th>
                <th>Imagen</th>
                <th>Precio</th>
            </tr>
        </thead>

        <tbody>
            <?php while( $propiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>
            <tr>
                <td><?php echo $propiedad['id'] ?></td>
                <td><?php echo $propiedad['titulo'] ?></td>
                <td><img src="/imagenes/<?php echo $propiedad['imagen'] ?>" class="imagen-tabla" alt=""></td>
                <td>$<?php echo $propiedad['precio'] ?></td>
                <td>
                    <form action="" method="POST" class="w-100">
                        <input type="hidden" name="id" value="<?php echo $propiedad['id']; ?>">
                        <input type="submit" class="boton-rojo-block" value="Eliminar">
                    </form>
                    
                    <a href="../admin/propiedades/actualizar.php?id=<?php echo $propiedad['id'] ?>" class="boton-amarillo-block">Actualizar</a>
                </td>
            </tr>
            <?php endwhile ?>
        </tbody>
    </table>
</main>

<?php

        //cerrar la conexion 
        mysqli_close($db);
        include '../includes/templates/footer.php';
?>