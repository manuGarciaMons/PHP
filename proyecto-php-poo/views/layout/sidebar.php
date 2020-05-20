<!-- Barra Lateral-->

<aside id="lateral">


    <div id="login" class="block_aside">
        <?php if (!isset($_SESSION['identify'])) : ?>

            <h3>Inicar sesión</h3>

            <form action="<?= base_url ?>usuario/login" method="post">
                <label for="email">Email</label>
                <input type="email" name="email" id="">

                <label for="password">Password</label>
                <input type="password" name="password" id="">
                <input type="submit" value="enviar">
            </form>
        <?php else :  ?>
            <h3><?= $_SESSION['identify']->nombre ?> <?= $_SESSION['identify']->apellidos ?></h3>
        <?php endif; ?>
        <ul>

            <?php if (isset($_SESSION['admin'])) : ?>
                <li><a href="#">Gestionar Categorias</a></li>
                <li><a href="#">Gestionar Productos</a></li>
                <li> <a href="#">Gestionar Pedidos</a></li>
            <?php endif; ?>
            <?php if (isset($_SESSION['identify'])) : ?>
                <li> <a href="#">Mis pedidos</a></li>
                <a href="<?= base_url ?>usuario/logout">Cerrar Sesión </a></li>
            <?php endif; ?>
        </ul>

    </div>

</aside>


<div id="central">