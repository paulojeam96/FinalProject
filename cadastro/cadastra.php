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

if($nome == null){
    echo "O campo 'nome' não pode ficar em branco";
}

if($email != $email2){
    echo "O campo email não é compatível";
}

if($datanascimento == null){
    echo "O campo 'data de nascimento' não pode ficar em branco";
}

if($senha != $senha2){
    echo "As senhas não são compatíveis";
}
else{
    echo "Cadastro realizado com sucesso!";

    echo "Seu nome de usuario é: $usuario";
    echo "E seu e-mail: $email";
}
?>
