<!DOCTYPE html>
<html lang="en">
<?php include("head.php");?>
<body>
<?php include("menuHeader.php");?>

    <br>
	<div class="row">
		<div class="text-center">
			<h1>Login</h1>
		</div>
	</div>
			
    <div class="row">
	
		<?php  

			if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";
			elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  

		?>
		
		
      <form name = "form" role = "form" class="form-horizontal" method="POST" action="login-submissao.php">
        <div class="form-group">
          <label for="emailLogin" class="col-sm-4 control-label">Email</label>
          <div class="col-sm-4">
            <input type="email" class="form-control" name="emailLogin" placeholder="Digite seu email">
          </div>
        </div>
        <div class="form-group">
          <label for="senhaLogin" class="col-sm-4 control-label">Senha</label>
          <div class="col-sm-4">
            <input type="password" class="form-control" name="senhaLogin" id="senhaLogin" placeholder="Digite sua senha">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-4 col-sm-10">
            <div class="checkbox">
              <label>
                <input type="checkbox">Lembrar-me</label>
            </div>
          </div>
        </div>
		<div class="col-sm-offset-4 col-sm-10">
           <p><a href="novoCadastro.php">Novo Usuário</a>.</p>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-4 col-sm-10">
			<input type="hidden" name="save" value="login">
            <button type="submit" class="btn btn-default">Entrar</button>
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
