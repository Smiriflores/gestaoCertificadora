<?php
session_start();
include('verifica_login.php');

?>
<link rel="stylesheet" href="css\estilos.css">
<title>Consulta</title>
<body>
<img src="lista.png"/><br>
   <h1>Olá, <?php echo $_SESSION['usuario'];?> <br>Seja bem-vindo ao Gestão BSB</h1>
<br>
<?php
session_start();
$agente =  $_SESSION['usuario'];


echo "<table  border =1>";
echo "<tr>";
echo "<th> N Pedido </th>";
echo "<th> Nome </th>";
echo "<th> Data De Emissao</th>";
echo "<th> Tipo </th>";
echo "<th> Valor </th>";
echo "<th> Agr </th>";

echo "</tr>";

define('HOST', 'localhost');
define('USUARIO', 'id17436389_bsb');
define('SENHA','Joao081.pedro');
define('DB', 'id17436389_bancobsb');

$strcon = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
$sql = "SELECT * FROM certificados WHERE dataE >= CURRENT_DATE - INTERVAL 7 DAY and agr = '{$agente}' ORDER BY dataE";

$resultado = mysqli_query($strcon,$sql) or die ("erro ao tentar cadastrar registo");
$soma = 0;

while ($registro = mysqli_fetch_array($resultado)){
    

    $nPedido = $registro['idCertificado'];
    $nome = $registro['nome'];
    $data = $registro['dataE'];
    $tipo = $registro['tipo'];
    $agr = $registro['agr'];
    $tipoN = $registro['tipoN'];
    echo"<tr>";
    echo"<td>".$nPedido."</td>";
    echo"<td>".$nome."</td>";
    echo"<td>".$data."</td>";
    echo"<td>".$tipoN."</td>";
    echo"<td>".number_format((float)$tipo, 2, '.', '')."</td>";
    echo"<td>".$agr."</td>";
  
    echo"<tr>";
    $soma +=$tipo;
    

}
mysqli_close($strcon);
echo "</table>";







?>
 <h1><a href="javascript:history.back()"><img src="voltar.png"/></a></h1>
 <h1><?php echo $_SESSION['usuario'];?> <br>Valor a ser pago  <?php echo number_format((float)$soma, 2, '.', '') ?>$$</h1>
</body>