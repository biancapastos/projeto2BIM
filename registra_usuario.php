<?php

	include("conexao.php");
	
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	$sexo = $_POST["sexo"];
	$data_nasc = $_POST["data_nasc"];
	
	$insert = "INSERT INTO usuarios(nome, email, senha, sexo, data_nasc)
	VALUES('$nome', '$email', '$senha', '$sexo', '$data_nasc')";
	
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
	
			<h3>Cadastro realizado com sucesso.</h3></br /><a href = 'login.php'>Fazer Login</a>
			
		<div>
		
	</body>
</html>";

?>