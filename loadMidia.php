<!DOCTYPE html>
<html lang="en">
<?php include("head.php");?>
<body>
<?php include("menuHeader.php");?>

    <div style='display:none'>
        <img src='img/basic/x.png' alt='' />
    </div>
    </div>

	<div class="col-md-9">
		<div class="text-justify">
            <?php
                include'connect_to_db.php';
                $id = $_GET["id"];
                $query = mysqli_query($con,"select categoria from categoria where id_categoria='".$id."'");
                $row = mysqli_fetch_array($query);

                $query = mysqli_query($con,
                    "select * from midia m inner join categoria c where c.id_categoria=m.id_categoria and c.id_categoria='".$id."'");
                if(mysqli_num_rows($query)){
                    echo '<h2>'.$row['categoria'].'</h2></br>';
                    while($vid = mysqli_fetch_array($query)){
                        $id = $vid['id_midia'];
                        $titulo = $vid['titulo'];
                        $video = $vid['video_name'];
                        $xmlFile = $vid['xml_name'];
                        $descricao = $vid['descricao'];
                        $type = substr($video, -3);
                        $xml = simplexml_load_file($xmlFile);

                        echo '
                        <div id="basic-modal-midia">
                        <a href="#" class="basic"> '.$titulo.'  '.$type.'
                        <h3 hidden="hidden"> :'.$id.' </h3>
                        <h3 hidden="hidden"> :'.$xml->descricao.' </h3>

                        </a>
                        </div>

                        ';
                    }
                }else{
                    echo '<script>alert("Não existe nenhuma mídia correspondente a este conteúdo."); location.replace(document.referrer);</script>';
                }

                ?>

            </div>
	</div>


</body>

</html>
