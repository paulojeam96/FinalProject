<?php
//read
$sql = "SELECT * FROM user WHERE usuario='$usuario'";
$resultado = mysqli_query($conexao, $sql);
$user = mysqli_fetch_array($resultado);
?>