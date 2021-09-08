<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}


$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select * from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

			//.	if($row == 1) {
			//		$_SESSION['usuario'] = $usuario;
			//		header('Location: painel.php');
			//		exit();
			//	} else {
			//		$_SESSION['nao_autenticado'] = true;
			//		header('Location: index.php');
			//		exit();
			//	}
if($row == 1){
	while($percorrer = mysqli_fetch_array($result)){
		$nivel = $percorrer['nivel'];
		$_SESSION['usuario'] = $usuario;
		
		//if($nivel == 1){
		//	echo 'usuario administrador';
		//}else{
		//	echo 'usuario normal';
		//}
			switch ($nivel) {
				case '0':
					header('Location: paineladm.php');
					break;
				case '1':
					header('Location: painel1.php');
						break;
				case '2':
					header('Location: painel2.php');
						break;		
                case '3':
					header('Location: painel3.php');
						break;
                case '4':
					header('Location: painel4.php');
						break;
				case '5':
					header('Location: painel5.php');
						break;
				case '6':
					header('Location: painel6.php');
						break;
				case '7':
					header('Location: painel7.php');
						break;
						
				default:
					echo 'entrar em contato com o suporte erro #0001';
					break;
			}





	}

} else {
			$_SESSION['nao_autenticado'] = true;
			header('Location: index.php');
			exit();
		}