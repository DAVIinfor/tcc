<?php  
include("../conexao.php"); // inclui o arquivo de conexão com BD

$nomecliente = $_POST['nomecliente'];
$sobrenomecliente = $_POST['sobrenomecliente'];
$Telefone = $_POST['Telefone'];
$CPFcliente = $_POST['CPFcliente'];
$enderecocliente = $_POST['enderecocliente'];
$chavepix = $_POST['chavepix'];

$sql = "INSERT INTO cliente (nomecliente, sobrenomecliente, Telefone, CPFcliente, enderecocliente, chavepix) 
        VALUES ('$nomecliente', '$sobrenomecliente', '$Telefone', '$CPFcliente', '$enderecocliente','$chavepix')";

mysqli_query($conn, $sql);

mysqli_close($conn);
echo "Usuário inserido com sucesso.";
?>
<div>
        <ul>
                <li><a href="../inicio.php">voltar</a></li>
                <li><a href="cadastrocliente.php">Cadastrar novo usuário</a></li>
        </ul>
</div>