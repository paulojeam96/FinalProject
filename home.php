<!DOCTYPE html>
<html>
    <head>
        <title>FEEG - Home</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
    </head>
	<body>
            <?php 
                include "database/conectaSQL.php";//incluindo o banco
                //session_start();
                if(isset($_SESSION['FEEGusuario'])){
                    $usuario = $_SESSION['FEEGusuario'];
                    echo $usuario;
                    session_destroy();
                }
                else{
                    echo "erro porra";
                }
            ?>
		<div id="main">
                    
		</div>
	</body>
</html>