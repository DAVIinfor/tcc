<html>

<head></head>
<body>
<header>
    <?php include ('conexao.php'); ?>
    <?php include ('menuLista.php'); ?>
</header>
    <form action="recebeUsuario.php" method="POST">
        <h2>Cadastro compra</h2>
        <p><select id="cars" name="cars"></p>
        <option><?php
        $sql = "SELECT  FROM cliente";
        $rs = mysqli_query($conn, $sql);
        while ($linha = mysqli_fetch_array($rs)) {
        ?>
        <tr>
            <td><?php echo $linha['ID']?></td> 
</option>
        <p>sobrenome : <input type="text" name="sobrenomecliente"></p>
        <p>Telefone: <input type="text" name="Telefone"></p>
        <p>CPF <input type="text" name="CPFcliente"></p>
        <p>Endereço <input type="text" name="enderecocliente"></p>
        <p>Chave do PIX <input type="text" name="chavepix"></p>

       <?php } ?>
        <input type="submit" value="Cadastrar" name="btnEnviar">
    </form>
</body>
</html>