<?php

	include("conexao.php");
	
	$valor = $_GET["id_genero"];
	
	$nome = $_POST["nome_genero"];
	
	$descricao = $_POST["descricao"];
	
	$alterar ="UPDATE estado SET descricao = '$descricao', nome_genero = '$nome' WHERE id_genero = $valor";
	
	if(mysqli_query($link,$alterar) ){
		
		header("Location: listar_genero.php");
		
	}
	else{
		
		echo"
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
		
			<p>Não foi possivel realizar essa acao<br />
			<a href = 'listar_genero.php'>voltar</a>
			
		</div>
	</body>
	</html>";
	
	}

?>