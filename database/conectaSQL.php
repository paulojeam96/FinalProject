<?php

$host = "localhost";
$user = "root";
$bd = "usuario";
$senha = "";

$conexao = mysql_pconnect($host, $user, $senha ) or die(mysql_error());
mysql_select_db($bd, $conexao);
?>