<?php

$host = "localhost";
$user = "root";
$bd = "usuario";
$senha = "linux";

$conexao = mysqli_connect($host, $user, $senha, $bd );
if(!$conexao) {
    echo "Erroi" . mysqli_error($conexao);
} else {
    echo "Sucesso";
}
mysqli_autocommit($conexao, TRUE);

?>