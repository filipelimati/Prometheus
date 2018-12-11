<?php
session_start();
//Verificação de sessão
include('conexao.php');

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select idusuario,usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";
$result = mysqli_query($conexao,$query);
$row = mysqli_num_rows($result);

if($row == 1) {
	$num=rand(100000,900000);
	session_start();
	$_SESSION['numLogin'] = $num;
	$_SESSION['userName'] = $usuario;

	header("Location: home.php?num1=$num");
	exit();

}else{
	$_SESSION['msg'] = "Usuário e senha incorretos!";
	header("Location: index.php");	
}

/*if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: home.php');
	exit();

}else{
	$_SESSION['msg'] = "Usuário e senha incorretos!";
	header("Location: index.php");	
}*/
?>