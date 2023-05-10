<?php

$username = "root";
$password = "";
$database = "produtos";
$hostname = "localhost";

$conexao = mysqli_connect($hostname, $username, $password, $database);
if($conexao->error) {
    exit("Erro ao conectar-se com o banco. " . $conexao->error);
}

?>
