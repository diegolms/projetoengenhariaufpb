<html>
<head>
</head>
<body>
<?php
    $arquivo = $_FILES['file'];
    $filename = ($arquivo['name']);
    if (file_exists($arquivo['name'])){
        $xml = simplexml_load_file($arquivo['name']);
    } else {
        exit('Falha ao abrir o arquivo.');
    }
    foreach($xml->conceito as $conceito)
    {
        $tempo = intval($conceito->tempo);
        echo '<a href="#" onclick="goToChapter('.$tempo.')">', $conceito->titulo, '</a><br>';
    }
?>

<video id="video1" controls="controls" autoplay="autoplay">
<source src="musica" type="video/mp4">
</video>

<script type="text/javascript">

function goToChapter(value) {
    var video = document.getElementById("video1");
    video.currentTime = value;
    video.play();
}
</script>

</body>
</html>
