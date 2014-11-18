<?php
    session_start();
	if (isset($_COOKIE['FEEGusuario']) )
	{
        $usuario =$_COOKIE['FEEGusuario'];
        if(isset($_COOKIE['FEEGsenha'])){
            $senha=$_COOKIE['FEEGsenha'];
            echo header("Location:home.php");
        }

    }
    elseif(isset($_SESSION['FEEGusuario'])){
        $usuario=$_SESSION['FEEGusuario'];
        include "home.php";
    }
    else {
        include "entrar.php";
    }
?>