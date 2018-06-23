<?php
	include("cabecalho.php");
	
	include("conexao.php");
	
	$aux = $_GET["id"];
	
	$sql = "SELECT * FROM musicas WHERE id_musica = $aux";
	
	$resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
	
	$linha = mysqli_fetch_array($resultado);
?>

<html>

	<body background="">
	
		<div>
	
		<form method = "post" action = "alterando_musica.php">
		
			<h1> Cadastro musica </h1>
			
			<label> Nome: </label>
			<input type = "text" name = "nome_musica" value = "<?= $linha["nome_musica"] ?>" /> 
			
			<br /><br />
			
			<label> Ano de lancamento </label>
			<input type = "number" name = "ano_lanc" value = "<?= $linha["ano_lanc"] ?>" />
			
			<br /><br />	
			
			<label> Duracao: </label>
			<input type = "number" name = "duracao" value = "<?= $linha["duracao"] ?>" />
			
			<br /><br />
			
			<label> Album: </label>
			<input type = "text" name = "album" value = "<?= $linha["album"] ?>" />
			
			<br /><br />
			
			<label> Cantores Cadastrados: </label>
			<select name = "cantor">
			
				<option>::SELECIONE::</option>
				
				<optgroup label = "Cantores">
				
<?php
			$select = "SELECT nome_cantor FROM cantores";	
			$resultado = mysqli_query($link,$select) or die(mysqli_error($link));
			
			while($linha = mysqli_fetch_array($resultado)){
?>
				<option value = "<?= $linha['id_cantor']?>"  > <?= $linha["nome_cantor"]; ?> </option>
<?php
			}
?>
				</optgroup>
				
				<optgroup label = "Bandas">
				
<?php
			$select = "SELECT id_banda, nome_banda FROM bandas";	
			$resultado = mysqli_query($link,$select) or die(mysqli_error($link));
			
			while($linha = mysqli_fetch_array($resultado)){
?>
				
				<option value = "<?= $linha['id_banda']?>"  > <?= $linha["nome_banda"]; ?> </option>
				
<?php
			}
?>
				
				</optgroup>
			
			</select>
			
			<br /><br />
			
			<label> Generos Cadastrados: </label>
			<select name = "genero">
			
				<option>::SELECIONE::</option>
				
<?php
			$select = "SELECT id_genero, nome_genero FROM genero";
			
			$resultado = mysqli_query($link,$select) or die(mysqli_error($link));
			
			while($linha = mysqli_fetch_array($resultado)){
				
?>
			
				<option value = "<?= $linha['id_genero']?>"  > <?= $linha["nome_genero"]; ?> </option>
				
<?php
			}
?>
				
			</select>
			
			<br /><br />
		
			<input type = "hidden" name = "id_musica" value = "<?= $aux; ?>"/>
			<input type = "submit" value = "Alterar" />
			
		</form>
		
		</div>
		
	</body>
	
</html>