<?php

$host = "localhost";
$user = "root";
$bd = "usuario";
$senha = "";

$conexao = mysqli_connect($host, $user, $senha, $bd );
if(!$conexao) {
    echo "Erro" . mysqli_error($conexao);
} else {
    echo "Sucesso";
}
mysqli_autocommit($conexao, TRUE);

?>