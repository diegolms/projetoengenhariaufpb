<!DOCTYPE html>
<html lang="en">
<?php include("head.php");?>
<body>
<?php include("menuHeader.php");?>


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
                    else{
                        echo '
                            <video id="video1" width="640" height="480" controls="controls" autoplay="autoplay">
                            <source src="'.$video.'" type="video/mp4">
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
