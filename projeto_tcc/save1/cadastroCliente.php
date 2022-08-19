<html>
<head></head>
<body>
    <?php include ('menu.php'); ?>
    
    <form action="recebeUsuario.php" method="POST">
        <h2>Cadastro de cliente</h2>
        <p>Nome : <input type="text" name="nomecliente"></p>
        <p>Telefone: <input type="text" name="Telefone"></p>
        <p>CPF <input type="text" name="CPFcliente"></p>
        <p>Endereço <input type="text" name="enderecocliente"></p>
        <p>Chave do PIX <input type="text" name="chavepix"></p>


        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>