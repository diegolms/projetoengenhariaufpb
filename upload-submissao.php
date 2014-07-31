<?php
    
        include'connect_to_db.php';

        $targetURL = "uploadFiles/";
        $target = $targetURL . basename( $_FILES['arquivo']['name']) ;
        $target = str_replace(' ', '', $target);
        $targetXml = $targetURL . basename( $_FILES['arquivoXML']['name']) ;
        $targetXml = str_replace(' ', '', $targetXml);
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