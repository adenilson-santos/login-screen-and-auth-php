<?php 
    $server     = "localhost";
    $username   = "root";
    $password   = "";
    $database   = "trabalho_login";

    $connect = mysqli_connect($server, $username, $password, $database);

    if(mysqli_connect_errno()) {
        die("Erro na conexão com o banco de dados." . mysqli_connect_errno());
    }
?>