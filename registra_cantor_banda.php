

<?php

	include("conexao.php");
		
	if(isset($_POST["nome_cantor"])){
				
			$nome = $_POST['nome_cantor'];
			$idade = $_POST['idade'];
			$ocupacao = $_POST['ocupacao'];
			$instrumentos = $_POST['instrumentos'];
			$extensao = $_POST['extensao_vocal'];
			
			$insert = "INSERT INTO cantores(nome_cantor, idade, ocupacao, instrumento, ext_vocal)
			VALUES('$nome', '$idade', '$ocupacao', '$instrumentos', '$extensao')";
			
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
	
			<h3>Cadastro realizado com sucesso.</h3></br /><a href = 'cadastro_cantor_banda.php'>voltar</a>
			
		</div>
		
	</body>
</html>";
	}
	else if(isset($_POST["nome_banda"])){
			
			$nome = $_POST['nome_banda'];
			$instrumentos = $_POST['instrumentos'];
			
			$insert = "INSERT INTO bandas(nome_banda,instrumentos_banda)
			VALUES('$nome','$instrumentos')";
			
			mysqli_query($link, $insert) or die(mysqli_error($link). ": ". $insert); 
			
			echo "
	
<html>	
	<head>
	
		<meta charset - 'UTF-8' />
		<title>Formulario Login</title>
		
		<style>
		
			div{
				
				background-color: #fff;
				margin: 80px auto;
				border: 2px black solid;
				width: 45%;
				padding: 6px;
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
	
			<h3>Cadastro realizado com sucesso.</h3></br /><a href = 'cadastro_cantor_banda.php'>voltar</a>
			
		</div>
		
	</body>
</html>";
	}	
?>