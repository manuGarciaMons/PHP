<h1>Gestion de Productos</h1>
<a  href="<?=base_url?>producto/crear" class="button button-smail">Crear Producto</a>


<?php if (isset($_SESSION['producto'] ) && $_SESSION['producto']=='complete'): ?>
<strong class="alert_green" El producto se ha creado correctamente ></strong>
<?php elseif (isset($_SESSION['producto'] ) && $_SESSION['producto']!='complete'): ?><strong class="alert_red" El producto no se ha creado correctamente ></strong>
<?php endif;?>
<?php Utils::deletesession('producto');?>
<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
    </tr>
    <?php while ($pro = $productos->fetch_object()): ?>
        <tr>
            <td><?=$pro->id;?></td>
            <td><?=$pro->nombre;?></td>
            <td><?=$pro->precio;?></td>
            <td><?=$pro->stock;?></td>
        </tr>
    <?php endwhile; ?>
</table>