<?php session_start() ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <?php 
    
        if(!isset($_SESSION['login'])) {

            if(isset($_POST['acao'])) {
                $usuario = 'argemironenem';
                $senha = '123456';

                $usuarioForm = $_POST['usuario'];
                $senhaForm = $_POST['senha'];

                if($usuario == $usuarioForm && $senha == $senhaForm) {
                    $_SESSION['login'] = true;
                    header(index.php);
                } else {
                    echo "<p class='error'>deu ruim o login ai meu chapa ;)</p>";
                }
            }
            
            include('login.php');

        } else {

            if(isset($_GET['logout'])) {
                unset($_SESSION['login']);
                session_destroy();
                header('login.php');
                
            }

            include('home.php');

        }
    
    ?>
</body>
</html>
