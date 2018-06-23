<?php

	include("conexao.php");
	
	$aux = $_GET["id"];
	
	$delete = "DELETE FROM bandas WHERE id_banda = $aux ";

	if (mysqli_query($link,$delete)){
		
		header("Location: listar_cantor_banda.php");
		
	}else{
		
		Echo"Nao e possivel deletar essa informacao.
		<br/><a href='listar_cantor_banda.php'>Voltar</a>";
	}
	
?>