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


 
$query = "UPDATE medicamento SET (NOME='$nome',LABORATORIO='$laboratorio',DESCRICAO ='$descricao',PRINC_ATIVO='$principioAtivo',QUANTIDADE='$qtd',TARJA='$tarja',USO_CONT='$uso') WHERE idmedicamento = '$idmedicamento';"

mysqli_query($conexao,$query); //Realiza a consulta
 
if(mysqli_affected_rows($conexao) == 1){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
  
?>  <script>
  alert('O cadastro foi atualizado com sucesso!');
  location.href="paciente.php";
  </script>
<?php
} else {
?>
  <script>
  alert('Erro, não possível inserir no banco de dados');
  //location.href="paciente.php";
  </script>
  <?php  
}
?> 