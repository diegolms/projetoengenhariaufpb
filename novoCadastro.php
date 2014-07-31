<!DOCTYPE html>
<html lang="en">
<?php include("head.php");?>
<body>
<?php include("menuHeader.php");?>

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

</body>

</html>
