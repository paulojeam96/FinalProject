<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
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

                //1. cria conexao
		include "../database/conectaSQL.php"; 
                //2. criar e executar a query
		$query="INSERT INTO usuario(nome,email,datanascimento,telefone,sexo,endereco,cidade,estado,cep,usuario,senha) VALUES('$nome','$email','$datanascimento','$telefone','$sexo','$endereco','$cidade','$estado','$cep','$usuario','$senha')";
              
                $conexao=$query;
                if($conexao) {
                              
                                   $message = "Cadastro realizado com sucesso";
                                   echo "<script type'text/javascript'>alert('$message');</script>";
                                   echo "</br>";
                                   echo "Vá para a pagina de <a href='../login.html'> login!</a>";
                        }
                            else{
                               
                                $message =  "ERRO. Usuario não cadastrado";
                                echo "<script type='text/javascript'>alert('$message');</script>";
                            }     
                
               
             
		
?>
