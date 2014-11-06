<!DOCTYPE html>
<html>
        <head>
		<meta charset="utf-8"/>
	</head>
	<body>
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
                        
		
			//1. cria conexao
			include "conecta_mysql.php"; 
			//2. criar e executar a query
			$query="INSERT INTO usuario(nome,email,datanascimento,telefone,sexo,endereco,cidade,estado,cep,usuario,senha) VALUES('$nome','$email','$datanascimento','$telefone','$sexo','$endereco','$cidade','$estado','$cep','$usuario','$senha')";
			$res= mysqli_query($conexao, $query);
			
			//3. saida
			if($res){
				echo "Usuario inserido com sucesso";
			}
			else{
				echo "Falhou, meu caro!";
			}
			
			//4. fechar conexao
			mysqli_close($conexao);
		?>
	</body>
</html>