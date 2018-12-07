<?php 
session_start();
include('conexao.php');
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !

$nome 			= $_POST ["nome"];
$laboratorio	= $_POST ["laboratorio"];	//atribuição do campo "nome" vindo do formulário para variavel	
$descricao		= $_POST ["descricao"];	//atribuição do campo "email" vindo do formulário para variavel
$principioAtivo	= $_POST ["principioAtivo"];	//atribuição do campo "telefone" vindo do formulário para variavel
$qtd 			= $_POST ["qtd"];	//atribuição do campo "endereco" vindo do formulário para variavel
$tarja			= $_POST ["tarja"];	//atribuição do campo "cidade" vindo do formulário para variavel
$uso			= $_POST ["uso"];	//atribuição do campo "estado" vindo do formulário para variavel

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

$query = "INSERT INTO medicamento (NOME,LABORATORIO,DESCRICAO,PRINC_ATIVO,QUANTIDADE,TARJA,USO_CONT)
VALUES ('$nome','$laboratorio','$descricao','$principioAtivo','$qtd','$tarja','$uso')";



mysqli_query($conexao,$query); //Realiza a consulta
 
if(mysqli_affected_rows($conexao) == 1){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
	
?>
	<script>
	alert('O cadastro foi efetuado com sucesso!');
	location.href="medicamento.php";
	</script>
<?php

   /* echo "<p>Cadastro feito com sucesso</p>";
    echo '<a href="cadastro.html">Voltar para formulário de cadastro</a>'; //Apenas um link para retornar para o formulário de cadastro*/
} else {
?>
	<script>
	alert('Erro, não possível inserir no banco de dados');
	location.href="medicamento.php";
	</script>
  <?php  
}
//echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?> 