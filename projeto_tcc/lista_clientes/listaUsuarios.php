<html>
<?php include('..\conexao.php'); ?>

<head>   
</head>
<header>
<?php include('menuLista.php'); ?>
</header>
<body>

    <h2>Listagem de usuários</h2>

    <table border='1'>
        <thead>
            <th>ID</th>
            <th>Nome do cliente</th>
            <th>Sobrenome do cliente</th>

            <th>Número do cliente</th>
            <th>CPF</th>
            <th>Endereço</th>
            <th>PIX</th>
            <th>Ação</th>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM cliente";
            $rs = mysqli_query($conn, $sql);
            while ($linha = mysqli_fetch_array($rs)) {
            ?>
            <tr>
                <td><?php echo $linha['ID']?></td>
                <td><?php echo $linha['nomecliente' ] ?></td>
                <td><?php echo $linha['sobrenomecliente'] ?></td>
                <td><?php echo $linha['Telefone'] ?></td>
                <td><?php echo $linha['CPFcliente'] ?></td>
                <td><?php echo $linha['enderecocliente'] ?></td>
                <td><?php echo $linha['chavepix'] ?></td>

                <td><a href="EditarContato.php?ID=<?php echo $linha['ID']?>"> Editar</a>
                    <a href="excluirUsuario.php?ID=<?php echo $linha['ID']?>">Excluir</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>