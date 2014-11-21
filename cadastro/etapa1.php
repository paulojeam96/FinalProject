<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Página de Cadastro</title>
        <link rel="stylesheet" type="text/css" href="../css/cadastroCSS.css"/>
    </head>
    
    <body>
        
        <form action="cadastra.php" method="post">
            <fieldset>
                <fieldset class="grupo">
                    <div class="campo">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" style="width: 10em" value="" />
                    </div>
                    <div class="campo">
                        <label for="email">E-mail</label>
                        <input type="text" id="email" name="email" style="width: 10em" value="" />
                    </div>
                </fieldset>
                <div class="campo">
                    <label>Sexo</label>
                    <label>
                        <input type="radio" name="sexo" value="masculino"> Masculino
                    </label>
                    <label>
                        <input type="radio" name="sexo" value="feminino"> Feminino
                    </label>
                </div>
                
                <div class="campo">
                    <label for="telefone">Telefone</label>
                    <input type="text" id="telefone" name="telefone" style="width: 10em"  value="" />
                </div>

                <fieldset class="grupo">
                    <div class="campo">
                        <label for="cidade">Cidade</label>
                        <input type="text" id="cidade" name="cidade" style="width: 10em" value="" />
                    </div>
                    <div class="campo">
                        <label for="estado">Estado</label>
                        <input type="text" id="estado" name="estado" style="width: 2em" value="" />
                    </div>
                </fieldset>

                <div class="campo">
                    <label for="usuario">Usuario</label>
                    <input type="text" id="usuario" name="usuario" style="width: 10em" value=""/>               
                </div>

                <div class="campo">
                    <label for="senha">Senha</label>
                    <label>
                        <input type="text" id="senha" name="senha" style="width: 10em" value=""/>
                    </label>
                </div>
                
                 <div class="campo">
                    <label for="senha2">Confirme sua Senha</label>
                    <label>
                        <input type="text" id="senha2" name="senha2" style="width: 10em" value=""/>
                    </label>
                </div>

                <button type="submit" name="submit">Enviar</button>

            </fieldset>
        </form>
    </body>
</html>

