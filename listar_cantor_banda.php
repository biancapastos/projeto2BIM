	<html>
	
	<head>
	
		<meta charset = "UTF-8" />
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
		<form method = 'post' name='tipo'  action = 'listar_cantor_banda.php'>
			
			<h3> O que voce quer filtrar por? </h3>
			
				<input type = "radio" name = "cantor_banda" value = "cantor"  onchange = 'document.tipo.submit()'/> Cantor
				<input type = "radio" name = "cantor_banda" value = "banda"  onchange = 'document.tipo.submit()'/> 	Banda	
	
	</form>
	
<?php
	
	if(!empty($_POST["cantor_banda"])){
?>
	
	
	<br />
	
		<form method = 'post'  action = 'listar_cantor_banda.php'>
		
			
			<label>Digite uma letra para filtrar a busca pelo nome: </label>
			<input type = 'text' name = 'filtro' />
			
			<input type = 'submit' value = 'Filtrar' />
			
		</form>

		<form method = 'post' name= "ordenar" action = 'listar_cantor_banda.php'>
			
			<select name = "ordenacao_cantor" onchange = "document.ordenar.submit()">
			
				<option>::Ordenar por::</option>
				<option value = "id_a_z" >ID (A-Z)</option>
				<option value = "id_z_a" >ID (Z-A)</option>
				<option value = "nome_e_a_z" >Nome Cantor (A-Z)</option>
				<option value = "nome_e_z_a" >Nome Cantor (Z-A)</option>
			
			<select/>
			
		</form>
	
<?php
	
		
	if(isset($_POST["filtro"])){
		
		$select = "SELECT * FROM cantores WHERE nome_cantor LIKE '$_POST[filtro]%' ";
		
		$resultado = mysqli_query($link,$select) or die(mysqli_error($link));
		
	}else{
		
		$select = "SELECT * FROM cantores ";
		
	}
	
	if(isset($_POST["ordenacao_cantor"]) || isset($_SESSION["ordenacao_cantor"])){
		
		if(isset($_POST["ordenacao_cantor"])){
			
			$_SESSION["ordenacao_cantor"] = $_POST["ordenacao_cantor"];
			
		}
		
		switch($_SESSION["ordenacao_cantor"]){
			
			case"id_a_z";
				$select .="ORDER BY id_cantor";
				break;
				
			case"id_z_a";
				$select .="ORDER BY id_cantor DESC";
				break;
				
			case"nome_a_z";
				$select .="ORDER BY nome_cantor";
				break;
			case"nome_z_a";
				$select .="ORDER BY nome_cantor DESC";
				break;	
		
		}
		
		
	}

		$resultado = mysqli_query($link,$select) or die(mysqli_error($link));
				
			echo "
	
		<table border = '1'>
		
			<tr>
			
				<th>Id_cantor</th>
				<th>Nome</th>
				<th>Idade</th>
				<th>Ocupacao</th>
				<th>Instrumentos</th>
				<th>Extensao vocal</th>
				<th>Acao</th>
			
			</tr>
		
	";
	
	while($linha = mysqli_fetch_array($resultado)){
		
		echo "
		
			<tr>
			
				<td>$linha[id_cantor]</td>
				<td>$linha[nome_cantor]</td>
				<td>$linha[idade]</td>
				<td>$linha[ocupacao]</td>
				<td>$linha[instrumento]</td>
				<td>$linha[ext_vocal]</td>
				<td><a href=alterar_cantor.php?id=$linha[id_cantor]>Alterar</a>&nbsp;|&nbsp;<a href=remove_cantor.php?id=$linha[id_cantor]>Remover</a></td>
			
			</tr>
		
		";
		
	}
	
		echo "</table>";
	
	
	if($_POST["cantor_banda"] == "banda"){
		
?>

	<br />
		<form method = 'post'  action = 'listar_cantor_banda.php'>
			
			<label>Digite uma letra para filtrar a busca pelo nome: </label>
			<input type = 'text' name = 'filtro' />
			
			<input type = 'submit' value = 'Filtrar' />
			
		</form>

		<form method = 'post' name= "ordenar" action = 'listar_cantor_banda.php'>
			
			<select name = "ordenacao_banda" onchange = "document.ordenar.submit()">
			
				<option>::Ordenar por::</option>
				<option value = "id_a_z" >ID (A-Z)</option>
				<option value = "id_z_a" >ID (Z-A)</option>
				<option value = "nome_e_a_z" >Nome Banda (A-Z)</option>
				<option value = "nome_e_z_a" >Nome Banda (Z-A)</option>
			
			<select/>
			
		</form>

<?php
			
		if(isset($_POST["filtro"])){
		
		$select = "SELECT * FROM bandas WHERE nome_banda LIKE '$_POST[filtro]%' ";
		
		$resultado = mysqli_query($link,$select) or die(mysqli_error($link));
		
	}else{
		
		$select = "SELECT * FROM bandas ";
		
	}
	
	if(isset($_POST["ordenacao_banda"]) || isset($_SESSION["ordenacao_banda"])){
		
		if(isset($_POST["ordenacao_banda"])){
			
			$_SESSION["ordenacao_banda"] = $_POST["ordenacao_banda"];
			
		}
		
		switch($_SESSION["ordenacao_banda"]){
			
			case"id_a_z";
				$select .="ORDER BY id_banda";
				break;
				
			case"id_z_a";
				$select .="ORDER BY id_banda DESC";
				break;
				
			case"nome_a_z";
				$select .="ORDER BY nome_banda";
				break;
			case"nome_z_a";
				$select .="ORDER BY nome_bandaDESC";
				break;	
		
		}
		
		
	}

		$resultado = mysqli_query($link,$select) or die(mysqli_error($link));
			echo "
	
		<table border = '1'>
		
			<tr>
			
				<th>Id_banda</th>
				<th>Nome</th>
				<th>Instrumentos</th>
				<th>Acao</th>
			
			</tr>
		
	";
	
	while($linha = mysqli_fetch_array($resultado)){
		
		echo "
		
			<tr>
			
				<td>$linha[id_banda]</td>
				<td>$linha[nome_banda]</td>
				<td>$linha[instrumentos_banda]</td>
				<td><a href=alterar_banda.php?id=$linha[id_banda]>Alterar</a>&nbsp;|&nbsp;<a href=remove_banda.php?id=$linha[id_banda]>Remover</a></td>
			
			</tr>
		
		";
		
	}
				
	}

	}	
?>
	</div>
</body>

</html>