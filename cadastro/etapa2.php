<html>
    <head>
        <meta charset="UTF-8">
        <title>Página de Cadastro</title>
    </head>
    
    <body>
        <p align="center"><big><big>
                <strong>Parte 2 de 2</strong></big></big>
        </p>
        
        <form method="POST" action="cadastra.php">
            <input type="hidden" name="nome" value="<?php echo $_POST['nome'];?>">
            <input type="hidden" name="email" value="<?php echo $_POST['email'];?>">
            <input type="hidden" name="email2" value="<?php echo  $_POST['email2'];?>">
            <input type="hidden" name="datanascimento" value="<?php echo $_POST['datanascimento'];?>">
            <input type="hidden" name="sexo" value="<?php echo $_POST['sexo'];?>">
            <input type="hidden" name="telefone" value="<?php echo $_POST['telefone']; ?>">
            <input type="hidden" name="endereco" value="<?php echo $_POST['endereco']; ?>">       
            <input type="hidden" name="cidade" value="<?php echo $_POST['cidade']; ?>">
            <input type="hidden" name="estado" value="<?php echo $_POST['estado']; ?>">
            <input type="hidden" name="cep" value="<?php echo $_POST['cep']; ?>">
            
            
            <div align="center">
                <center>
                    <p>Nome de Usuario: <input type="text" name="usuario" size="20"></p>
                </center>
            </div>  
            
            <div align="center">
                <center>
                    <p>Senha: <input type="password" name="senha" size="20"></p>
                </center>
            </div>  
            
            <div align="center">
                <center>
                    <p>Confirme sua senha: <input type="password" name="senha2" size="20"></p>
                </center>
            </div>  
            
            <div align="center">
                <center>
			<p><input type="submit" value="Finalizar Cadastro" name="cadastra"></p> 
 		</center>
            </div> 
        </form>    
    </body>
        
</html>
    