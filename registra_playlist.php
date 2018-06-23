<?php

	include("conexao.php");
	
	$nome = $_POST['nome_genero'];
	$descricao = $_POST['descricao'];
	
	$insert = "INSERT INTO genero(nome_genero, descricao)
	VALUES('$nome', '$descricao')";
	
	mysqli_query($link, $insert) or die(mysqli_error($link). ": ". $insert); 
	
	echo "
	
<html>	
	<head>
	
		<meta charset - 'UTF-8' />
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
	
	<body>
	
		<div>
	
			<h3>Cadastro realizado com sucesso.</h3></br /><a href = 'criar_playlist.php'>voltar</a>
			
		</div>
		
	</body>
</html>";

?>