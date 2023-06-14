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
                <input type="text" name="nome" id="nome" placeholder="Nome..">
                <label for="senha">Senha</label>
                <input type="text" name="senha" id="senha" placeholder="Senha..">
                <input type="submit" value="Entrar" name="login">
            </form>
            <a class="signUp" href="cadastro.php">Cadastrar-se</a>
            <a class="github" href="https://github.com/evaaldo">Conheça mais sobre o nosso desenvolvedor!</a>
        </div>

        <?php
        if(isset($_POST['login'])) {
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];

            $nomeAcesso = "Evaldo";
            $senhaAcesso = "123";

            if($nome == $nomeAcesso && $senha == $senhaAcesso) {
                $_SESSION['login'] = $_POST['nome'];
                header("Location: home.php");
            } else {
                echo("<script> alert('acerta o login ai oh pau nas beira!'); </script>");
            }
        }
        ?>

    </section>
</body>
</html>