<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Hand:wght@400..700&family=Vollkorn:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
    <title>Galeria de Imagens</title>

</head>

<body>
    <h1>Galeria de Imagens</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/*">
        <button type="submit"> Enviar Imagem </button>
    </form>
    <div class="gallery">
        <?php
    $files = glob("uploads/*.*");
    foreach($files as $file){
        echo '<img src="' . $file . '" alt="Imagem">';   
    }
    ?>
    </div>

</body>

</html>