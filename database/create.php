<!DOCTYPE html>
<html>
        <head>
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php
			//1. cria conexao
			include "conecta_mysql.php"; 
			//2. criar e executar a query
			$query="INSERT INTO usuario(nome,email,datanascimento,telefone,sexo,endereco,cidade,estado,cep,usuario,senha) VALUES('$nome','$email','$datanascimento','$telefone','$sexo','$endereco','$cidade','$estado','$cep','$usuario','$senha')";
			$res= mysqli_query($conexao, $query);
			//3. fechar conexao
			mysqli_close($conexao);
		?>
	</body>
</html>