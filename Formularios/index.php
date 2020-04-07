<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario php</title>
</head>

<body>
    <h1>Formulario</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <p><input type="text" name="nombre" id="" placeholder="Nombre"></p>

        <label for="apellido">Apellido:</label>
        <p> <input type="text" name="apellido" id="" placeholder="Apellido"></p>

        <label for="boton">Boton:</label>
        <p> <input type="button" name="boton" id="" value="clickMe"></p>

        <label for="sexo">Sexo:</label>
        <p>
            Hombre: <input type="checkbox" name="sexo" id="" value="hombre">
            Mujer: <input type="checkbox" name="sexo" id="" value="mujer">
        </p>

        <label for="color">Color:</label>
        <p> <input type="color" name="color" id=""></p>

        <label for="fecha">Fecha:</label>
        <p> <input type="date" name="fecha" id=""></p>

        <label for="correo">Email:</label>
        <p> <input type="email" name="correo" id=""></p>

        <label for="archivo">Archivo:</label>
        <p> <input type="file" name="archivo" id="" multiple="multiple"></p>

        <label for="numero">Numero:</label>
        <p> <input type="number" name="numero" id=""></p>

        <label for="password">Contraseña:</label>
        <p> <input type="password" name="password" id=""></p>

        <label for="continente">Continente:</label>
        <p>
            America del sur <input type="radio" name="continente" id="" value="America del sur">
            Europa <input type="radio" name="continente" id="" value="Europa">
            Asia <input type="radio" name="continente" id="" value="Asia">
        </p>
        <label for="web">Pagina web:</label>
        <p> <input type="url" name="web" id=""></p>

        <textarea name="textarea" id="" cols="30" rows="10"></textarea>

        Peliculas:
        <select name="peliculas" id="">
            <option value="Spiderman">Spiderman</option>
            <option value="Los increibles">Los increibles</option>
            <option value="Batman el caballero de la noche">Batman el caballero de la noche</option>
            <option value="Piratas del caribe">Piratas del caribe </option>
        </select>


        <input type="submit" value="Enviar">
    </form>
</body>

</html>