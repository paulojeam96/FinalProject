<?php

$host = "localhost";
$user = "root";
$bd = "usuario";
$senha = "";

    $conexao = mysqli_connect($host, $user, $senha );

    if(mysqli_connect_errno()){
        echo "Erro na conexão ".mysqli_connect_error();
    }


?>