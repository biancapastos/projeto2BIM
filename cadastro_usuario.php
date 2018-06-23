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
		
		</style>
	
	</head>

	<body background="">
	
		<div>
	
		<form method = "post" action = "registra_usuario.php">
		
			<h2> Cadastre-se </h2>
			
			<label> Nome: </label>
			<input type = "text" name = "nome" /> 
			
			<br /><br />
			
			<label> Email: </label>
			<input type = "text" name = "email" />
			
			<br /><br />
			
			<label> Senha: </label>
			<input type = "password" name = "senha" />			
			
			<br /><br />	
			
			<label> Sexo: </label>
			<input type = "radio" name = "sexo" value ="F"/>F
			<input type = "radio" name = "sexo" value ="M"/>M
			
			<br /><br />
			
			<label> Data de Nascimento: </label>
			<input type = "date" name = "data_nasc" />
			
			<br /><br />	
		
			<input type = "submit"/>
			
		</form>
		
		</div>
		
	</body>
	
</html>	