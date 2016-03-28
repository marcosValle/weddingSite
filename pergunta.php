<?php

$resposta = $_POST['resposta'];

if($resposta == "xxx" || $resposta == "xxx" || $resposta == "xxx" || $resposta == "xxx" || $resposta == "xxx" || $resposta == "xxx") {
	session_start();
	$_SESSION['resposta'] = "ok";

	header("Location: principal/index.php");
	die();
}else{
	header("Location: index.html");
	die();
}
?>
