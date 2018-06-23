<html>

	<head>
	
		<meta charset - "UTF-8" />
		<title>Formulario Login</title>
		
		<style>
		
			body{
				
				background-color: #b83dba;
				
			}	
			div{
				
				background-color: #fff;
				margin: 100px auto;
				border: 2px black solid;
				width: 70%;
				padding: 10px;
				text-align: center;
				
			}
			input{
				
				margin: 3px;
				
			}
			input[type = submit]{
				
				padding: 4px;
				width: 12%;
				border-radius: 5px;
				
			}
			select{
				
				margin: 6px;
				
			}
		
		</style>
	
	</head>

	<body background="">
	
		<div>
		
<?php
	include("cabecalho.php");
	include("conexao.php");
?>
	
		<form method = "post" action = "registra_musicas.php">
		
			<h1> Cadastro musica </h1>
			
			<label> Nome: </label>
			<input type = "text" name = "nome_musica" /> 
			
			<br /><br />
			
			<label> Ano de lancamento </label>
			<input type = "number" name = "ano_lanc" />
			
			<br /><br />	
			
			<label> Duracao: </label>
			<input type = "number" name = "duracao"/>
			
			<br /><br />
			
			<label> Album: </label>
			<input type = "text" name = "album"/>
			
			<br /><br />		
			
			<label> Cantores Cadastrados: </label>
			<select name = "cantor">
			
				<option>::SELECIONE::</option>
				
<?php
			$select = "SELECT * FROM cantores";	
			$resultado = mysqli_query($link,$select) or die(mysqli_error($link));
			
			while($linha = mysqli_fetch_array($resultado)){
?>
				<option value = "<?= $linha['id_cantor'];?> "> <?= $linha["nome_cantor"]; ?> </option>
<?php
			}
?>
			</select>
			
			<br /><br />
				
			<label> Bandas Cadastradas: </label>
			<select name = "banda">
			
				<option>::SELECIONE::</option>
				
<?php
			$select = "SELECT * FROM bandas";	
			$resultado = mysqli_query($link,$select) or die(mysqli_error($link));
			
			while($linha = mysqli_fetch_array($resultado)){
?>
				
				<option value = "<?= $linha['id_banda']?>"  > <?= $linha["nome_banda"]; ?> </option>
				
<?php
			}
?>
			
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
		
			<input type = "submit"/>
			
		</form>
		
		</div>
		
	</body>
	
</html>