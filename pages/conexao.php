<?php
	define('HOST', 'localhost');
	define('USUARIO', 'root');
	define('SENHA', '');
	define('DB', 'prometheus');
	
	$conexao = mysqli_connect(HOST,USUARIO,SENHA,DB) or die ('Não foi possivel conectar-se');
	//mysql_select_db(prometheus) or die (mysql_error());
?>