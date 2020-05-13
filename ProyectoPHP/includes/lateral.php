<?php require_once 'includes/helpers.php'; ?>

<aside id="sidebar">


    <?php if (isset($_SESSION['usuario'])) : ?>
        <div id="usuario-logueado" class="bloque">
            <h3>Bienvenido, <?= $_SESSION['usuario']['nombre'] . ' ' . $_SESSION['usuario']['apellidos']; ?></h3>
            <a href="cerrarSesion.php"  class="boton boton-verde">Crear Entradas</a>
            <a href="cerrarSesion.php"  class="boton">Crear Categoría</a>
            <a href="cerrarSesion.php"  class="boton boton-naranja">Mis Datos</a>
            <a href="cerrarSesion.php"  class="boton boton-rojo">Cerrar Sesión</a>
        </div>
    <?php endif; ?>
    <div id="login" class="bloque">
        <h3>Identificate</h3>
        <?php if (isset($_SESSION['error_login'])) : ?>
            <?= $_SESSION['error_login']; ?>
    </div>
<?php endif; ?>

<form action="login.php" method="post">

    <label for="email">Email</label>
    <input type="email" name="email" id="">

    <label for="password">Password</label>
    <input type="password" name="password" id="">

    <input type="submit" value="Entrar">
</form>
</div>




<div id="register" class="bloque">

    <h3>Registrate</h3>
    <!-- Mostrar errores -->
    <?php if (isset($_SESSION['completado'])) : ?>
        <div class="alerta alerta-exito">
            <?= $_SESSION['completado'] ?>
        </div>
    <?php elseif (isset($_SESSION['errores']['general'])) : ?>
        <div class="alerta alerta-error">
            <?= $_SESSION['errores']['general'] ?>
        </div>
    <?php endif; ?>
    <form action="registro.php" method="post">

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="" />
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre')  : ''; ?>


        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="" />
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos')  : ''; ?>


        <label for="email">Email</label>
        <input type="email" name="email" id="" />
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email')  : ''; ?>


        <label for="password">Password</label>
        <input type="password" name="password" id="" />
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password')  : ''; ?>


        <input type="submit" name="submit" value="Entrar" />
    </form>
    <?php borrarErrores(); ?>
</div>

</aside>