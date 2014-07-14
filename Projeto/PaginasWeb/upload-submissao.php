<?php

/* Insira aqui a pasta que deseja salvar o arquivo*/
$uploaddir = 'C:\webserver\Apache2.2\htdocs\arquivos\\';

$uploadfile = $uploaddir . $_FILES['arquivo']['name'];

if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile)){
	header('Location: upload.php?s='.urlencode('Arquivo enviado com sucesso.')); exit;
}
else {
	header('Location: upload.php?e='.urlencode('Arquivo não enviado.')); exit;
}

?>