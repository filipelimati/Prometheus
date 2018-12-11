<?php 
session_start();
include('conexao.php');
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !

$teste = $_POST ["teste"];

$queryaux = "DELETE FROM usuario WHERE idenfermeiro = '$teste'";

mysqli_query($conexao,$queryaux);

$query = "DELETE FROM enfermeiro WHERE idenfermeiro = '$teste'";

mysqli_query($conexao,$query);

if(mysqli_affected_rows($conexao) == 1){
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
