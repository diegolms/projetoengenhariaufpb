<?php
//Conectando com o banco
$conx = mysql_connect("localhost", "root", "admin") or die('N�o foi poss�vel conectar');

// check for form submission - if it doesn't exist then send back to contact form
if (!isset($_POST['save']) || $_POST['save'] != 'cadastrar') {
    header('Location: novoCadastro.php'); exit;
}
	
// get the posted data
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senhaConfirmacao = $_POST['senhaConfirmacao'];


// check that an email address was entered
if (empty($nome)) 
    $error = 'Voc� precisa inserir um Nome.';
elseif (empty($sobrenome)) 
    $error = 'Voc� precisa inserir um Sobrenome.';
elseif (empty($email)) 
    $error = 'Voc� precisa inserir um Email.';
// check for a valid email address
elseif (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email))
    $error = 'Voc� precisa inserir um email v�lido.';
// check that a phone number was entered
elseif (empty($senha))
    $error = 'Voc� precisa inserir a senha';
elseif (empty($senhaConfirmacao))
    $error = 'Voc� precisa repetir a senha';
elseif($senha != $senhaConfirmacao)
	$error = 'As senhas est�o diferentes.';

// check if an error was found - if there was, send the user back to the form
if (isset($error)) {
    header('Location: novoCadastro.php?e='.urlencode($error)); exit;
}

mysql_select_db("ProjetoES", $conx);
mysql_query("INSERT INTO usuario(nome, sobrenome, email, senha) VALUES ('$nome', '$sobrenome', '$email', '$senha')");
mysql_close($conx);

// send the user back to the form
header('Location: novoCadastro.php?s='.urlencode('Cadastro Realizado com sucesso.')); exit;

?>