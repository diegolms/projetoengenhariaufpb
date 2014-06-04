<?php
    $arquivo = $_FILES['file'];
    print_r($xml);
    if (file_exists($arquivo['name'])){
        $xml = simplexml_load_file($arquivo['name']);
    } else {
        exit('Falha ao abrir o arquivo.');
    }
    foreach($xml->conceito as $conceito)
    {
        echo '<a href="#">', $conceito->titulo, '</a><br>';
        echo "O Conceito: " ,$conceito->titulo, " Esta no no intervalo " ,$conceito->tempo, " do video <br>";
    }
?>

