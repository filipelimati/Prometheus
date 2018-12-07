<?php 
session_start();
include('conexao.php');
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !

$crm		 	= $_POST ["crm"];
$nome			= $_POST ["nome"];	
$usuario		= $_POST ["usuario"];
$senha			= $_POST ["senha"];
$senhaConfirm	= $_POST ["senhaConfirm"];
$email			= $_POST ["email"];
$cpf			= $_POST ["cpf"];
$fixo			= $_POST ["fixo"];
$celular		= $_POST ["celular"];
$dataNasc		= $_POST ["dataNasc"];
$sexo 			= $_POST ["sexo"];
$cep			= $_POST ["cep"];
$logradouro		= $_POST ["logradouro"];
$endNumero 		= $_POST ["endNumero"];
$complemento	= $_POST ["complemento"];
$bairro 		= $_POST ["bairro"];
$cidade			= $_POST ["cidade"];
$estado			= $_POST ["estado"];

/*
$login	= $_POST ["login"];	//atribuição do campo "login" vindo do formulário para variavel
$senha	= $_POST ["senha"];	//atribuição do campo "senha" vindo do formulário para variavel
*/

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

$query = "INSERT INTO medico (crm,NOME,'USUARIO','SENHA','SENHACONFIRM',EMAIL,CPF,FIXO,DATANASC,SEXO,CEP,logradouro,NUMERO,COMPLEMENTO,BAIRRO,CIDADE,ESTADO)
VALUES ('$crm','$nome','$usuario','$senha','$senhaConfirm','$email','$cpf','$fixo','$dataNasc','$sexo','$cep','$logradouro','$endNumero','$complemento','$bairro','$cidade','$estado')";



mysqli_query($conexao,$query); //Realiza a consulta
 
if(mysqli_affected_rows($conexao) == 1){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
	
?>
	<script>
	alert('O cadastro foi efetuado com sucesso!');
	location.href="medico.php";
	</script>
<?php

   /* echo "<p>Cadastro feito com sucesso</p>";
    echo '<a href="cadastro.html">Voltar para formulário de cadastro</a>'; //Apenas um link para retornar para o formulário de cadastro*/
} else {
?>
	<script>
	alert('Erro, não possível inserir no banco de dados');
	location.href="medico.php";
	</script>
  <?php  
}
//echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?> 