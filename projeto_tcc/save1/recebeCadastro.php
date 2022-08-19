<?php
include("conexao.php"); // inclui o arquivo de conexão com BD

$nomelogin = $_POST['nomelogin'];
$senhalogin = $_POST['senhalogin'];


$sql = "INSERT INTO usuario (nomelogin, senhalogin) 
        VALUES ('$nome', '$senha')";

mysqli_query($conn, $sql);

mysqli_close($conn);
echo "Usuário inserido com sucesso.";