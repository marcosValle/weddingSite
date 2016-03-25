<?php
	session_start();
	if($_SESSION['resposta'] != "ok") {
		header("Location: ../index.html");
		die();	
	}
?>
