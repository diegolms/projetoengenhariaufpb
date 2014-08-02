<!DOCTYPE html>
<html lang="en">
<?php include("head.php");?>
<body>
<?php include("menuHeader.php");
header('X-Frame-Options: SAMEORIGIN');
?>



	<div class="col-md-9">
		<div class="text-justify">
            <?php
                include'connect_to_db.php';
                $id = $_GET["id"];
                $query = mysqli_query($con,"select m.titulo, m.video_name, m.xml_name from midia m where id_midia='".$id."'");
                while($vid = mysqli_fetch_array($query)){
                    $titulo = $vid['titulo'];
                    $video = $vid['video_name'];
                    $xmlFile = $vid['xml_name'];
                    $type = substr($video, -3);
                ?>
                <?php
                    echo '<h2>'.$titulo.'</h2></br>';
                    $xml = simplexml_load_file($xmlFile);
                    foreach($xml->conceito as $conceito)
                    {
                        list ($m, $s) = explode(':' , $conceito->tempo);
                        $totalSeconds = $m*60 + $s;
                        echo '<a href="#" onclick="goToChapter('.$totalSeconds.')">', $conceito->titulo, '</a><br>';
                    }
                ?>
                <?php
                    if(strcmp($type, "pdf") == 0){
                        echo '
                            <object width="600" height="500" type="application/pdf" data="'.$video.'" id="pdf_content">
                        ';
                    }
                    if(strcmp($type, "ppt") == 0){

                        echo '

                          <object width="600" height="500" type="application/vnd.ms-powerpoint" data="'.$video.'" id="pdf_content">
                        ';
                    }
                    else if(strcmp($type, "mp3") == 0){
                        echo '
                        <audio id="video1" controls autoplay="autoplay">
                          <source src='.$video.' type="audio/mpeg">
                          <source src=$type type="audio/ogg">
                          <embed id="video1" height="50" width="100" src='.$video.'>
                        </audio>
                        ';

                    }else{
                        echo '
                        <video id="video1" width="640" height="480" controls autoplay="autoplay">
                          <source src='.$video.' type="video/mp4">
                          <source src='.$video.' type="video/ogg">
                          <source src='.$video.' type="video/avi">
                          <object data='.$video.' width="640" height="480">
                            <embed src='.$video.' width="640" height="480">
                          </object>
                        </video>
                        ';
                    }
                ?>
                <?php
                }
                ?>



<script type="text/javascript">

            function goToChapter(value) {
                    var video = document.getElementById("video1");
                    video.currentTime = value;
                    video.play();
            }



</script>
            </div>
	</div>



</body>

</html>
