<?php
	session_start();
	if($_SESSION['pergunta'] != "ok") {
		header("Location: ../index.html");
		die();	
	}
?>
