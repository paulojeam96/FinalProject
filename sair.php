<?php
	session_start();
	session_destroy(); // encerra a sessão
	echo header("Location:index.php");
?>