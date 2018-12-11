<?php
session_start();

if($_SESSION['numLogin'] == 0 or null){
  ?>
  <script>
    alert('Primeiro você precisa logar no sistema');
    location.href="sair.php";
  </script>
  <?php
}

?>
<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Prometheus</title>
      <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script type="text/javascript">
      function fMasc(objeto,mascara) {
        obj=objeto
        masc=mascara
        setTimeout("fMascEx()",1)
      }
      function fMascEx() {
        obj.value=masc(obj.value)
      }
      function mTel(tel) {
        tel=tel.replace(/\D/g,"")
        tel=tel.replace(/^(\d)/,"($1")
        tel=tel.replace(/(.{3})(\d)/,"$1)$2")
        if(tel.length == 9) {
          tel=tel.replace(/(.{1})$/,"-$1")
        } else if (tel.length == 10) {
          tel=tel.replace(/(.{2})$/,"-$1")
        } else if (tel.length == 11) {
          tel=tel.replace(/(.{3})$/,"-$1")
        } else if (tel.length == 12) {
          tel=tel.replace(/(.{4})$/,"-$1")
        } else if (tel.length > 12) {
          tel=tel.replace(/(.{4})$/,"-$1")
        }
        return tel;
      }
      function mCPF(cpf){
        cpf=cpf.replace(/\D/g,"")
        cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
        cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
        cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
        return cpf
      }
      function mCEP(cep){
        cep=cep.replace(/\D/g,"")
        cep=cep.replace(/^(\d{2})(\d)/,"$1.$2")
        cep=cep.replace(/\.(\d{3})(\d)/,".$1-$2")
        return cep
      }
      function mNum(num){
        num=num.replace(/\D/g,"")
        return num
      }

      $(document).ready(function() {
        $('#tenf').DataTable({
          "language": {
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_  resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
              "sNext": "Próximo",
              "sPrevious": "Anterior",
              "sFirst": "Primeiro",
              "sLast": "Último"
            },
            "oAria": {
              "sSortAscending": ": Ordenar colunas de forma ascendente",
              "sSortDescending": ": Ordenar colunas de forma descendente"
            }
          }
        });
      } );

    </script>

    <!--VALIDAR CEP-->
    <script type="text/javascript" >

      function limpa_formulário_cep() {
                //Limpa valores do formulário de cep.
                document.getElementById('logradouro').value=("");
                document.getElementById('bairro').value=("");
                document.getElementById('cidade').value=("");
                document.getElementById('estado').value=("");            
              }

              function meu_callback(conteudo) {
                if (!("erro" in conteudo)) {
                //Atualiza os campos com os valores.
                document.getElementById('logradouro').value=(conteudo.logradouro);
                document.getElementById('bairro').value=(conteudo.bairro);
                document.getElementById('cidade').value=(conteudo.localidade);
                document.getElementById('estado').value=(conteudo.uf);            
            } //end if.
            else {
                //CEP não Encontrado.
                limpa_formulário_cep();
                alert("CEP não encontrado.");
              }
            }
            
            function pesquisacep(valor) {

            //Nova variável "cep" somente com dígitos.
            var cep = valor.replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if(validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    document.getElementById('logradouro').value="...";
                    document.getElementById('bairro').value="...";
                    document.getElementById('cidade').value="...";
                    document.getElementById('estado').value="...";
                    
                    //Cria um elemento javascript.
                    var script = document.createElement('script');

                    //Sincroniza com o callback.
                    script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                    //Insere script no documento e carrega o conteúdo.
                    document.body.appendChild(script);

                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                  }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
              }
            };
    </script>
  </head>

  <body>
      

    <div id="wrapper">

      <nav class="navbar navbar-default navbar-static-top"  style="margin-bottom: 0">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a href="#" class="navbar-left">
            <img src="../img/logo2.png" width="40" height="40" alt=""></img> 
          </a>

          <a class="navbar-brand" href="home.php">                                                           
            PROMETHEUS
          </a>
        </div>
        <!-- /.navbar-header -->
        <ul class="nav navbar-top-links navbar-right">

          <!-- /.dropdown -->
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <?php echo "Olá, ".$_SESSION['userName'];?> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
              <li>
                <a href="sair.php"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
              </li>
            </ul>
          </li>
        </ul>
        <div class="navbar-default sidebar" role="navigation">
          <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
              
              <li class="sidebar-search">
                <div class="input-group custom-search-form">
                  <input type="text" class="form-control" placeholder="Search...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                      <i class="fa fa-search"></i>
                    </button>
                  </span>
                </div>
                
              </li>


              <li>
                <a href="home.php"> <i class="fa fa-home fa-fw"></i> <b>Home</b></a>                            
              </li>
              <li>
                <a href="consulta.php"><i class="fa fa-user-md fa-fw"></i> <b>Consultas</b></a>
              </li>
              <li>
                <a href="triagem.php"><i class="fa fa-stethoscope fa-fw"></i> <b>Triagens</b></a>
              </li>
              <li>
                <a href="prontuario.php"><i class="fa fa-clipboard fa-fw"></i> <b>Prontuários</b></a>                            
              </li>
              <li>
                <a href="#"><i class="fa fa-plus-circle fa-fw"></i> <b>Cadastros</b><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li>
                    <a href="paciente.php">Paciente</a>
                  </li>
                  <li>
                    <a href="medicos.php">Médico</a>
                  </li>
                  <li>
                    <a href="enfermeiro.php">Enfermeiro</a>
                  </li>
                  <li>
                    <a href="tecnico.php">Técnico de Enfermagem</a>
                  </li>                                
                  <li>
                    <a href="maqueiro.php">Maqueiro</a>
                  </li>
                  <li>
                    <a href="medicamento.php">Medicamento</a>                            
                  </li>
                  <li>
                    <a href="usuario.php">Usuário</a>                            
                  </li>
                </ul>
                <!-- /.nav-second-level -->
              </li>                        
              
              <li>
                <a href="#"><i class="fa fa-book fa-fw"></i> <b>Sobre</b></a>

              </li>

            </ul>
          </div>
          <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
      </nav>

      <!-- Page Content -->
      <div id="page-wrapper">
        <div class="container-fluid">

          <br>
          <br>

          <div class="row">
            <div class="col-lg-12">
              <div class="panel panel-primary">

                <div class="panel-heading">
                  <b>PACIENTE</b>
                </div>

                <div class="panel-body">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#Cadastrar" data-toggle="tab">Cadastrar</a>
                    </li>
                    <li><a href="#Consultar" data-toggle="tab">Consultar</a></li>
                  </ul>

                  <br>

                  <div class="tab-content">
                    <!--aba de cadastro--> 
                    <div class="tab-pane fade in active" id="Cadastrar">
                      <div class="row">                            
                        <form role="form" action="cadastro_paciente.php" method="post">
                          <div class="form-group col-sm-6">
                            <label>Nome</label>
                            <input name="nome" type="text" class="form-control" placeholder="Digite seu nome" pattern="[a-zA-Z\s]+$" required autofocus >
                          </div>

                          <div class="form-group col-sm-6">
                            <label>E-mail</label>
                            <input name="email" type="text" class="form-control" placeholder="Digite seu e-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                          </div>

                          <div class="form-group col-sm-4">
                            <label>CPF</label>
                            <input name="cpf" type="text" class="form-control" placeholder="Digite o CPF" onkeydown="javascript: fMasc( this, mCPF );" maxlength="14" required>
                          </div>

                          <div class="form-group col-sm-4">
                            <label>Telefone Residencial</label>
                            <input name="fixo" type="tel" class="form-control" placeholder="Digite seu telefone" id="telefone" maxlength="13" onkeydown="javascript: fMasc( this, mTel );">
                          </div>

                          <div class="form-group col-sm-4">
                            <label>Telefone Celular</label>
                            <input name="celular" type="tel" class="form-control" placeholder="Digite seu celular" maxlength="14" id="celular" onkeydown="javascript: fMasc( this, mTel );">
                          </div>

                          <div class="form-group col-sm-3">
                            <label>Data de Nascimento</label>
                            <input name="dataNasc" type="date" class="form-control" placeholder="Informe a data de nascimento" id="data" required>
                          </div>

                          <div class="form-group col-sm-3">
                            <label>Sexo</label>
                            <select name="sexo" class="form-control mr-sm-2" required>
                              <option>Selecione</option>
                              <option>Masculino</option>
                              <option>Feminino</option>
                            </select>
                          </div>
                          
                          <div class="col-md-11">
                            <!--alinhamento dos campos-->
                          </div> 

                          <div class="form-group col-sm-2">
                            <label>CEP</label>
                            <input name="cep" id="cep" type="text" class="form-control" placeholder="Informe o CEP" onblur="pesquisacep(this.value);" maxlength="10" onkeydown="javascript: fMasc( this, mCEP );" required>
                          </div>

                          <div class="form-group col-sm-8">
                            <label>Logradouro</label>
                            <input name="logradouro" id="logradouro" type="text" placeholder="Infome o endereço" class="form-control" required>
                          </div>

                          <div class="form-group col-sm-2">
                            <label>Número</label>
                            <input name="endNumero" id="numero" type="number" placeholder="Nº 1234" class="form-control" required>
                          </div>

                          <div class="form-group col-sm-4">
                            <label>Complemento</label>
                            <input name="complemento" id="complemento" type="text" placeholder="Complemento" class="form-control" required>
                          </div>

                          <div class="form-group col-sm-4">
                            <label>Bairro</label>
                            <input name="bairro" id="bairro" type="text" placeholder="Informe o bairro" class="form-control" required>
                          </div>

                          <div class="form-group col-sm-3">
                            <label>Cidade</label>
                            <input name="cidade" id="cidade" type="text" placeholder="Informe a cidade" class="form-control" required>
                          </div>

                          <div class="form-group col-sm-1">
                            <label>UF</label>
                            <select name="estado" id="estado" class="form-control mr-sm-2" required>
                              <option></option>
                              <option value="AC">AC</option>
                              <option value="AL">AL</option>
                              <option value="AP">AP</option>
                              <option value="AM">AM</option>
                              <option value="BA">BA</option>
                              <option value="CE">CE</option>
                              <option value="DF">DF</option>
                              <option value="ES">ES</option>
                              <option value="GO">GO</option>
                              <option value="MA">MA</option>
                              <option value="MS">MS</option>
                              <option value="MT">MT</option>
                              <option value="MG">MG</option>
                              <option value="PA">PA</option>
                              <option value="PB">PB</option>
                              <option value="PR">PR</option>
                              <option value="PE">PE</option>
                              <option value="PI">PI</option>
                              <option value="RJ">RJ</option>
                              <option value="RN">RN</option>
                              <option value="RS">RS</option>
                              <option value="RO">RO</option>
                              <option value="RR">RR</option>
                              <option value="SC">SC</option>
                              <option value="SP">SP</option>
                              <option value="SE">SE</option>
                              <option value="TO">TO</option>
                            </select>
                          </div>

                          <div class="form-group col-sm-12">
                            <label>Observações</label><br>
                            <textarea name="obs" type="text" class="form-control"></textarea><br>
                          </div>

                          <div class="col-md-7">
                            <!--alinhamento dos Botões-->
                          </div>                                    

                          <div class="col-md-2 col-sm-12 col-xs-6">
                            <button type="reset" class="btn btn-warning btn-block">LIMPAR</button>
                          </div>

                          <div class="col-md-3 col-sm-12 col-xs-6">
                            <button type="submit" class="btn btn-primary btn-block">CADASTRAR</button>
                          </div> 

                        </form>   
                      </div>
                    </div>

                    <!--consulta-->
                    <div class="tab-pane fade" id="Consultar">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              Consulta de Cadastros:
                            </div>
                            <div class="panel-body">                                
                              <table width="100%" class="table table-striped table-bordered table-hover" id="tenf"> 
                                <thead>
                                  <tr>
                                    <th>
                                      <b>CPF</b>
                                    </th>
                                    <th>
                                      <b>NOME</b>
                                    </th>
                                    <th>
                                      <b>EMAIL</b>
                                    </th>
                                    <th>
                                      <b>DATA CADASTRO</b>
                                    </th>
                                    <th>
                                      <b>AÇÕES</b>
                                    </th>                                                    
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php  
                                  include_once("conexao.php");

                                  $sql = "select idpaciente,nome,email,cpf,fixo,celular,datanasc,sexo,cep,logradouro,numero,complemento,bairro,cidade,estado,obs,datacadastro from paciente";

                                  $consulta = mysqli_query($conexao,$sql); 
                                  if ($resultado = $consulta){
                                    while ($obj = $resultado->fetch_object()){ 
                                      ?>
                                      <tr>
                                        <th ><?php printf($obj->cpf) ?></th>
                                        <td ><?php printf($obj->nome) ?></td>
                                        <td ><?php printf($obj->email) ?></td>
                                        <td ><?php printf($obj->datacadastro) ?></td>

                                        <!-- Modal Excluir --> 
                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
                                          <div class="modal-dialog" role="document" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                                                <h5 class="modal-title" id="modalLabel">Excluir Enfermeiro</h5>
                                              </div>
                                              <form role="form" action="exclui_paciente.php" method="post">
                                                <div class="modal-body">
                                                  Deseja realmente excluir <?php echo $obj->nome ?>?
                                                </div>

                                                <input name="idpaciente" type="hidden" class="form-control" id="idpaciente" value="">

                                                <div class="modal-footer">
                                                  <button type="submit" class="btn btn-primary">Sim</button>
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
                                                </div>
                                              </form>
                                            </div>  
                                          </div>
                                        </div> 
                                        <!-- Fim Modal Excluir -->
                                        <td>
                                          <button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $obj->idpaciente; ?>" data-whatevernome="<?php echo $obj->nome; ?>" data-whatevercpf="<?php echo $obj->cpf; ?>" data-whateverbairro="<?php echo $obj->bairro;?>" data-whatevercep="<?php echo $obj->cep;?>" data-whatevercidade="<?php echo $obj->cidade;?>" data-whatevercomplemento="<?php echo $obj->complemento;?>" data-whateverdatacadastro="<?php echo $obj->datacadastro;?>" data-whateverdatanasc="<?php echo $obj->datanasc;?>" data-whateveremail="<?php echo $obj->email;?>" data-whateverestado="<?php echo $obj->estado;?>"   data-whateverlogradouro="<?php echo $obj->logradouro;?>" data-whatevernumero="<?php echo $obj->numero;?>" data-whateversexo="<?php echo $obj->sexo;?>" data-whateverobs="<?php echo $obj->obs;?>" data-whateverfixo="<?php echo $obj->fixo;?>" data-whatevercelular="<?php echo $obj->celular;?>" >Editar</button>

                                          <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#myModal" data-whatever="<?php echo $obj->idpaciente; ?>" data-whatevernome="<?php echo $obj->nome; ?>" >Apagar</button>
                                          
                                          <!-- Modal Editar-->
                                          <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog"   aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                              <div class="modal-content"> 
                                                <div class="modal-header">
                                                  <h4 class="modal-title" id="exampleModalLabel">Editar Paciente</h4>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                
                                                <div class="modal-body">
                                                  <div class="tab-pane fade in active" id="Editar">
                                                    <div class="row">
                                                      <form role="form" action="edita_paciente.php" method="post">
                                                        <div class="form-group col-sm-6">
                                                          <label>Nome</label>
                                                          <input name="nome" type="text" class="form-control" placeholder="Digite seu nome" pattern="[a-zA-Z\s]+$" id='nome' required autofocus >
                                                        </div>

                                                        <div class="form-group col-sm-6">
                                                          <label>E-mail</label>
                                                          <input name="email" type="text" class="form-control" placeholder="Digite seu e-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" id='email' required>
                                                        </div>

                                                        <div class="form-group col-sm-4">
                                                          <label>CPF</label>
                                                          <input name="cpf" type="text" class="form-control" placeholder="Digite o CPF" onkeydown="javascript: fMasc( this, mCPF );" maxlength="14" id='cpf' required>
                                                        </div>

                                                        <div class="form-group col-sm-4">
                                                          <label>Telefone</label>
                                                          <input name="fixo" type="tel" class="form-control" placeholder="Digite seu telefone" id="fixo" maxlength="13" onkeydown="javascript: fMasc( this, mTel );" >
                                                        </div>

                                                        <div class="form-group col-sm-4">
                                                          <label>Celular</label>
                                                          <input name="celular" type="tel" class="form-control" placeholder="Digite seu celular" maxlength="14" id="celular" onkeydown="javascript: fMasc( this, mTel );">
                                                        </div>

                                                        <div class="form-group col-sm-3">
                                                          <label>Data de Nascimento</label>
                                                          <input name="dataNasc" type="date" class="form-control" placeholder="Informe a data de nascimento" id="data" required>
                                                        </div>

                                                        <div class="form-group col-sm-3">
                                                          <label>Sexo</label>
                                                          <select name="sexo" class="form-control mr-sm-2" id='sexo' required>
                                                            <option>Selecione</option>
                                                            <option>Masculino</option>
                                                            <option>Feminino</option>
                                                          </select>
                                                        </div>
                                                        
                                                        <div class="col-md-11">
                                                          <!--alinhamento dos campos-->
                                                        </div> 

                                                        <div class="form-group col-sm-2">
                                                          <label>CEP</label>
                                                          <input name="cep" id="cep" type="text" class="form-control" placeholder="Informe o CEP" id="cep" onblur="pesquisacep(this.value);" maxlength="10" onkeydown="javascript: fMasc( this, mCEP );" required>
                                                        </div>

                                                        <div class="form-group col-sm-8">
                                                          <label>Logradouro</label>
                                                          <input name="logradouro" id="logradouro" type="text" placeholder="Infome o endereço" class="form-control"  required>
                                                        </div>

                                                        <div class="form-group col-sm-2">
                                                          <label>Número</label>
                                                          <input name="endNumero" id="numero" type="number" placeholder="Nº 1234" class="form-control" required>
                                                        </div>

                                                        <div class="form-group col-sm-4">
                                                          <label>Complemento</label>
                                                          <input name="complemento" id="complemento" type="text" placeholder="Complemento" class="form-control" required>
                                                        </div>

                                                        <div class="form-group col-sm-4">
                                                          <label>Bairro</label>
                                                          <input name="bairro" id="bairro" type="text" placeholder="Informe o bairro" class="form-control" required>
                                                        </div>

                                                        <div class="form-group col-sm-3">
                                                          <label>Cidade</label>
                                                          <input name="cidade" id="cidade" type="text" placeholder="Informe a cidade" class="form-control" required>
                                                        </div>

                                                        <div class="form-group col-sm-1">
                                                          <label>UF</label>
                                                          <select name="estado" id="estado" class="form-control mr-sm-2" required>
                                                            <option></option>
                                                            <option value="AC">AC</option>
                                                            <option value="AL">AL</option>
                                                            <option value="AP">AP</option>
                                                            <option value="AM">AM</option>
                                                            <option value="BA">BA</option>
                                                            <option value="CE">CE</option>
                                                            <option value="DF">DF</option>
                                                            <option value="ES">ES</option>
                                                            <option value="GO">GO</option>
                                                            <option value="MA">MA</option>
                                                            <option value="MS">MS</option>
                                                            <option value="MT">MT</option>
                                                            <option value="MG">MG</option>
                                                            <option value="PA">PA</option>
                                                            <option value="PB">PB</option>
                                                            <option value="PR">PR</option>
                                                            <option value="PE">PE</option>
                                                            <option value="PI">PI</option>
                                                            <option value="RJ">RJ</option>
                                                            <option value="RN">RN</option>
                                                            <option value="RS">RS</option>
                                                            <option value="RO">RO</option>
                                                            <option value="RR">RR</option>
                                                            <option value="SC">SC</option>
                                                            <option value="SP">SP</option>
                                                            <option value="SE">SE</option>
                                                            <option value="TO">TO</option>
                                                          </select>
                                                        </div>

                                                        <div class="form-group col-sm-12">
                                                          <label>Observações</label><br>
                                                          <textarea name="obs" id='obs' type="text" class="form-control"></textarea><br>
                                                        </div>

                                                        <input name="idpaciente" type="hidden" class="form-control" id="idpaciente" value="">

                                                        <div class="form-group col-sm-12">
                                                          <hr></hr>
                                                        </div>
                                                        <div class="col-md-6">
                                                          <!--alinhamento dos Botões-->
                                                        </div> 

                                                        <div class="col-md-3 col-sm-3 col-xs-6">
                                                          <button type="reset" class="btn btn-danger btn-block">LIMPAR</button>
                                                        </div>

                                                        <div class="col-md-3 col-sm-3 col-xs-6">
                                                          <button type="submit" class="btn btn-success btn-block">ALTERAR</button>
                                                        </div>
                                                      </form>
                                                    </div>   
                                                  </div>
                                                </div>
                                              </div>
                                            </div>  
                                          </div>
                                          <!-- Fim Modal Editar-->
                                        </td>    
                                      </tr>
                                  <?php
                                    }
                                    $resultado->close();
                                  } 
                                  ?>
                                </tbody>
                            </table>
                          </div>
                        </div> 
                       <!-- </div>-->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <script type="text/javascript">
      $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var idpaciente = button.data('whatever') // Extract info from data-* attributes
        var nome = button.data('whatevernome')
        var email = button.data('whateveremail')
        var cpf = button.data('whatevercpf')
        var bairro = button.data('whateverbairro')
        var cep = button.data('whatevercep')
        var complemento  = button.data('whatevercomplemento')
        ///var datacadastro = button.data('whateverdatacadastro')
        var datanasc = button.data('whateverdatanasc')
        var estado = button.data('whateverestado')
        var logradouro = button.data('whateverlogradouro')
        var numero = button.data('whatevernumero')
        var sexo = button.data('whateversexo')
        var obs = button.data('whateverobs') 
        var fixo = button.data('whateverfixo')
        var cidade = button.data('whatevercidade')
        var celular = button.data('whatevercelular')

        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        //modal.find('.modal-title').text('ID ' + idenf)
        modal.find('#idpaciente').val(idpaciente)
        modal.find('#nome').val(nome)
        modal.find('#email').val(email)
        modal.find('#cpf').val(cpf)
        modal.find('#bairro').val(bairro)
        modal.find('#cep').val(cep)
        modal.find('#complemento').val(complemento)
        //modal.find('#datacadastro').val(datacadastro)
        modal.find('#data').val(datanasc)
        modal.find('#estado').val(estado)
        modal.find('#logradouro').val(logradouro)
        modal.find('#numero').val(numero)
        modal.find('#sexo').val(sexo)
        modal.find('#fixo').val(fixo)
        modal.find('#cidade').val(cidade)
        modal.find('#obs').val(obs)
        modal.find('#celular').val(celular)
        
      })
    </script>

    <script type="text/javascript">
      $('#myModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var idpaciente = button.data('whatever') // Extract info from data-* attributes
        var nome = button.data('whatevernome')

        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        //modal.find('.modal-title').text('ID ' + idenf)
        modal.find('#idpaciente').val(idpaciente)
        modal.find('#nome2').val(nome)
      })
    </script>
  </body>

</html>
