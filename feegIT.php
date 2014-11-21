<!DOCTYPE html>
<html>
    <head>
        <title>FEEG IT</title>
        <meta charset="utf-8"/>
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/home.css">
    </head>

    <body>

        <div class="container" id="meio">
        <form action="upload.php" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="MAX_SIZE_FILE" value="100000"/>
            <p><div id="mandarA"><input id="mandar" name="arquivo" type="file"/></div></p>
            <p>Titulo:<input  name="title" type="text" required/></p>
            <p id="cadButton"><input class="button" id="button" type="submit" value="FEEGIT"/></p>
             <br/>
             <br/>
        </form>
    </div>
    </body>
</html>