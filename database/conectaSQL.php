<?php

$conexao = mysqli_connect("localhost", "root", "", "usuario" );
if (mysqli_connect_errno()) {
    echo "erro na conexão!" . mysqli_connect_error();
}
?>