<?php

$resposta = $_POST['resposta'];

if($resposta == "Foz" || $resposta == "FOZ" || $resposta == "foz" || $resposta == "Foz." || $resposta == "foz." || $resposta == "FOZ.") {
	session_start();
	$_SESSION['resposta'] = "ok";

	header("Location: principal/index.php");
	die();
}else{
	header("Location: index.html");
	die();
}
?>
