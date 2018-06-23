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
				padding: 20px;
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

<?php

	include("cabecalho.php");
	
	if(isset($_SESSION["permissao"])){
		echo "<br />";
		echo "<p> <b>Seja Bem-vindo Admin!</b> <br /> Navegue pelo cabecalho.</p>";
	}
	else{
		echo "<br /> Voce ainda não está logado. <a href = 'login.php'>Fazer Login</a>";
	}
?>

		</div>

	</body>

</html>