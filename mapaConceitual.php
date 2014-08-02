<!DOCTYPE html>
<html lang="en">
<?php include("head.php");?>
<body>
<?php include("menuHeader.php");?>

<div class="col-md-9">
    <div class="text-justify">
        <h2>Mapa Conceitual</h2></br>
        <?php
        include'connect_to_db.php';
        $query = mysqli_query($con, " select * from categoria");
        while($vid = mysqli_fetch_array($query)){
            $id = $vid['id_categoria'];
            $categoria = $vid['categoria'];
            $descricao = $vid['descricao'];

            echo '
            <div id="basic-modal">
                <a href="#" class="basic"> '.$categoria.'
                    <h3 hidden="hidden"> :'.$id.' </h3>
                    <h3 hidden="hidden"> :'.$descricao.' </h3>

                </a>
            </div>

          ';
        }

        ?>
    </div>
</div>



</body>

</html>
