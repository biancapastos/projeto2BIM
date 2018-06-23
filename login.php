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
				width: 45%;
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
		
			<p>
				<h3>Bem vindo ao site onde voce pode criar sua propria playlist online!!!!</h3>
			</p>
		
			<form method = "post" action = "verifica_login.php">
			
				<label>E-mail: </label>
				<input type = "email" name = "email_usuario" />
				
				<br />
				
				<label>Senha: </label>
				<input  type = "password" name = "senha_usuario" />
				
				<br />

				<input type = "submit" value = "Entrar" />
				
				<br />
				
				Ainda nao eh cliente cadastrado?
				<a href = "cadastro_usuario.php">Cadastre-se</a>
			
			</form>
		
		</div>
	
	</body>

</html>