<!DOCTYPE html>
<html>
<head>
	<title> Cadastro </title>
	<meta charset="UTF-8">
</head>	
</html>
<?php

	$id = $_POST["nome"]; // Suponha que id foi gerado aleatoriamente. Poderia ser um número.
        
        echo "Voce está cadastrado. Chame os seus amigos e ganhe pontos.";
	echo "Para isso, é só passar o link abaixo:";
	echo "http://www.supersite.com.br/index.php?id=". $id; 
?>