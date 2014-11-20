<!DOCTYPE html>
<html>
    <head>
        <title>FEEG - Home</title> 
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/entrar.css">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
    </head>
	<body>
            <?php 
                include "database/conectaSQL.php";//incluindo o banco
                //session_start();
                if(isset($_SESSION['FEEGusuario'])){
                    $usuario = $_SESSION['FEEGusuario'];
                }
                
                $usuarioIMG="<img src='imagens/person.png' alt='profile pic'/>";
            ?>
		<div id="main">
                    <header >
                        <nav class="barra" >
                            <ul>
                                <img src="imagens/FeegLogo.png" alt="FEEG logo"/>
                                <div>
                                    <li><?php echo "$usuario"?></li>
                                    <li><?php echo "$usuarioIMG"?></li>
                                </div>
                            </ul>                            
                        </nav>
                    </header>
                    <aside>
                        <div class="profile">
                            <header>
                                <?php echo "$usuarioIMG"?>
                                <b><a><?php echo "$usuario"?> </a> </b>
                            </header>
                        </div>
                    </aside>
                    <section>
                        <?php
                        //1. SQL da tabela timline que todos os posts
                         $sql = "SELECT * FROM timeline";
                         $resultado = mysqli_query($conexao, $sql);

                         //2. Mostrar Resultados por amigo
                         if($resultado){
                            while($timeline=mysqli_fetch_array($resultado)){
                                $post=$timeline['conteudo'];
                                $username=$timeline['username'];
                                echo <<<POST
                                <article class='post'>
                                    <header>
                                        <p>$usuario</p>
                                        <p>$usuarioIMG</p>
                                    </header>
                                    <p>$post</p>
                                </article>
POST;
                            }
                         }

                         //3. Fechar conexão
                         mysqli_close($conexao);

                        ?>  
                    </section>
		</div>
	</body>
</html>