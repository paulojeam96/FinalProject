<!DOCTYPE html>
<html>
    <head>
        <title>Feeg - Erro</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="shortcut icon" href="../imagens//favicon.ico" type="image/x-icon"/>
    </head>
    <body>
        <?php
		$nome = $_POST['nome'];
		$usuario = $_POST['usuario'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$senha2 = $_POST['senha2'];
		$sexo = $_POST['sexo'];
		$dataNascimento = $_POST['dataNascimento'];
		

		$nome=ucfirst($nome);
			
		include "../database/conectaSQL.php";
		
		$sql = "SELECT * FROM user WHERE email='$email' OR usuario='$usuario'";
		
		$resultado = mysqli_query($conexao, $sql);
		$user = mysqli_fetch_array($resultado);
		$email_banco=$user['email'];
		$usuario_banco=$user['usuario'];
		
		
		if($email==$email_banco || $usuario==$usuario_banco){
			echo "Usuario ja existente";
			echo "<br/><a href='../index.php'>Retornar à página de login</a>";
		}
		
		elseif(strlen($nome)<3){
			echo "Nome invalido!(min de 3 char)";
			echo "<br/><a href='../index.php'>Retornar à página de login</a>";
		}
		elseif(strlen($usuario)<3){
			echo "Por favor digite um usuario!(min de 3 char)";
			echo "<br/><a href='../index.php'>Retornar à página de login</a>";
		}
		elseif(strlen($senha)<8){
			echo "Senha invalida(min de 8 char)!";
			echo "<br/><a href='../index.php'>Retornar à página de login</a>";
		}
		elseif($senha != $senha){
			echo "senha devem ser iguais";
			echo "<br/><a href='../index.php'>Retornar à página de login</a>";
		}
		else{
			include "../database/conectaSQL.php";
                        mkdir('../user/'.$usuario,0777, true);
                        if(copy('../imagens/person.png','../user/'.$usuario.'/imgperfil.gif')){
                          $senha=md5($senha);
                            $sql = "INSERT INTO user(nome, usuario, senha, sexo, email, dataNascimento,imagem) VALUES('$nome', '$usuario','$senha', '$sexo', '$email','$dataNascimento','person.png')";
                            $resultado = mysqli_query($conexao, $sql);
                            if($resultado){
                                session_start();
                                $_SESSION['FEEGusuario']=$usuario;
                                header("Location:../index.php");
                            }  
                        }
			
		}
	?>
    </body>
</html>