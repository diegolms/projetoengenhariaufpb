<?php
include'connect_to_db.php';
// check for form submission - if it doesn't exist then send back to contact form
if (!isset($_POST['save']) || $_POST['save'] != 'login') {
    header('Location: login.php'); exit;
}

session_start();
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


// Monta uma consulta SQL (query) para procurar um usu�rio
$sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha' LIMIT 1";
$query = mysqli_query($con, $sql);
$resultado = mysqli_fetch_assoc($query);

if(empty($resultado)){
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
	header('Location: login.php?e='.urlencode('Usuário não cadastrado.'));
}
else {
    $_SESSION['login'] = $resultado['nome'];
    $_SESSION['senha'] = $senha;
	header('Location: index.php?s='.urlencode('Bem Vindo.'));
}
mysql_close($con); exit;

?>