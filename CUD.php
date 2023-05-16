<?php 

include('conexao.php'); 

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manutenção de produtos</title>
    <link rel="stylesheet" href="CUD.css">
</head>
<body>
    <h1>Cadastro de produtos</h1>
    <form method="post">
        <label for="produto">Produto</label>
        <input type="text" name="produto" required>
        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" required>
        <label for="valor">Preço</label>
        <input type="number" name="valor" id="valor" required>
        <input class="btn-submit" type="submit" value="Salvar" name="acao">
    </form>

    <?php

    if(isset($_POST['acao'])) {
        $produto = $_POST['produto'];
        $descricao = $_POST['descricao'];
        $valor = $_POST['valor'];

        $cadastrar = "INSERT INTO tb_produtos (produto, descricao, preco) VALUES ('$produto', '$descricao', '$valor')";
        $cadastrar_query = $conexao->query($cadastrar) or exit($conexao->error);
    }

    ?>

    <h1>Remoção de produtos</h1>
    <form method="post">
        <label for="produtoExcluir">Produto</label>
        <input type="text" name="produtoExcluir">
        <input class="btn-submit" type="submit" value="Excluir" name="excluir">
    </form>
    <a class="btn-submit" href="index.php">Voltar</a>

    <?php

    if(isset($_POST['excluir'])) {
        $produtoExcluir = $_POST['produtoExcluir'];

        $excluir = "DELETE FROM tb_produtos WHERE produto = '$produtoExcluir'";
        $excluir_query = $conexao->query($excluir) or exit($mysqli->error);
    }

    $visualizar = "SELECT * FROM tb_produtos";
    $visualizar_query = $conexao->query($visualizar) or exit("Ocorreu um erro. " . $conexao->error);

    ?>
</body>
</html>


