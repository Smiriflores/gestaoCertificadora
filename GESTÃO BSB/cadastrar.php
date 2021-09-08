<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$nivel = mysqli_real_escape_string($conexao, trim($_POST['nivel']));
define('HOST', 'localhost');
define('USUARIO', 'id17436389_bsb');
define('SENHA','Joao081.pedro');
define('DB', 'id17436389_bancobsb');

$strcon = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
$sql ="select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);
if($row['total'] == 1) {
    $_SESSION['usuario_existe'] = true;
    header('Location: cadastro.php');
    exit;
}

$sql = "INSERT INTO usuario (nome , usuario, senha ,data_cadastro,nivel) VALUES('$nome', '$usuario', '$senha', NOW(),'$nivel')";
if($conexao->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;
?>