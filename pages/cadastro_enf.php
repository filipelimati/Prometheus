<?php 
session_start();
include('conexao.php');
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !

$coren 				= $_POST ["coren"];
$nome				= $_POST ["nome"];	//atribuição do campo "nome" vindo do formulário para variavel	
$email				= $_POST ["email"];	//atribuição do campo "email" vindo do formulário para variavel
$fixo				= $_POST ["fixo"];	//atribuição do campo "ddd" vindo do formulário para variavel
$celular			= $_POST ["celular"];
$dataNasc			= $_POST ["dataNasc"];	//atribuição do campo "telefone" vindo do formulário para variavel
$sexo 				= $_POST ["sexo"];	//atribuição do campo "endereco" vindo do formulário para variavel
$cep				= $_POST ["cep"];	//atribuição do campo "cidade" vindo do formulário para variavel
$logradouro			= $_POST ["logradouro"];	//atribuição do campo "estado" vindo do formulário para variavel
$endNumero 			= $_POST ["endNumero"];	//atribuição do campo "bairro" vindo do formulário para variavel
$complemento		= $_POST ["complemento"];	//atribuição do campo "pais" vindo do formulário para variavel
$bairro 			= $_POST ["bairro"];	//atribuição do campo "endereco" vindo do formulário para variavel
$cidade				= $_POST ["cidade"];	//atribuição do campo "cidade" vindo do formulário para variavel
$estado				= $_POST ["estado"];	//atribuição do campo "estado" vindo do formulário para variavel
$data = date("Y-m-d H:i:s", time());




$login	= $_POST ["login"];	//atribuição do campo "login" vindo do formulário para variavel
$senha	= md5($_POST ["senha"]) ;	//atribuição do campo "senha" vindo do formulário para variavel


//Gravando no banco de dados !
/*
//conectando com o localhost - mysql
$conexao = mysql_connect("localhost","root");
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db("clientes",$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
*/
//echo " '$fixo'</p>";
$query = "INSERT INTO enfermeiro (coren,NOME,EMAIL,FIXO,CELULAR,DATANASC,SEXO,CEP,logradouro,NUMERO,COMPLEMENTO,BAIRRO,CIDADE,ESTADO,DATACADASTRO)
VALUES ('$coren','$nome','$email','$fixo','$celular','$dataNasc','$sexo','$cep','$logradouro','$endNumero','$complemento','$bairro','$cidade','$estado','$data')";



mysqli_query($conexao,$query); //Realiza a consulta


 
if(mysqli_affected_rows($conexao) == 1){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha

	$pegaid = mysqli_insert_id($conexao);
	$query2 = "INSERT INTO usuario (USUARIO,SENHA,IDENFERMEIRO) VALUES ('$login','$senha','$pegaid')";
	mysqli_query($conexao,$query2);

?>	<script>
	alert('O cadastro foi efetuado com sucesso!');
	location.href="enfermeiro.php";
	</script>
<?php

   /* echo "<p>Cadastro feito com sucesso</p>";
    echo '<a href="cadastro.html">Voltar para formulário de cadastro</a>'; //Apenas um link para retornar para o formulário de cadastro*/
} else {
?>
	<script>
	alert('Erro, não possível inserir no banco de dados');
	location.href="enfermeiro.php";
	</script>
  <?php  
}
//echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?>