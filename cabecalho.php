<?php

	session_start();
	
		if ($_SESSION['permissao'] == 'admin') {
			
?>		
			<a href = "login.php">Login</a>
			|
			<a href = "admin.php">Home Page</a>
			|
			<a href = "cadastro_genero.php">Novo Genero Musical</a>
			|
			<a href = "listar_genero.php">Listar Generos Musicais</a> 
			|
			<a href = "cadastro_cantor_banda.php">Novo Cantor ou Banda</a>
			|
			 <a href = "listar_cantor_banda.php">Listar Cantores ou Bandas</a>
			|
			<a href = "cadastro_musica.php">Nova Musica</a>
			|
			<a href = "listar_musicas.php">Listar Musicas</a> 
			
		

<?php

		} else  {
			$_SESSION['permissao'] == 'cliente';
			
?>
			<a href = "login.php">Login</a>
			|
			<a href = "index_playlist.php">Home Page</a>
			|
			<a href = "criar_playlist.php">Criar Nova Playlist</a>
			|
			<a href = "lista_playlist.php">Playlists cadastradas</a>
			|
			<a href = "meu_cadastro.php">Meu Cadastro</a>
			
			
	
<?php	
		}
?>	
	