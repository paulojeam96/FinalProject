<?php
	$usuario=$_POST['usuario'];
	$senha=$_POST['senha'];
	
	//1. cria conexao
	include "database/conectaSQL.php"; 
	//2. criar e executar a query
	$query="SELECT senha FROM usuario WHERE usuario='$usuario'";
	
	$res= mysqli_query($conexao, $query);
	
	//3. saida
	if($res){
		
		while($registro= mysqli_fetch_array($res)){
			if($registro['senha']==$senha){
				header("Location: index.php");
			}
			else{
				echo "<script confirm('Falha ao logar');";
                                header("Location: login.html");
			}
			$sql2="SELECT * FROM post WHERE ID=$id";
			
			
			
			
		}
		
		
	}
	else{
		echo "Falhou meu caro!";
                echo "<br/>";
                echo "<a href='login.html'> Voltar</a>";
	}
	
	//4. fechar conexao
	mysqli_close($conexao);
?>