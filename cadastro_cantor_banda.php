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
		
<?php
	include("cabecalho.php");
	include("conexao.php");
?>
		
			<form name = "tipo" method = "post" action = "cadastro_cantor_banda.php">
			
			<h3> O que voce vai cadastrar? </h3>
			
				<input type = "radio" name = "cantor/banda" value = "cantor" onchange = 'document.tipo.submit()'/> Cantor
				<input type = "radio" name = "cantor/banda" value = "banda" onchange = 'document.tipo.submit()'/> Banda	
		
				</form>
        
			
<?php
	if(!empty($_POST["cantor/banda"])){
	
		if($_POST["cantor/banda"] == "cantor"){
?>	
	
		<form method = "post" action = "registra_cantor_banda.php">
		
			<h1> Cadastro cantor </h1>
			
			<label> Nome: </label>
			<input type = "text" name = "nome_cantor" /> 
			
			<br /><br />
			
			<label> Idade </label>
			<input type = "number" name = "idade" />
			
			<br /><br />	
			
			<label> Ocupacao: </label>
			<input type = "text" name = "ocupacao"/>
			
			<br /><br />
			
			<label> Instrumentos: </label>
			<input type = "text" name = "instrumentos" />
			
			<br /><br />
			
			<label> Extensao vocal: </label>
			<input type = "text" name = "extensao_vocal" />
			
			<br /><br />
			<input type = "submit" />
			
		</form>

<?php
		}
?>
<?php
		if($_POST["cantor/banda"] == "banda"){
?>

            <form method = "post" action = "registra_cantor_banda.php">
			
			<h1> Cadastro Banda </h1>
			
                <label>Nova Banda:
                    <input type = "text" name = "nome_banda" />
                </label>				
                <br />
				
				<label> Instrumentos: </label>
					<input type = "text" name = "instrumentos"/>
			
				<br /><br />			
                <input type = "submit" value = "enviar"/>
            </form>
		
		</div>
    </body>
</html>


<?php
		}
	}
?>		
