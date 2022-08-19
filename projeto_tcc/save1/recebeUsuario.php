<?php
include("conexao.php"); // inclui o arquivo de conexão com BD

$nomecliente = $_POST['nomecliente'];
$Telefone = $_POST['Telefone'];
$CPFcliente = $_POST['CPFcliente'];
$enderecocliente = $_POST['enderecocliente'];
$chavepix = $_POST['chavepix'];

$sql = "INSERT INTO cliente (nomecliente, Telefone, CPFcliente, enderecocliente, chavepix) 
        VALUES ('$nomecliente', '$Telefone', '$CPFcliente', '$enderecocliente','$chavepix')";

mysqli_query($conn, $sql);

mysqli_close($conn);
echo "Usuário inserido com sucesso.";