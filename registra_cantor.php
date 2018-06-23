<?php

	include("conexao.php");
	
	$nome = $_POST['nome_cantor'];
	$idade = $_POST['idade'];
	$ocupacao = $_POST['ocupacao'];
	$instrumentos = $_POST['instrumentos'];
	$extensao = $_POST['extensao_vocal'];
	
	$insert = "INSERT INTO cantores(nome_cantor, idade, ocupacao, instrumento, ext_vocal)
	VALUES('$nome', '$idade', '$ocupacao', '$instrumentos', '$extensao')";
	
	mysqli_query($link, $insert) or die(mysqli_error($link). ": ". $insert); 
	
	echo "Cadastro realizado com sucesso.<a href = 'cadastro_cantor.php'>voltar</a>";

?>