<!DOCTYPE html>

<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$email2 = $_POST['email2'];
$datanascimento = $_POST['datanascimento'];
$telefone = $_POST['telefone'];
$sexo = $_POST['sexo'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$senha2 = $_POST['senha2'];

echo "<meta charset = 'UTF-8' >";

if($nome == null){
    echo "O campo 'nome' não pode ficar em branco";
}

if($email != $email2){
    echo "O campo email não é compatível";
}

if($datanascimento == null){
    echo "O campo 'data de nascimento' não pode ficar em branco";
}

if($senha != $senha2 || $senha == null){
    echo "As senhas não são compatíveis";
}


else{
    include "create.php";
    if($res){
        echo 
            "<head>
            <title>Cadastro realizado com sucesso</title>
            </head>
            Cadastro realizado com sucesso!

            Seu nome de usuario é: $usuario
            E seu e-mail: $email";
    }
    else{
        $message = "Não foi dessa vez! Tente novamente :)" ;
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
?>
