<!DOCTYPE html>
<html>
     <head>
	     <title>Feeg - Entrar</title>
		 <meta charset="utf-8"/>
         <link rel="stylesheet" type="text/css" href="css/style.css"/>
         <link rel="stylesheet" type="text/css" href="css/entrar.css">
          <script src="js/bgchanger.js"></script> 
	 </head>

	 <body onload="startSlideShow()">
         <header >
             <nav class="barra" >
                 <form action="login.php" class="container" method="POST">
                     <ul>
                         <img src="imagens/FeegLogo.png" alt="FEEG logo"/>
                         <div>
                             <li>Usuário:<br/><input name="usuario" type="text"  required/></li>
                             <li>Senha:<br/><input name="senha" type="password" required/> </li>
                             <li><input type="submit" value="Entrar" class="button"></li>
                             <br/><li><input type="checkbox" name="salvar"/> Deseja salvar os seus dados? </li>
                             
                            
                         </div>
                     </ul>
                 </form>
             </nav>
         </header>
         <div class="container">
             <form class="formcad" action="cadastro/cadastra.php" method="POST">
                <p><input name="nome" placeholder="Digite seu nome" type="text" size="45"  required/></p>
                <p> <input name="usuario" placeholder="Digite seu nome de usuario" type="text" size="45" required/></p>
                <p><input name="senha" placeholder="Senha" type="password" size="45" required/></p>
                <p><input name="senha2" placeholder="confirme a senha" type="password" size="45" required/></p>
                <p><input name="email" placeholder="Insira o e-mail" type="email" size="45" required/></p>
                <p>Data de Nascimento:<br/><input type="date" name="dataNascimento"/> </p>
                <p>Gênero:<br/>
                    <input name="sexo" type="radio" value="Masculino"/>Masculino
                    <input name="sexo" type="radio" value="Feminino" checked/>Feminino
                </p>
                 
                <p class="feegIT"><input type="submit" value="Cadastrar-se no FEEG" class="button"/></p>
             </form>
         </div>
    </body>
</html>