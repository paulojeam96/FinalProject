<!DOCTYPE html>
<html>
    <head>
        <title>FEEG - Foto de Perfil</title>
        <meta charset="utf-8"/>
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/home.css">
    </head>

    <body>

        <div class="container" id="troca">
            <form action="troca2.php" enctype="multipart/form-data" method="POST">
                <input type="hidden" name="MAX_SIZE_FILE" value="100000"/>
                <p>Deseja trocar a Imagem?:<br/><div id="mandarA"><input id="mandar" name="arquivo" type="file"/></div></p>
                <p><input class="button" id="button" type="submit" value="FEEGIT"/></p>
            </form>
    </div>
    </body>
</html>