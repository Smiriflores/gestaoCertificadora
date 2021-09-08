<?php
$idCertificado = $_POST['idCertificado'];
$nome = $_POST['nome'];
$data = $_POST['dataE'];
//$tipo = $_POST['tipo'];
$separa = explode('|',$_POST['tipo']);
$tipo = $separa['0'];

$tipoN = $separa['1'];


$agr = $_POST['agr'];



define('HOST', 'localhost');
define('USUARIO', 'id17436389_bsb');
define('SENHA','Joao081.pedro');
define('DB', 'id17436389_bancobsb');

$strcon = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
$sql = "INSERT INTO certificados (`idCertificado`, `nome`, `dataE`, `tipo`, `agr`, `tipoN`) VALUES";
$sql .= "('$idCertificado', '$nome' ,'$data' , '$tipo' ,'$agr', '$tipoN')";
mysqli_query($strcon,$sql) or die ("erro ao tentar cadastrar Registro");
mysqli_close($strcon);
echo  " Certificado Cadastrado com Sucesso";


?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="css\estilos.css">
    </head>
    <h1><a href="javascript:history.back()"><img src="voltar.png"/></a></h1>