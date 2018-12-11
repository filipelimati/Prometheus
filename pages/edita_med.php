<?php 
session_start();

include('conexao.php');
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !

$idmedico = $_POST ["idmedico"];
$cpf      = $_POST ["cpf"];
$crm      = $_POST ["crm"];
$especialidade  = $_POST ["especial"];
$nome     = $_POST ["nome"];  
$email      = $_POST ["email"];
$fixo     = $_POST ["fixo"];
$celular    = $_POST ["celular"];
$dataNasc   = $_POST ["dataNasc"];
$sexo       = $_POST ["sexo"];
$cep      = $_POST ["cep"];
$logradouro   = $_POST ["logradouro"];
$endNumero    = $_POST ["endNumero"];
$complemento  = $_POST ["complemento"];
$bairro     = $_POST ["bairro"];
$cidade     = $_POST ["cidade"];
$estado     = $_POST ["estado"];



$query = "UPDATE medico SET CPF='$cpf',CRM='$crm',ESPECIAL='$especialidade',NOME='$nome',EMAIL='$email',FIXO='$fixo',CELULAR='$celular',DATANASC='$dataNasc',SEXO='$sexo',CEP='$cep',LOGRADOURO='$logradouro',NUMERO='$endNumero',COMPLEMENTO='$complemento',BAIRRO='$bairro',CIDADE='$cidade',ESTADO='$estado' WHERE IDMEDICO='$idmedico'";

mysqli_query($conexao,$query); //Realiza a consulta
 
if(mysqli_affected_rows($conexao) == 1){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
  
?>  <script>
  alert('O cadastro foi atualizado com sucesso!');
  location.href="medicos.php";
  </script>
<?php

   /* echo "<p>Cadastro feito com sucesso</p>";
    echo '<a href="cadastro.html">Voltar para formulário de cadastro</a>'; //Apenas um link para retornar para o formulário de cadastro*/
} else {
?>
  <script>
  alert('Erro, não possível inserir no banco de dados');
  location.href="medicos.php";
  </script>
  <?php  
}
//echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?> 
