<?php 
session_start();
include('conexao.php');
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !

$idenf = $_POST ["idenf"];
$coren        = $_POST ["coren"];
$nome       = $_POST ["nome"];  //atribuição do campo "nome" vindo do formulário para variavel  
$email        = $_POST ["email"]; //atribuição do campo "email" vindo do formulário para variavel
$fixo       = $_POST ["fixo"];  //atribuição do campo "ddd" vindo do formulário para variavel
$celular      = $_POST ["celular"];
$dataNasc     = $_POST ["dataNasc"];  //atribuição do campo "telefone" vindo do formulário para variavel
$sexo         = $_POST ["sexo"];  //atribuição do campo "endereco" vindo do formulário para variavel 
$cep        = $_POST ["cep"]; //atribuição do campo "cidade" vindo do formulário para variavel
$logradouro     = $_POST ["logradouro"];  //atribuição do campo "estado" vindo do formulário para variavel
$endNumero      = $_POST ["endNumero"]; //atribuição do campo "bairro" vindo do formulário para variavel
$complemento    = $_POST ["complemento"]; //atribuição do campo "pais" vindo do formulário para variavel
$bairro       = $_POST ["bairro"];  //atribuição do campo "endereco" vindo do formulário para variavel
$cidade       = $_POST ["cidade"];  //atribuição do campo "cidade" vindo do formulário para variavel
$estado       = $_POST ["estado"];  //atribuição do campo "estado" vindo do formulário para variavel



$query = "UPDATE enfermeiro SET NOME='$nome',coren='$coren',EMAIL='$email' ,FIXO='$fixo' ,DATANASC='$dataNasc',SEXO='$sexo',CEP='$cep',NUMERO='$endNumero',COMPLEMENTO='$complemento',BAIRRO='$bairro',CIDADE='$cidade',ESTADO='$estado',LOGRADOURO='$logradouro',celular='$celular' WHERE idenfermeiro = '$idenf' ";

mysqli_query($conexao,$query); //Realiza a consulta
 
if(mysqli_affected_rows($conexao) == 1){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
  
?>  <script>
  alert('O cadastro foi atualizado com sucesso!');
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