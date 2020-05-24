<h1>Algunos de nuestros Productos </h1>


<?php while($product = $productos->fetch_object()): ?>
    <div class="product">

        <img src="<?=base_url?>uploads/images/<?=$product->imagen?>" alt="">
        <h2><?=$product->nombre?></h2>
        <p><?=$product->precio?></p>
        <a href="" class="button">Comprar</a>
    </div>
<?php endwhile;?>






<!-- Contenido Central -->