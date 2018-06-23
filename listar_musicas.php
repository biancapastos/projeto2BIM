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
			table{
				
				margin: 0 auto;
				
			}
		
		</style>
	
	</head>
	
	<body>
	
	<div>

<?php

	include("cabecalho.php");

	include("conexao.php");
	
?>

		<br />
		<form method = 'post'  action = 'listar_musicas.php'>
			
			<label>Digite uma letra para filtrar a busca pelo nome: </label>
			<input type = 'text' name = 'filtro' />
			
			<input type = 'submit' value = 'Filtrar' />
			
		</form>

		<form method = 'post' name= "ordenar" action = 'listar_musicas.php'>
			
			<select name = "ordenacao_musicas" onchange = "document.ordenar.submit()">
			
				<option>::Ordenar por::</option>
				<option value = "id_a_z" >ID (A-Z)</option>
				<option value = "id_z_a" >ID (Z-A)</option>
				<option value = "nome_e_a_z" >Nome Musica (A-Z)</option>
				<option value = "nome_e_z_a" >Nome Musica (Z-A)</option>
			
			<select/>
			
		</form>

<?php

	if(isset($_POST["filtro"])){
		
		$select = "SELECT * FROM musicas WHERE nome_musica LIKE '$_POST[filtro]%' ";
		
		$resultado = mysqli_query($link,$select) or die(mysqli_error($link));
		
	}else{
		
		$select = "SELECT * FROM musicas ";
		
	}
	
	if(isset($_POST["ordenacao_musicas"]) || isset($_SESSION["ordenacao_musicas"])){
		
		if(isset($_POST["ordenacao_musicas"])){
			
			$_SESSION["ordenacao_musicas"] = $_POST["ordenacao_musicas"];
			
		}
		
		switch($_SESSION["ordenacao_musicas"]){
			
			case"id_a_z";
				$select .="ORDER BY id_musica";
				break;
				
			case"id_z_a";
				$select .="ORDER BY id_musica DESC";
				break;
				
			case"nome_a_z";
				$select .="ORDER BY nome_musica";
				break;
			case"nome_z_a";
				$select .="ORDER BY nome_musica DESC";
				break;	
		
		}
		
		
	}
	$resultado = mysqli_query($link,$select) or die(mysqli_error($link));


	echo "
	
		<table border = '1'>
		
			<tr>
			
				<th>id_musica</th>
				<th>Nome</th>
				<th>ano_lanc</th>
				<th>duracao</th>
				<th>album</th>
				<th>cantor</th>
				<th>genero</th>
				<th>Acao</th>
			
			</tr>
		
	";
	
	while($linha = mysqli_fetch_array($resultado)){
		
		echo "
		
			<tr>
			
				<td>$linha[id_musica]</td>
				<td>$linha[nome_musica]</td>
				<td>$linha[ano_lanc]</td>
				<td>$linha[duracao]</td>
				<td>$linha[album]</td>
				<td>$linha[cantor]</td>
				<td>$linha[genero]</td>
				<td><a href=alterar_musica.php?id=$linha[id_musica]>Alterar</a>&nbsp;|&nbsp;<a href=remove_musica.php?id=$linha[id_musica]>Remover</a></td>
			
			</tr>
		
		";
		
	}
	
	echo "</table>";

?>

	</div>
	
	</body>
	
</html>
