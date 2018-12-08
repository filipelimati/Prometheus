<?php 
session_start();
include('conexao.php');
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !

$nome			= $_POST ["nome"];	//atribuição do campo "nome" vindo do formulário para variavel	
$usuario		= $_POST ["usuario"];
$email			= $_POST ["email"];	//atribuição do campo "email" vindo do formulário para variavel
$perfil			= $_POST ["perfil"];	//atribuição do campo "ddd" vindo do formulário para variavel
$senha			= md5($_POST ["senha"]);	//atribuição do campo "telefone" vindo do formulário para variavel

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

$query = "INSERT INTO usuario (NOME,USUARIO,EMAIL,PERFIL,SENHA)
VALUES ('$nome','$usuario','$email','$perfil', '$senha')";


mysqli_query($conexao,$query); //Realiza a consulta
 
if(mysqli_affected_rows($conexao) == 1){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
	
?>
	<script>
	alert('O cadastro foi efetuado com sucesso!');
	location.href="usuario.php";
	</script>
<?php

   /* echo "<p>Cadastro feito com sucesso</p>";
    echo '<a href="cadastro.html">Voltar para formulário de cadastro</a>'; //Apenas um link para retornar para o formulário de cadastro*/
} else {
 
echo "<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastros</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Cadastro Realizado com Sucesso!
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                
              </div>
            </div>
          </div>
        </div>"
  <?php  
}
//echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?> 