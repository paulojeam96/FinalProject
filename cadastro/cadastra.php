<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
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
$login = $_POST['login'];
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

if($senha != $senha2 || $senha == null){
    echo "As senhas não são compatíveis";
}

else{
    echo "oi";
                //1. cria conexao
		include "../database/conectaSQL.php"; 
                //2. criar e executar a query
		$query="INSERT INTO usuario (nome,email,datanascimento,telefone,sexo,endereco,cidade,estado,cep,usuario,senha) VALUES('$nome','$email','$datanascimento','$telefone','$sexo','$endereco','$cidade','$estado','$cep','$usuario','$senha')";
              
                echo " ei". $conexao->query($query);
                if($conexao->query($query)) {
                               echo 
                                   "<head>
                                   <title>Cadastro realizado com sucesso</title>
                                   </head>
                                   Cadastro realizado com sucesso!
                                   Seu nome de usuario é: $usuario
                                   E seu e-mail: $email";
                        }
                            else{
                               
                                $message =  "ERRO. Usuario não cadastrado";
                                echo "<script type='text/javascript'>alert('$message');</script>";
                            }     
                echo $query;
                            
		//3. fechar conexao
		mysql_close($conexao);
}
?>
