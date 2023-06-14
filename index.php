<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acessar treinos</title>
</head>
<body>
    <section class="box-login">
        <div class="box-arte">

        </div>
        <div class="box-credenciais">
            <form class="box-form" method="post">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" placeholder="Nome.." required>
                <label for="senha">Senha</label>
                <input type="text" name="senha" id="senha" placeholder="Senha.." required>
                <input type="submit" value="Entrar" name="login">
            </form>
            <a class="signUp" href="cadastro.php">Cadastrar-se</a>
            <a class="github" href="https://github.com/evaaldo">Conheça mais sobre o nosso desenvolvedor!</a>
        </div>

        <?php

        include("conexao.php");

        if(isset($_POST['login'])) {
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];

            $sql = "SELECT * FROM tb_usuario WHERE nome = '$nome' AND senha = '$senha'";
            $sql_query = $conexao->query($sql) or exit($conexao->error);

            $quantidade = $sql_query->num_rows;

            if($quantidade == 1) {
                $_SESSION['login'] = $_POST['nome'];
                header("Location: home.php");
            } else {
                header("Location: erro.php");
            }
        }
        ?>

    </section>
</body>
</html>