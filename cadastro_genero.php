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
	
		<form method = "post" action = "registra_genero.php">
		
			<h1> Cadastro genero </h1>
			
			<label> Nome: </label>
			<input type = "text" name = "nome_genero" /> 
			
			<br /><br />
			
			<label> Descricao </label>
			<input type = "text" name = "descricao" />
			
			<br /><br />	
			
		
			<input type = "submit"/>
			
		</form>
		
		</div>
		
	</body>
	
</html>