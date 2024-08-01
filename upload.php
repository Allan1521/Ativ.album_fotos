<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    if($_FILES['image']['error'] == UPOLOAD_ERR_OK){
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"] ["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        //Verificar se o arquivo é uma imagem real
        $check = getimagesize($_FILES["image"]["name"]);
        if ($check !== false){
            if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "O arquivo" . basename($_FILES["image"]["name"]) . "foi envaido com sucesso.";
            } else {
                echo "desculpe, houve um erro ao enviar o seu arquivo.";
            }
        } else {
            echo "O arquivo não é uma imagem."
        }
            
        } else {
            //Mostrar mensagem de erro específica
        }
    }
}
?>