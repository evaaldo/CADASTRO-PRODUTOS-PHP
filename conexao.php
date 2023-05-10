<?php

$username = "root";
$password = "";
$database = "produtos";
$hostname = "localhost";

$mysqli = new mysqli($hostname, $username, $password, $database);
if($mysqli->error) {
    exit("Erro ao conectar-se com o banco. " . $mysqli->error);
}

?>
