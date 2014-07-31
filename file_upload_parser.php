<?php

    include'connect_to_db.php';

    $texto = isset($_FILES['file1']['name']) ? $_FILES['file1']['name'] : '';

    $targetURL = "uploadFiles/";
    $file = $targetURL . basename( $_FILES['file1']['name']) ;
    $file = str_replace(' ', '', $file);
    $xml = $targetURL . basename( $_FILES['arquivoXML']['name']) ;
    $xml = str_replace(' ', '', $xml);
    $titulo = $_POST['titulo'];
    $categoria = $_POST['categoria'];

    if(move_uploaded_file($_FILES['arquivoXML']['tmp_name'], $xml)){

        if(move_uploaded_file($_FILES['file1']['tmp_name'], $file)){
            mysqli_query($con, "INSERT INTO midia(titulo, video_name, xml_name, id_categoria)
                     VALUES ('$titulo', '$file','$xml', '$categoria')");
            echo "$titulo Carregado com sucesso";
        }
    }
    else {
        echo "falhou";
    }
    mysqli_close($con);

    //se não tem arquivo
    /*if (!$fileTmpLoc) {
        echo "ERROR: Please browse for a file before clicking the upload button.";
        exit();
    }
    if(move_uploaded_file($fileTmpLoc, "uploadFiles/$fileName")){
        echo "$fileName upload is complete";
    } else {
        echo "move_uploaded_file function failed";
    }*/
    ?>