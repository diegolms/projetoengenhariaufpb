<?php

// check for form submission - if it doesn't exist then send back to contact form
if (!isset($_POST['save']) || $_POST['save'] != 'login') {
    header('Location: login.php'); exit;
}
	
// get the posted data
$email = $_POST['emailLogin'];
$senha = $_POST['senhaLogin'];

// check that an email address was entered
if (empty($email)) 
    $error = 'Você precisa inserir um email.';
// check for a valid email address
elseif (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email))
    $error = 'Você precisa inserir um email válido.';
// check that a phone number was entered
elseif (empty($senha))
    $error = 'Você precisa inserir a senha';

// check if an error was found - if there was, send the user back to the form
if (isset($error)) {
    header('Location: login.php?e='.urlencode($error)); exit;
}


global $_SG;
$cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

$nEmail = addslashes($email);
$nSenha = addslashes($senha);

//Conectando com o banco
$conx = mysql_connect("localhost", "root", "admin") or die('Não foi possível conectar');

mysql_select_db("ProjetoES", $conx);

// Monta uma consulta SQL (query) para procurar um usuário
$sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha' LIMIT 1";
$query = mysql_query($sql);
$resultado = mysql_fetch_assoc($query);

if(empty($resultado)){
	header('Location: login.php?e='.urlencode('Usuário não cadastrado.'));
}
else {
	header('Location: index.html?s='.urlencode('Bem Vindo.'));
}
mysql_close($conx); exit;

?>