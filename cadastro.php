<?php 

include('conexao.php'); 

?>

<h1>Cadastro de produtos</h1>
<form method="post">
    <label for="produto">Produto</label>
    <input type="text" name="produto" required>
    <label for="descricao">Descrição</label>
    <input type="text" name="descricao" required>
    <label for="valor">Preço</label>
    <input type="number" name="valor" id="valor" required>
    <input type="submit" value="Salvar" name="acao">
</form>

<?php

if(isset($_POST['acao'])) {
    $produto = $_POST['produto'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];

    $cadastrar = "INSERT INTO tb_produtos (imagem, produto, descricao, preco) VALUES ('$imagem', '$produto', '$descricao', '$valor')";
    $cadastrar_query = $conexao->query($cadastrar) or exit($conexao->error);
}

?>

<form method="post">
    <label for="produtoExcluir">Produto</label>
    <input type="text" name="produtoExcluir">
    <input type="submit" value="Excluir" name="excluir">
</form>
<a href="index.php">Voltar</a>

<?php

if(isset($_POST['excluir'])) {
    $produtoExcluir = $_POST['produtoExcluir'];

    $excluir = "DELETE FROM tb_produtos WHERE produto = '$produtoExcluir'";
    $excluir_query = $conexao->query($excluir) or exit($mysqli->error);
}

?>
