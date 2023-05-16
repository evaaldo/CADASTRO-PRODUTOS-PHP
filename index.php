<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Produtos</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <section class="produtos">
        <h1>E-commerce</h1>
        <a href="CUD.php">Manutenção de produtos</a>
        <?php
        include('conexao.php');

        $consulta = "SELECT * FROM tb_produtos";
        $consulta_query = $conexao->query($consulta);

        $quantidade = $consulta_query->num_rows;

        if($quantidade > 0) {
            while($row = $consulta_query->fetch_object()) {
                print "<div class=''>";
                print "<h2>" . $row->produto . "</h2>";
                print "<h4>R$ " . $row->preco . ",00</h4>";
                print "<p>" . $row->descricao . "</p>";
                print "</div>";
            }
        }
        ?>
    </section>
</body>
</html>
