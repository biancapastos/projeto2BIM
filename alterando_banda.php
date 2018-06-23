<?php

	include("conexao.php");
	
	$aux = $_POST["id_banda"];	
	$nome = $_POST["nome_banda"];
	$instrumento = $_POST["instrumentos_banda"];
	
	$update = "UPDATE bandas SET nome_banda = '$nome',instrumentos_banda = '$instrumento' WHERE id_banda = $aux";
	
	if (mysqli_query($link,$update)){
		
		header("Location: listar_cantor_banda.php");
		
	}else{
		
		Echo"Nao e possivel alterar essa informacao do BD.
		<br/><a href='listar_cantor_banda.php'>Voltar</a>";
	}
	

?>