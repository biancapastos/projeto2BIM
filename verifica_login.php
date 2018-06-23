<?php
	session_start();
	include("conexao.php");
	
	$email = $_POST["email_usuario"];
	$senha = $_POST["senha_usuario"];
	
	$select = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha' ";
	$resultado = mysqli_query($link,$select) or die(mysqli_error($link));
	$linha = mysqli_fetch_array($resultado);
	
	if ($linha == null) {
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
	
			<h3>Email ou senha invalidos. <br /> Tente novamente</h3><a href = 'login.php'>Voltar</a>
			";
	} else {
		$_SESSION['id'] = $linha['id_usuario'];
		if ($linha['permissao'] == 'admin') {
			$_SESSION['permissao'] = 'admin';
			header("location: admin.php");
		} else {
			$_SESSION['permissao'] = 'cliente';
			header("location: index_playlist.php");
		}
	}
	
	echo "</div>
		
	</body>
</html>"

?>