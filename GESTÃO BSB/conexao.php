<?php
define('HOST', 'localhost');
define('USUARIO', 'id17436389_bsb');
define('SENHA','Joao081.pedro');
define('DB', 'id17436389_bancobsb');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
?>