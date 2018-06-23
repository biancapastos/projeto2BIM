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
	
	if(!isset($_SESSION["permissao"])){
		echo "<br /> Voce ainda não está logado. <a href = 'login.php'>Fazer Login</a>";
	}
	else{

?>
		
			<table border = "1">
			
				<tr>
				
					<th>Nome</th>
					<th>Cantor/Banda</th>
					<th>Gênero</th>
					<th>Inserir</th>
				
				</tr>

<?php
				$select = "SELECT * FROM musicas";
				$resultado = mysqli_query($link,$select) or die(mysqli_error($link));
				
				while($linha = mysqli_fetch_array($resultado)){
?>				
				
				<tr>
				
					<td><?= $linha["nome_musica"] ?></td>
					<td><?= $linha["cantor"] ?></td>
					<td><?= $linha["genero"]?></td>
					<td>
						<input type = "checkbox" name = "inserir" value = "<?= $linha["id_musica"] ?>" />
					</td>
				
				</tr>
			
			

<?php
	}
	}
?>
			</table>
		</div>
	
	</body>

</html>