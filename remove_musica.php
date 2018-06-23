<?php

	include("conexao.php");
	
	$aux = $_GET["id"];
	
	$delete = "DELETE FROM musicas WHERE id_musica = $aux ";

	if (mysqli_query($link,$delete)){
		
		header("Location: listar_musicas.php");
		
	}else{
		
		Echo"Nao e possivel deletar essa informacao.
		<br/><a href='listar_musicas.php'>Voltar</a>";
	}
	
?>