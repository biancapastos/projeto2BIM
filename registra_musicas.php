<?php

	include("conexao.php");
	
	$nome = $_POST['nome_musica'];
	$ano_lanc = $_POST['ano_lanc'];
	$duracao = $_POST['duracao'];
	$album = $_POST['album'];
	$genero = $_POST['genero'];
	
	if(isset($_POST["cantor"])){
		$aux = $_POST['cantor'];
		
		/*$select = "SELECT * FROM cantores WHERE id_cantor = $aux";
		$resultado = mysqli_query($link,$select) or die(mysqli_error($link));
		$linha = mysqli_fetch_array($resultado);
		$cantor = $linha["nome_cantor"];*/
	}
	if(isset($_POST["banda"])){
		$aux = $_POST['banda'];
		
		/*$select = "SELECT * FROM bandas WHERE id_banda = $aux";
		$resultado = mysqli_query($link,$select) or die(mysqli_error($link));
		$linha = mysqli_fetch_array($resultado);
		$cantor = $linha["nome_banda"];*/
	}
	
	
	
	$insert = "INSERT INTO musicas(nome_musica, ano_lanc, duracao, album, cantor, genero)
	VALUES('$nome', '$ano_lanc', '$duracao', '$album', '$cantor', '$genero')";
	
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
	
			<h3>Cadastro realizado com sucesso.</h3></br /><a href = 'cadastro_musica.php'>voltar</a>
			
		</div>
		
	</body>
</html>";

?>