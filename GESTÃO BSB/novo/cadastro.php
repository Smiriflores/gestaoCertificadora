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
        <form name="cadastro" action="cadastrar.php" method="POST">
        <label >Nº Certificado: </label></br>
        <input type="text" name="idCertificado" ><br>
        <label >Nome/Razão Social:</label></br>
        <input type="text" name="nome" "><br>
        <label >Data Emissao:</label><br>
        <input type="date" name="dataE" value='<?php echo date("Y-m-d"); ?>' readonly="true" ><br>
        <label >Tipo:</label><br>
            <select name="tipo" >
            <option value="0" >Escolha..</option>
            <option value="130|E-CPF A1" text="">E-CPF A1</option>
            <option value="188|E-CPF A3,01 ano" text="">E-CPF A3,01 ANO</option>
            <option value="213|E-CPF A3,02 anos" text="">E-CPF A3,02 ANOS</option>
            <option value="264|E-CPF A3,03 anos" text="">E-CPF A3,03 ANOS</option>
            <option value="180|E-CNPJ A1" text="">E-CNPJ A1</option>
            <option value="220|E-CNPJ A3,01 ano" text="">E-CNPJ A3,01 ANO</option>
            <option value="260|E-CNPJ A3,02 anos" text="">E-CNPJ A3,02 ANOS</option>
            <option value="320|E-CNPJ A3,03 anos" text="">E-CNPJ A3,03 ANOS</option>
            <option value="180|E-CNPJ VIDEO" text="E-CNPJ VIDEO">VIDEO CONFERENCIA E-CNPJ</option>
            <option value="130|E-CPF VIDEO" text="E-CPF VIDEO ">VIDEO CONFERENCIA E-CPF</option>
            <option value="250|E-CNPJ INATIVO" text="E-CNPJ INATIVO">CNPJ INATIVO</option>
            </select><br>
        <label >Agr:</label> <br>
        <input type="text" name="agr" value="<?php echo $_SESSION['usuario'];?>"><br>
        <input type="submit" name="enviar" value="Enviar"><br>
</form>

        
<h1><a href="javascript:history.back()"><img src="voltar.png"/></a></h1>
</body>
</html>