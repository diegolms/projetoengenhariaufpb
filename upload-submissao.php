<?php
    
        include'connect_to_db.php';
    
        $targetURL = "uploadFiles/"; //folder where to save the uploaded file/video
        $target = $targetURL . basename( $_FILES['arquivo']['name']) ; //gets the name of the upload file
        $targetXml = $targetURL . basename( $_FILES['arquivoXML']['name']) ;
        $targetTitulo = $_POST['titulo'];
        $categoria = $_POST['categoria'];
        if(move_uploaded_file($_FILES['arquivoXML']['tmp_name'], $targetXml)){
            
            if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $target)){
                mysqli_query($con, "INSERT INTO midia(titulo, video_name, xml_name, id_categoria)
                 VALUES ('$targetTitulo', '$target','$targetXml', '$categoria')");
                echo "Arquivo carregado com sucesso";
            }
        }
        else {
            echo "falhou";
        }
        mysqli_close($con);

?>