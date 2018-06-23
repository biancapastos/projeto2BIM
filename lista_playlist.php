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
				
				margib: 0 auto;
				
			}
		
		</style>
	
	</head>
	
	<body>
	
	<div>

<?php

	include("cabecalho.php");
	include("conexao.php");
	
?>
	
	<h3>Cantores cadastrados</h3>
	
		<form method = 'post'  action = 'listar_musicas.php'>
			
			<label>Voce pode filtrar a busca por: </label>
			<input type = 'text' name = 'filtro' />
			
			<input type = 'submit' value = 'Filtrar' />
			
		</form>

<?php

	if(isset($_POST["filtro"])){
		
		$select = "SELECT * FROM musicas WHERE nome_cantor  ";
		
		//$resultado = mysqli_query($link,$select) or die(mysqli_error($link));
		
	}else{
		
		$select = "SELECT m.id_musica, m.nome_musica, m.ano_lanc, m.duracao, m.album, c.nome_cantor, g.nome_genero FROM musicas as m
					INNER JOIN cantores as c
					ON m.cantor = c.id_cantor
					INNER JOIN bandas as b
					ON m.cantor = b.id_banda
					INNER JOIN genero as g
					ON  m.genero = g.id_genero";
		
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
				<td>$linha[nome_genero]</td>
				<td><a href=alterar_musica.php?id=$linha[id_musica]>Alterar</a>&nbsp;|&nbsp;<a href=remove_musica.php?id=$linha[id_musica]>Remover</a></td>
			
			</tr>
		
		";
		
	}
	
	echo "</table>";

?>

	</div>
	
	</body>
	
</html>
