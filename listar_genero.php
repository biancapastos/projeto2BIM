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
		<form method = 'post'  action = 'listar_genero.php'>
			
			<label>Digite uma letra para filtrar a busca pelo nome: </label>
			<input type = 'text' name = 'filtro' />
			
			<input type = 'submit' value = 'Filtrar' />
			
		</form>

		<form method = 'post' name= "ordenar" action = 'listar_genero.php'>
			
			<select name = "ordenacao_genero" onchange = "document.ordenar.submit()">
			
				<option>::Ordenar por::</option>
				<option value = "id_a_z" >ID (A-Z)</option>
				<option value = "id_z_a" >ID (Z-A)</option>
				<option value = "nome_e_a_z" >Nome Genero (A-Z)</option>
				<option value = "nome_e_z_a" >Nome Genero (Z-A)</option>
			
			<select/>
			
		</form>

<?php

	if(isset($_POST["filtro"])){
		
		$select = "SELECT * FROM genero WHERE nome_genero LIKE '$_POST[filtro]%' ";
		
		$resultado = mysqli_query($link,$select) or die(mysqli_error($link));
		
	}else{
		
		$select = "SELECT * FROM genero ";
		
	}
	
	if(isset($_POST["ordenacao_genero"]) || isset($_SESSION["ordenacao_genero"])){
		
		if(isset($_POST["ordenacao_genero"])){
			
			$_SESSION["ordenacao_genero"] = $_POST["ordenacao_genero"];
			
		}
		
		switch($_SESSION["ordenacao_genero"]){
			
			case"id_a_z";
				$select .="ORDER BY id_genero";
				break;
				
			case"id_z_a";
				$select .="ORDER BY id_genero DESC";
				break;
				
			case"nome_a_z";
				$select .="ORDER BY nome_genero";
				break;
			case"nome_z_a";
				$select .="ORDER BY nome_genero DESC";
				break;	
		
		}
		
		
	}
	
	$resultado = mysqli_query($link,$select) or die(mysqli_error($link));

	echo "
	
		<table border = '1'>
		
			<tr>
			
				<th>Id_genero</th>
				<th>Nome</th>
				<th>Descricao</th>
				<th>Acao</th>
			
			</tr>
		
	";
	
	while($linha = mysqli_fetch_array($resultado)){
		
		echo "
		
			<tr>
			
				<td>$linha[id_genero]</td>
				<td>$linha[nome_genero]</td>
				<td>$linha[descricao]</td>
				<td><a href=alterar_genero.php?id=$linha[id_genero]>Alterar</a>&nbsp;|&nbsp;<a href=remover_genero.php?id=$linha[id_genero]>Remover</a></td>
			
			</tr>
		
		";
		
	}
	
	echo "</table>
	
	</div>
	
	</body>
	
</html>";

?>
