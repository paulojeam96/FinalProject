<?php
    $usuario = $_POST['usuario'];
    $entrar = $_POST['entrar'];
    $senha = ($_POST['senha']);
    $bd="usuario";
    $connect = mysqli_connect("localhost","root","", $bd);
   
    if($login == null ){
        echo "O campo login não pode ficar em branco!";
        header("Location:login.html"); exit;
    }
    if($senha == null){
        echo "O campo senha não pode ficar em branco!";
        header("Location:login.html"); exit;
    }
    
    
   include "../database/conectaSQL.php";
   $found = false;
   
   $resultado = mysqli_query($conexao, "SELECT * from usuario WHERE nome='$login' AND senha='$senha'") or die("Não foi possível executar a SQL: ".mysqli_error($conexao));
   if($resultado){ 	 
        $encontrou = true;
        header("Location : index.php");
    }

     
    if(!$encontrou){
        echo "Erro no login!";
        header("Location : login.html");
    }
        // fechamento da conexão   
        mysqli_close($conexao);
?>