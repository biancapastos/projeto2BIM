<?php

	include("conexao.php");
	
	$aux = $_POST["id_musica"];
	
	$nome = $_POST["nome_musica"];
	$ano_lanc = $_POST["ano_lanc"];
	$duracao = $_POST["duracao"];
	$album = $_POST["album"];
	$cantor = $_POST["cantor"];
	$genero = $_POST["genero"];
	
	$update = "UPDATE musicas SET nome_musica = '$nome', ano_lanc = '$ano_lanc', duracao = '$duracao', album = '$album', cantor = '$cantor', genero = '$genero' WHERE id_musica = $aux";
	
	if (mysqli_query($link,$update)){
		
		header("Location: listar_musicas.php");
		
	}else{
		
		Echo"Nao e possivel alterar essa informacao do BD.
		<br/><a href='listar_musicas.php'>Voltar</a>";
	}
	

?>