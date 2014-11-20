<!DOCTYPE html>
<html>
     <head>
	     <title>Feeg - Entrar</title>
		 <meta charset="utf-8"/>
         <link rel="stylesheet" type="text/css" href="css/style.css"/>
         <link rel="stylesheet" type="text/css" href="css/entrar.css">
         <script type="text/javascript">
           var imageCount = 0;
           var currentImage = 0;
           var images = new Array();

           images[0] = 'imagens/bg1.jpg';
           images[1] = 'imagens/bg2.jpeg';
           images[2] = 'imagens/bg3.jpg';
           images[3] = 'imagens/bg4.jpg';
           images[4] = 'imagens/bg5.jpg';

           var preLoadImages = new Array();
           for (var i = 0; i < images.length; i++)
           {
              if (images[i] === "")
              break;

              preLoadImages[i] = new Image();
              preLoadImages[i].src = images[i];
              imageCount++;
           }

           function startSlideShow()
           {
              if (document.body && imageCount > 0)
              {
              document.body.style.backgroundImage = "url("+images[currentImage]+")";    
              document.body.style.backgroundAttachment = "fixed";
              document.body.style.backgroundRepeat = "repeat";
              document.body.style.backgroundPosition = "left top";

              currentImage = currentImage + 1;
              if (currentImage > (imageCount-1))
              { 
              currentImage = 0;
              }
              setTimeout('startSlideShow()', 5000);
              }
           }
           
  </script>
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
                 
                <p id="cadButton"><input type="submit" value="Cadastrar-se no FEEG" class="button"/></p>
             </form>
         </div>
    </body>
</html>