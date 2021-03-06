<!DOCTYPE html>
<html>
    <head>
        <title>FEEG - Home</title> 
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="js/bgchanger.js"></script> 
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
    </head>
    <body onload="startSlideShow()">
            <?php 
                include "database/conectaSQL.php";//incluindo o banco
                //session_start();
                if(isset($_SESSION['FEEGusuario'])){
                    $usuario = $_SESSION['FEEGusuario'];
                }
                
                include "database/read.php";
                $usuarioIMG="<img src='user/$usuario/imgperfil.gif' alt='profile pic' class='profilePic' />";
            ?>
            <header >
                <nav class="barra" >
                    <div id="centralizador">
                      <ul>
                            <li><img src="imagens/FeegLogo.png" alt="FEEG logo"/></li>
                            <!--<li id="user"><?php echo $usuario;?><img src='imagens/person.png' alt='profile pic' class='profilePic' id="ico"/></li>-->
                        </ul>   
                    </div>                         
                </nav>
            </header>
            
            <div class="container  hFixer">
                <aside>
                    <div class="profile">
                        <header>
                            <?php echo "$usuarioIMG"?>
                            <b><a><?php echo "$usuario"?> </a> </b>
                            <ul >
                                <li class="drop"><img src="imagens/config.png" alt="configuracoes" />
                                    <ul>
                                        <div class="setaUP"></div>
                                        <li><a href="sair.php">Desconectar</a></li>
                                        <li><a href="trocar.php">Trocar imagem</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </header>
                    </div>
                    <a  href="feegIT.php"><p class="feegIT" id="minor"></p></a>
                </aside>
                <section id="main">
                    <?php
                    //1. SQL da tabela timline que todos os posts
                     $sql = "SELECT * FROM timeline";
                     $resultado = mysqli_query($conexao, $sql);

                     //2. Mostrar Resultados por amigo
                     if($resultado){
                        while($timeline=mysqli_fetch_array($resultado)){
                            $img=$timeline['tlID'];
                            $username=$timeline['username'];
                            $title=$timeline['title'];
                            echo <<<POST
                            <article class='post'>
                                <header>
                                    <a><b>$username</b></a>
                                </header>
                                    <p>$title</p>
                                <p><img src='timeline/$img.gif'/></p>
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

