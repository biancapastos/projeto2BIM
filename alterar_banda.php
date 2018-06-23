<?php
	include("cabecalho.php");
	
	include("conexao.php");
	
	$aux = $_GET["id"];
	
	$sql = "SELECT * FROM bandas WHERE id_banda = $aux";
	
	$resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
	
	$linha = mysqli_fetch_array($resultado);
?>
<html>
	</body>
		<div>
		
		<form method = "post" action = "alterando_banda.php">
		
			<h1> Alterar Banda </h1>
			
			<label> Nome: </label>
			<input type = "text" name = "nome_banda" value = "<?= $linha["nome_banda"]; ?>" /> 
			
			<br /><br />
			
			<label> Instrumentos: </label>
			<input type = "text" name = "instrumentos_banda" value = "<?= $linha["instrumentos_banda"]; ?>" />
			
			<br /><br />
			
			<input type = "hidden" name = "id_banda" value = "<?= $aux; ?>"/>
			<input type = "submit" value = "Alterar" />
			
		</form>
		
		</div>	
	</body>		
</html>			