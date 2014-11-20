<?php
    //1. Cria conexão
    $conexao = mysqli_connect("127.0.0.1","root","","feeg");

    //2. Trata erro
    if( mysqli_connect_errno() )
    {
            echo "Erro na conexão! ".mysqli_connect_error();
    }
?>