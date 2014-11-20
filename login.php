<?php
	$usuario=$_POST['usuario'];
	$senha=$_POST['senha'];
	
	//1. cria conexao
	include "database/conectaSQL.php"; 
	//2. verifica se o usuario ao menos existe
	$query="SELECT * FROM user WHERE usuario='$usuario'OR email='$usuario'";
	$res= mysqli_query($conexao, $query);
	
	//3. saida
	if($res){
		
		while($registro= mysqli_fetch_array($res)){
			if($registro['senha']==md5($senha)){//verifica se a senha esta correta
                            session_start();
                            $_SESSION['FEEGusuario']=$registro['usuario'];
			}
		}
		
		
	}
	header("Location: index.php");
	
	//4. fechar conexao
	mysqli_close($conexao);
?>