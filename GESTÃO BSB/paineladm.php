<?php
session_start();
include('verifica_login.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Gestão BSB</title>
</head>
<body > 
        <br>
        <br> 

        <p><img  alt="" src="logobsb.jpeg" aling = "middle" /></p>
        <h1>Olá, <?php echo $_SESSION['usuario'];?> <br>Seja bem-vindo ao Gestão BSB - Você è um administrador</h1>
        <!--<a href="gerador-boleto/index.php">Emitir Boleto</a> -->
        <div class="field">
        <link href="../styles.css">
        </div>
        <br>
        <br>
        <br>

        <div class="box">
        <a href="novo/cadastro.php"><img src="cadastrar.png"/></a>
            
        </div>
        <div class="box">
        <a href="novo/consultaadmindex.php"><img src="lista.png"/></a>
            
        </div>
        <div class="box">
        <a href="pix.php"><img src="boleto.png"/></a>
   
           
        </div>
        </br>
        </br>
        <div class="box">
        <a href="ferramentas.php"><img src="Ferramentas.png"/></a>
           
        </div>
        <div class="box">
            <a href="https://api.whatsapp.com/send?phone=556135850872"><img src="Contato.png"/></a>
            
        </div>
        <div class="box">
            <a href="tabela.php"><img src="Tabela.png"/></a>
            
        </div>
        <div class="box">
        <a href="cadastrar.php"><img src="cadastrarusu.png"/></a>
            
        </div>
        
        <style>
        div.box {
            width: 200px;
            display: inline-block;
        }
</style>      
         </br>
         </br>
         </br>  
         </br>
     
        <div class="box">
            <a href="logout.php"><img src="sair.png"/></a>
            
        </div>


 

    
</body>
</html>
