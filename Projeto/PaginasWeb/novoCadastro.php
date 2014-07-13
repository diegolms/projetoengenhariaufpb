<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
                <a class="navbar-brand" href="index.html">Início</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">

                      <li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Processo<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
							<a href="especificacao.html">Especificação</a>
							</li>
							<li>
							  <a href="projeto.html">Projeto</a>
							</li>
							<li>
							  <a href="implementacao.html">Implementação</a>
							</li>
							<li>
							  <a href="teste.html">Testes</a>
							</li>
							<li>
							  <a href="modelo.html">Modelo</a>
							</li>
						</ul>
					</li>

					<li class="dropdown">
					  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Métodos<b class="caret"></b></a>
					  <ul class="dropdown-menu">
						<li>
						  <a href="estruturado.html">Estruturado</a>
						</li>
						<li>
						  <a href="orientadoObjeto.html">Orientado a Objeto</a>
						</li>
						<li>
						  <a href="outrasMetodologia.html">Outras Metodologias</a>
						</li>
						<li>
						  <a href="uml.html">UML</a>
						</li>
					  </ul>
					</li>

					<li class="dropdown">
					  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ferramentas<b class="caret"></b></a>
					  <ul class="dropdown-menu">
						<li>
						  <a href="programacaoEstruturada.html">Programação Estruturada</a>
						</li>
						<li>
						  <a href="programacaoFuncional.html">Programação Funcional</a>
						</li>
						<li>
						  <a href="programacaoOrientadaObjeto.html">Programação Orientada a Objeto</a>
						</li>
						<li>
						  <a href="componeteSoftware.html">Componetes de Software</a>
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
    <br>
	<div class="row">
		<div class="text-center">
			<h1>Cadastro</h1>
		</div>
	</div>
		
   <div class="row">
	
		<?php  

			// check for a successful form post  
			if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
	  
			// check for a form error  
			elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  

		?>
				
      <form name = "form" role = "form" class="form-horizontal" method="POST" action="cadastro-submissao.php">
        <div class="form-group">
          <label for="nome" class="col-sm-4 control-label">Nome</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="nome" placeholder="Digite seu Nome">
          </div>
        </div>
		
		<div class="form-group">
          <label for="nome" class="col-sm-4 control-label">Sobrenome</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="sobrenome" placeholder="Digite seu Sobrenome">
          </div>
        </div>
		
		<div class="form-group">
          <label for="emailLogin" class="col-sm-4 control-label">Email</label>
          <div class="col-sm-4">
            <input type="email" class="form-control" name="email" placeholder="Digite seu email">
          </div>
        </div>
		
        <div class="form-group">
          <label for="senha" class="col-sm-4 control-label">Senha</label>
          <div class="col-sm-4">
            <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite sua senha">
          </div>
        </div>
		
		<div class="form-group">
          <label for="senhaConfirmacao" class="col-sm-4 control-label">Repetir a Senha</label>
          <div class="col-sm-4">
            <input type="password" class="form-control" name="senhaConfirmacao" id="senhaConfirmacao" placeholder="Digite sua senha">
          </div>
        </div>
	
        <div class="form-group">
          <div class="col-sm-offset-4 col-sm-10">
			<input type="hidden" name="save" value="cadastrar">
            <button type="submit" class="btn btn-default">Cadastrar</button>
          </div>
        </div>
		
      </form>
    </div>
	

    <div class="container">
        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; UFPB 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>

</body>

</html>
