<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de VideoJuegos</title>
</head>

<body>
    <!-- CABECERA -->
    <header id="cabecera">
        <!--logo -->
        <div id="logo">
            <a href="index.php">
                Blog de Video Juegos
            </a>
        </div>


        <!-- MENU -->
        <nav id="menu">

            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>

                <li>
                    <a href="index.php">Categoria 1</a>
                </li>

                <li>
                    <a href="index.php">Categoria 2</a>
                </li>

                <li>
                    <a href="index.php">Categoria 3</a>
                </li>

                <li>
                    <a href="index.php">Categoria 4</a>
                </li>

                <li>
                    <a href="index.php">Sobre mi</a>
                </li>

                <li>
                    <a href="index.php">Contacto</a>
                </li>
            </ul>

        </nav>
    </header>

    <div id="contenedor">
        <!-- BARRA LATERAL -->
        <aside id="sidebar">

            <div id="login" class="bloque">
                <h3>Identificate</h3>
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
                <form action="registro.php" method="post">

                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="" />

                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" id="" />

                    <label for="email">Email</label>
                    <input type="email" name="email" id="" />

                    <label for="password">Password</label>
                    <input type="password" name="password" id="" />

                    <input type="submit" value="Entrar" />
                </form>
            </div>

        </aside>
        <!-- CAJA PRINCIPAL -->

        <div id="principal">
            <h1>Ultimas Entradas</h1>
            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                </p>
            </article>

            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                </p>
            </article>

            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                </p>
            </article>

            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                </p>
            </article>

        </div>
    </div>


    <!-- PIE DE PAGINA -->

    <footer id="pie">
    <p>Desarrollado por Manuela García &copy; 2020</p>
    </footer>
</body>

</html>