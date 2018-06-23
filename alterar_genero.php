<?php

	include("conexao.php");
	
	$alterar ="SELECT * FROM genero WHERE id_genero = ".$_GET["id"];
	
	$resultado = mysqli_query($link,$alterar) or die(mysqli_error($link));
	
	$linha = mysqli_fetch_array($resultado);

?>
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
		<form method = "post" action = "alterando_genero.php">
		
			<h1> Alterando cadastro genero </h1>
			
			<label> Nome: </label>
			<input type = "text" name = "nome_genero" value ="<?= $linha["nome_genero"];?>" /> 
			
			<br /><br />
			
			<label> Descricao </label>
			<textarea name = "descricao" value ="<?= $linha["descricao"];?>"/>
			
			</textarea>
			
			<br /><br />	
			
		
			<input type = "submit"/>
			
		</form>
		</div>		
	</body>	
</html>