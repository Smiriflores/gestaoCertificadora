<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="css\estilos.css">
</head>
<body>
    <img src="cadastro.png"/>
        <form name="cadastro" action="consulta3.php" method="POST">
        <label >Nome Do AGR: </label></br>
        <input type="text" name="agr" ><br>
      
        <input type="submit" name="enviar" value="Enviar"><br>
</form>

        
<h1><a href="javascript:history.back()"><img src="voltar.png"/></a></h1>
</body>
</html>