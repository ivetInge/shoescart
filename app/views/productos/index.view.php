<?php require(APPROOT . '/views/partials/head.php'); ?>


<div class="container tenis animated bounceInUp">
    <?php foreach ($data['productos'] as $producto) : ?>
        <div class="producto">
            <div>
                <img class="imagen" src="<?php echo URLROOT; ?>/public/images/jordan2.jpg" alt="">
            </div>
            <div class="textos">
                <p><?php echo $producto->nombre; ?></p>
                <p>$<?php echo $producto->precio; ?></p>
                <p>Talla: <?php echo $producto->talla; ?></p>
            </div>
            <div class="botones">
                <a href="carritos/add/<?php echo $producto->id_tenis; ?>" class="boton access">Agregar al carrito</a>
                <a class="wish" href="favoritos/add/<?php echo $producto->id_tenis; ?>"><img class="" src="<?php echo URLROOT; ?>/public/images/heart.svg" alt="Whislits"></a>
            </div>
        </div>
    <?php endforeach; ?>
</div>




<?php require(APPROOT . '/views/partials/footer.php'); ?>