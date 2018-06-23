<html>

	<body background="">
	
		<div>

<?php
	include("cabecalho.php");
	
	include("conexao.php");
	
	$aux = $_GET["id"];
	
	$sql = "SELECT * FROM cantores WHERE id_cantor = $aux";
	
	$resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
	
	$linha = mysqli_fetch_array($resultado);
?>

		
		<form method = "post" action = "alterando_cantor.php">
		
			<h1> Alterar cantor </h1>
			
			<label> Nome: </label>
			<input type = "text" name = "nome_cantor" value = "<?= $linha["nome_cantor"]; ?>" /> 
			
			<br /><br />
			
			<label> Idade </label>
			<input type = "number" name = "idade" value = "<?= $linha["idade"]; ?>" />
			
			<br /><br />	
			
			<label> Ocupacao: </label>
			<input type = "text" name = "ocupacao" value = "<?= $linha["ocupacao"]; ?>" />
			
			<br /><br />
			
			<label> Instrumentos: </label>
			<input type = "text" name = "instrumentos" value = "<?= $linha["instrumento"]; ?>" />
			
			<br /><br />
			
			<label> Extensao vocal: </label>
			<input type = "text" name = "extensao_vocal" value = "<?= $linha["ext_vocal"]; ?>" />
			
			<br /><br />
		
			<input type = "hidden" name = "id_cantor" value = "<?= $aux; ?>"/>
			<input type = "submit" value = "Alterar" />
			
		</form>
		
		</div>
		
	</body>
	
</html>	