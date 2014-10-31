<html>
    <head>
        <meta charset="UTF-8">
        <title>Página de Cadastro</title>
    </head>
    
    <body>
        <p align="center"><big><big>
                <strong>Parte 2 de 2</strong></big></big>
        </p>
        
        <form method="POST" action="etapa3.php">
            <input type="hidden" name="nome" value="<?php echo $_POST['nome'];?>">
            <input type="hidden" name="email" value="<?php echo $_POST['email'];?>">
            <input type="hidden" name="datanascimento" value="<?php echo $_POST['datanascimento'];?>">
            <input type="hidden" name="sexo" value="<?php echo $_POST['sexo'];?>">
                   
            
            
            
        </form>    
    </body>
        
</html>
    