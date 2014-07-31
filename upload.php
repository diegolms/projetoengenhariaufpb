<!DOCTYPE html>
<html lang="en">
<?php include("head.php");?>
<body>
<?php include("menuHeader.php");
?>

		<?php
			if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";
			elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  

		?>
	<div class = "well">
        <form id="upload_form" class="form-horizontal" enctype="multipart/form-data" method="post">
            <div class="col-sm-offset-4 col-sm-10">
                <div class="text-justify">
                    <h4>Enviar seu arquivo</h4>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-5">
                    Título
                    <input name="titulo" id="titulo" type="text" class="form-control"  placeholder="Titulo">
                    Midia
                    <input name="file1" id="file1" class="form-control" size="40" type="file">
                    Arquivo XML
                    <input name="arquivoXML" id="arquivoXML" class="form-control" size="40" type="file">

                    Categoria
                    <select name="categoria" id="categoria" class="form-control">
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
                    <input type="button" class="btn btn-default" value="Enviar" onclick="uploadFile()">
                </div>
            </div>
            <div class="form-group" >

                <div class="col-sm-offset-4 col-sm-5" id="progressForm" hidden="hidden">
                    <label id="porcentagem"></label>
                    <progress id="progressBar" value="0" max="100" style="width:500px;"></progress>
                    <label id="status"></label>
                </div>
            </div>

        </form>

	</div>

</body>

<script>
    function _(el){
        return document.getElementById(el);
    }
    function uploadFile(){

        var fileName = $("#file1").val();
        var xmlFileName = $("#arquivoXML").val();
        var titulo = _("titulo").value;
        if(titulo == ""){
           alert("Você precisa inserir um título");
        }
        else if(fileName == ""){
            alert("Você precisa inserir uma Mídia");
        }
        else if(xmlFileName == ""){
            alert("Você precisa inserir um Arquivo XML");
        }
        else{

            _("progressForm").style.display = 'block';
            var arquivo = _("file1").files[0];
            var arquivoXML = _("arquivoXML").files[0];
            var categoria = _("categoria").value;

            var formdata = new FormData();
            formdata.append("file1", arquivo);
            formdata.append("titulo", titulo);
            formdata.append("arquivoXML", arquivoXML);
            formdata.append("categoria", categoria);
            var ajax = new XMLHttpRequest();
            ajax.upload.addEventListener("progress", progressHandler, false);
            ajax.addEventListener("load", completeHandler, false);
            ajax.addEventListener("error", errorHandler, false);
            ajax.addEventListener("abort", abortHandler, false);
            ajax.open("POST", "file_upload_parser.php");
            ajax.send(formdata);
        }
    }
    function progressHandler(event){
       // _("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
        var percent = (event.loaded / event.total) * 100;
        _("progressBar").value = Math.round(percent);
        _("porcentagem").innerHTML = Math.round(percent)+"%";
    }
    function completeHandler(event){
        _("status").innerHTML = event.target.responseText;
       _("progressBar").value = 100;
    }
    function errorHandler(event){
        _("status").innerHTML = "Upload Failed";
        _("progressBar").value = 0;
        _("porcentagem").innerHTML = "";
    }
    function abortHandler(event){
        _("status").innerHTML = "Upload Aborted";
        _("progressBar").value = 0;
        _("porcentagem").innerHTML = "";
    }
</script>

</html>
