<?php

	include("conexao.php");
	
	$aux = $_POST["id_cantor"];
	
	$nome = $_POST["nome_cantor"];
	$idade = $_POST["idade"];
	$ocupacao = $_POST["ocupacao"];
	$instrumento = $_POST["instrumentos"];
	$ext_vocal = $_POST["extensao_vocal"];
	
	$update = "UPDATE cantores SET nome_cantor = '$nome', idade = '$idade', ocupacao = '$ocupacao', instrumento = '$instrumento', ext_vocal = '$ext_vocal' WHERE id_cantor = $aux";
	
	if (mysqli_query($link,$update)){
		
		header("Location: listar_cantor.php");
		
	}else{
		
		Echo"Nao e possivel alterar essa informacao do BD.
		<br/><a href='listar_cantor.php'>Voltar</a>";
	}
	

?>