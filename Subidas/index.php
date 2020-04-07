<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivos PHP</title>
</head>

<body>
    <h1>Subir archivos con PHP</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo" id="">
        <input type="submit" value="Enviar">
    </form>

    <h1>Listado de imagenes </h1>
    <?php
    $gestor = opendir('./images');

    if ($gestor) :
        while ($image = readdir($gestor) !== false) :
            if ($image != '.' && $image != '..') :
                echo "<img src='images/$image' width='200px'/><br/>";
            endif;
        endwhile;
    endif;
    ?>

</body>

</html>