<!DOCTYPE html>
<html lang="en">

<body>
<?php include("menuHeader.php"); ?>
		<?php
			if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";
			elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  

		?>
	<div class = "well">
	<form action="./upload-submissao.php" class="form-horizontal" enctype="multipart/form-data" method="POST">
		
		<div class="col-sm-offset-4 col-sm-10">
			<div class="text-justify">
				<h4>Enviar seu arquivo</h4>
			</div>
		</div>
		
		<div class="form-group">
          <div class="col-sm-offset-4 col-sm-5">
            <input name="titulo" type="text" class="form-control"  placeholder="Titulo">
                Midia
				<input name="arquivo" class="btn btn-default" size="40" type="file">
                Arquivo XML
				<input name="arquivoXML" class="btn btn-default" size="40" type="file">

                Categoria
            <select name="categoria" id="tabela" class="form-control">
                <?php
                include ("connect_to_db.php");
                $query = mysqli_query($con,"select * from categoria");

                while ($dados = mysqli_fetch_array($query)) {
                    echo("<option value='".$dados['id_categoria']."'>".$dados['categoria']."</option>");
                }

                ?>
            </select>

          </div>
        </div>	
		
		<div class="form-group">
          <div class="col-sm-offset-4 col-sm-10">
            <button type="submit" class="btn btn-default" value="Upload" name="video">Enviar</button>
          </div>
        </div>
	
	</form>
	</div>

</body>

</html>
