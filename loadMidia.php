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

    <link type='text/css' href='css/demo.css' rel='stylesheet' media='screen' />
    <link type='text/css' href='css/basic.css' rel='stylesheet' media='screen' />

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

    <!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>
    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.simplemodal.js'></script>
    <script type='text/javascript' src='js/basic.js'></script>


</body>

</html>
