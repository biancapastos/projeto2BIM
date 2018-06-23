<?php
	include("conexao.php");
	
	$valor = $_GET["id"];
	
	$delete = "DELETE FROM genero WHERE id_genero = $valor ";
	
	if(mysqli_query($link,$delete) ){
		
		header("Location: listar_genero.php");
		
	}
	else{
		
		echo"Não foi possivel realizar essa acao";
		echo"<a href = 'listar_genero.php'>voltar</a>";
	
	}
	
	
?>