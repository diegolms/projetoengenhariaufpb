<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=x-mac-roman">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mundo Engenharia de Software</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
                <a class="navbar-brand" href="index.php">In�cio</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">

                      <li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Processo<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
							<a href="especificacao.php">Especifica��o</a>
							</li>
							<li>
							  <a href="projeto.php">Projeto</a>
							</li>
							<li>
							  <a href="implementacao.php">Implementa��o</a>
							</li>
							<li>
							  <a href="teste.php">Testes</a>
							</li>
							<li>
							  <a href="modelo.php">Modelo</a>
							</li>
						</ul>
					</li>

					<li class="dropdown">
					  <a class="dropdown-toggle" data-toggle="dropdown" href="#">M�todos<b class="caret"></b></a>
					  <ul class="dropdown-menu">
						<li>
						  <a href="estruturado.php">Estruturado</a>
						</li>
						<li>
						  <a href="orientadoObjeto.php">Orientado a Objeto</a>
						</li>
						<li>
						  <a href="outrasMetodologias.php">Outras Metodologias</a>
						</li>
						<li>
						  <a href="uml.php">UML</a>
						</li>
					  </ul>
					</li>

					<li class="dropdown">
					  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ferramentas<b class="caret"></b></a>
					  <ul class="dropdown-menu">
						<li>
						  <a href="programacaoEstruturada.php">Programa��o Estruturada</a>
						</li>
						<li>
						  <a href="programacaoFuncional.php">Programa��o Funcional</a>
						</li>
						<li>
						  <a href="programacaoOrientadaObjeto.php">Programa��o Orientada a Objeto</a>
						</li>
						<li>
						  <a href="componenteSoftware.php">Componetes de Software</a>
						</li>
					  </ul>
					</li>
					
					<li>
					  <a href="#">Mapa Conceitual</a>
					</li>
					 <li><a href="login.php">Login</a>
                    </li>
                 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

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

    <!-- /.container -->

    <!-- JavaScript -->


</body>

</html>
