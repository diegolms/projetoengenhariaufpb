<?php
    ob_start();
    session_start();

$logado = '';
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
}
else{
$logado = $_SESSION['login'];
}
?>

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
            <a class="navbar-brand" href="index.php">Início</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Processo<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="especificacao.php">Especificação</a>
                        </li>
                        <li>
                            <a href="projeto.php">Projeto</a>
                        </li>
                        <li>
                            <a href="implementacao.php">Implementação</a>
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
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Métodos<b class="caret"></b></a>
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
                            <a href="programacaoEstruturada.php">Programação Estruturada</a>
                        </li>
                        <li>
                            <a href="programacaoFuncional.php">Programação Funcional</a>
                        </li>
                        <li>
                            <a href="programacaoOrientadaObjeto.php">Programação Orientada a Objeto</a>
                        </li>
                        <li>
                            <a href="componenteSoftware.php">Componentes de Software</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="mapaConceitual.php">Mapa Conceitual</a>
                </li>
                <?php
                if(strcmp($logado, '') == 0){

                   echo '<li><a href="login.php">Login</a>';
                }
                else{
                    echo '<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">'.$logado.'<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    <li>
                        <a href="upload.php">Carregar Vídeo</a>
                    </li>
                    <li>
                        <a href="logout.php">Sair</a>
                    </li>
                     ';
                }
                ?>

                </li>

            </ul>
        </div>

    </div>

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>
    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.simplemodal.js'></script>
    <script type='text/javascript' src='js/basic.js'></script>
</nav>
<?php
ob_end_flush();
?>
