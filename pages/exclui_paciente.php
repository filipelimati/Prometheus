<?php 
session_start();
include('conexao.php');
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !

$teste = $_POST ["idpaciente"];

$query = "DELETE FROM paciente WHERE idpaciente = '$teste'";

mysqli_query($conexao,$query);

if(mysqli_affected_rows($conexao) == 1){
?>	<script>
		alert('A EXCLUSÃO foi realizada com sucesso!');
		location.href="paciente.php";
	</script>
<?php

   /* echo "<p>Cadastro feito com sucesso</p>";
    echo '<a href="cadastro.html">Voltar para formulário de cadastro</a>'; //Apenas um link para retornar para o formulário de cadastro*/
} else {
?>
	<script>
		alert('Erro, não foi possível excluir!');
		location.href="paciente.php";
	</script>
  <?php  
}
//echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?>
