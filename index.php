<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de Imagens</title>
    <style>
    .gallery {
        display: flex;
        flex-wrap: wrap;
    }

    .gallery img {
        width:19%;
        margin: 0.5%;
        transition: transform 0.2s;
    }

    .gallery img:hover {
        transform: scale(1.5);
    }
    </style>
</head>

<body>
    <h1>Galeria de Imagens</h1>
    <form action="upload.php" method="post" enctype="mulitpart/form-data">
        <input type="file" name = "image" accept="image/*">
        <button type="submit"> Enviar Imagem</button>
    </form>
    <div class="gallery">
    <?php
    $file = glob("uploads/*.*");
    foreach($files as $file){
        echo '<img src="' . $file . '" alt=Imagem">';   
    }
    ?>
    </div>

</body>

</html>