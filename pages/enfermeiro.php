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
                    document.getElementById('rua').value=("");
                    document.getElementById('bairro').value=("");
                    document.getElementById('cidade').value=("");
                    document.getElementById('uf').value=("");            
                  }

                  function meu_callback(conteudo) {
                    if (!("erro" in conteudo)) {
                    //Atualiza os campos com os valores.
                    document.getElementById('rua').value=(conteudo.logradouro);
                    document.getElementById('bairro').value=(conteudo.bairro);
                    document.getElementById('cidade').value=(conteudo.localidade);
                    document.getElementById('uf').value=(conteudo.uf);            
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
                        document.getElementById('rua').value="...";
                        document.getElementById('bairro').value="...";
                        document.getElementById('cidade').value="...";
                        document.getElementById('uf').value="...";
                        
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

                    <div class="row">
                      <div class="col-lg-12">
                        <div class="panel panel-primary">

                          <div class="panel-heading">
                            <b>ENFERMEIRO</b>
                          </div>
                          <div class="panel-body">
                            <ul class="nav nav-tabs">
                              <li class="active"><a href="#Cadastrar" data-toggle="tab">Cadastrar</a>
                              </li>
                              <li><a href="#Consultar" data-toggle="tab">Consultar</a>
                              </li>
                            </ul>

                            <br>

                            <div class="tab-content">
                              <!--ABA CADASTRAR-->
                              <div class="tab-pane fade in active" id="Cadastrar">
                                <div class="row">
                                  <form role="form" action="cadastro_enf.php" method="post">

                                    <div class="form-group col-sm-2">
                                      <label>CPF</label>
                                      <input name="cpf" type="text" class="form-control" placeholder="Digite o CPF" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" onkeydown="javascript: fMasc( this, mCPF );" maxlength="14" required>
                                    </div>
                                    
                                    <div class="form-group col-md-2">
                                      <label>COREN</label>
                                      <input name="coren" type="text" class="form-control" placeholder="Informe o número do COREN" required autofocus>
                                    </div>

                                    <div class="form-group col-sm-5">
                                      <label>Usuário</label>
                                      <input name="usuario" type="text" class="form-control" placeholder="Usuário" required="required">
                                    </div>

                                    <div class="form-group col-sm-6" id="divSenha" required="required">
                                      <label>Senha</label>
                                      <input name="senha" id="senha" type="password" class="form-control is-invalid" placeholder="Senha" pattern=".{8,}" title="No mínimo 8 caracteres">
                                    </div>

                                    <div class="form-group col-sm-6" id="divsenhaConfirm" required="required">
                                      <label>Confirmar Senha</label>
                                      <input name="senhaConfirm" id="senhaConfirm" type="password" class="form-control" placeholder="Confirmar Senha" pattern=".{8,}" title="No mínimo 8 caracteres">
                                    </div>                          

                                    <div class="form-group col-md-8">
                                      <label>Nome</label>
                                      <input name="nome" type="text" class="form-control" placeholder="Digite seu nome" pattern="[a-zA-Z\s]+$" required>
                                    </div>

                                    <div class="form-group col-sm-5">
                                     <label>E-mail</label>
                                     <input name="email" type="email" class="form-control" placeholder="Digite seu e-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                                   </div>
                                   
                                   <div class="form-group col-sm-2">
                                    <label>Telefone Fixo</label>
                                    <input name="fixo" type="phone" class="form-control" placeholder="Digite seu telefone" id="telefone" maxlength="13" onkeydown="javascript: fMasc( this, mTel );">
                                    <!--pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$"-->
                                  </div>

                                  <div class="form-group col-sm-2">
                                    <label>Telefone Móvel</label>
                                    <input name="celular" type="phone" class="form-control" placeholder="Digite seu número de celular" maxlength="14" id="celular" onkeydown="javascript: fMasc( this, mTel );">
                                    <!-- pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$"-->
                                  </div>

                                  <div class="form-group col-sm-3">
                                    <label>Data de Nascimento</label>
                                    <input name="dataNasc" type="date" class="form-control" placeholder="dd/mm/aaaa" id="data" required>
                                  </div>                            

                                  <div class="form-group col-sm-3">
                                    <label>Sexo</label>
                                    <select class="form-control mr-sm-2" name="sexo" required>
                                      <option>Selecione</option>
                                      <option>Masculino</option>
                                      <option>Feminino</option>
                                    </select>
                                  </div>

                                  <div class="form-group col-md-9">
                                    <label>Especialidade</label>
                                    <input name="especialidade" type="text" class="form-control" placeholder="Digite a especialidade" pattern="[a-zA-Z\s]+$" required>
                                  </div>

                                  <div class="form-group col-sm-2">
                                    <label>CEP</label>
                                    <input name="cep" id="cep" type="text" class="form-control" placeholder="Informe o CEP" id="cep" onblur="pesquisacep(this.value);" maxlength="10" onkeydown="javascript: fMasc( this, mCEP );" required>
                                  </div>

                                  <div class="form-group col-sm-8">
                                    <label>Logradouro</label>
                                    <input name="logradouro" id="rua" type="text" placeholder="Infome o endereço" class="form-control" required>
                                  </div>

                                  <div class="form-group col-sm-2">
                                    <label>Número</label>
                                    <input name="endNumero" id="endNumero" type="number" placeholder="Nº 1234" class="form-control" required>
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
                                    <input name="estado" id="uf" type="text" class="form-control" required>                                 
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

                            <!--ABA CONSULTAR-->
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
                                              <b>COREN</b>
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

                                          $sql = "select nome,coren,email,datacadastro,bairro,cep,cidade,complemento,coren,datacadastro,datanasc,email,estado,fixo,idenfermeiro,logradouro,nome,numero,sexo,turno from enfermeiro";

                                          $consulta = mysqli_query($conexao,$sql); 
                                          if ($resultado = $consulta){
                                            while ($obj = $resultado->fetch_object()){ 
                                              ?>
                                              <tr>
                                                <th ><?php printf($obj->coren) ?></th>
                                                <td ><?php printf($obj->nome) ?></td>
                                                <td ><?php printf($obj->email) ?></td>
                                                <td ><?php printf($obj->datacadastro) ?></td>
                                                <td>
                                                <!--<a data-toggle='tooltip' data-placement='top'  data-toggle="modal" data-target="#exampleModal">
                                                </a>-->

                                                <button type="button" title='modificar' style='margin-right:5px' class='btn btn-primary btn-sm' data-toggle="modal" data-target="#exampleModal">
                                                  <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                                                </button>
                                                
                                                <!-- Modal -->
                                                <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  
                                                  <div class="modal-dialog modal-lg" role="document">
                                                    
                                                    <div class="modal-content">
                                                      
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Editar Enfermeiro</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                      </div>
                                                      
                                                      <div class="modal-body">
                                                        <div class="tab-pane fade in active" id="Cadastrar">
                                                          <div class="row">
                                                            <form role="form" action="cadastro_enf.php" method="post">

                                                              <div class="form-group-sm col-sm-6">
                                                                <label>CPF</label>
                                                                <input name="cpf" type="text" class="form-control" placeholder="Digite o CPF" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" onkeydown="javascript: fMasc( this, mCPF );" maxlength="14" value = "" required>
                                                              </div>
                                                              
                                                              <div class="form-group-sm col-md-6">
                                                                <label>COREN</label>
                                                                <input name="coren" type="text" class="form-control" placeholder="Informe o número do COREN" value = "<?php printf($obj->coren) ?>" required autofocus>
                                                              </div>                            

                                                              <div class="form-group-sm col-md-6">
                                                                <label>Nome</label>
                                                                <input name="nome" type="text" class="form-control" placeholder="Digite seu nome" pattern="[a-zA-Z\s]+$" value = "<?php printf($obj->nome) ?>" required>
                                                              </div>

                                                              <div class="form-group-sm col-sm-6">
                                                               <label>E-mail</label>
                                                               <input name="email" type="email" class="form-control" placeholder="Digite seu e-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value = "<?php printf($obj->email) ?>">
                                                             </div>
                                                             
                                                             <div class="form-group-sm col-sm-6">
                                                              <label>Telefone Fixo</label>
                                                              <input name="fixo" type="phone" class="form-control" placeholder="Digite seu telefone" id="telefone" maxlength="13" onkeydown="javascript: fMasc( this, mTel );" value = "<?php printf($obj->fixo) ?>">
                                                              <!--pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$"-->
                                                            </div>

                                                            <div class="form-group-sm col-sm-6">
                                                              <label>Telefone Móvel</label>
                                                              <input name="celular" type="phone" class="form-control" placeholder="Digite seu número de celular" maxlength="14" id="celular" onkeydown="javascript: fMasc( this, mTel );" value = "<?php printf($obj->numero) ?>">
                                                              <!-- pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$"-->
                                                            </div>

                                                            <div class="form-group-sm col-sm-6">
                                                              <label>Data de Nascimento</label>
                                                              <input name="dataNasc" type="date" class="form-control" placeholder="dd/mm/aaaa" id="data" value = "<?php printf($obj->datanasc) ?>" required>
                                                            </div>                            

                                                            <div class="form-group-sm col-sm-6">
                                                              <label>Sexo</label>
                                                              <select class="form-control mr-sm-2" name="sexo" required>
                                                                <option>Selecione</option>
                                                                <option>Masculino</option>
                                                                <option>Feminino</option>
                                                              </select>
                                                            </div>

                                                            <div class="form-group-sm col-md-6">
                                                              <label>Especialidade</label>
                                                              <input name="especialidade" type="text" class="form-control" placeholder="Digite a especialidade" pattern="[a-zA-Z\s]+$" value = "" required>
                                                            </div>

                                                            <div class="form-group-sm col-sm-6">
                                                              <label>CEP</label>
                                                              <input name="cep" id="cep" type="text" class="form-control" placeholder="Informe o CEP" id="cep" onblur="pesquisacep(this.value);" maxlength="10" onkeydown="javascript: fMasc( this, mCEP );" value = "<?php printf($obj->cep) ?>" required>
                                                            </div>

                                                            <div class="form-group-sm col-sm-6">
                                                              <label>Logradouro</label>
                                                              <input name="logradouro" id="rua" type="text" placeholder="Infome o endereço" class="form-control" value = "<?php printf($obj->logradouro) ?>"  required>
                                                            </div>

                                                            <div class="form-group-sm col-sm-6">
                                                              <label>Número</label>
                                                              <input name="endNumero" id="endNumero" type="number" placeholder="Nº 1234" class="form-control" value = "<?php printf($obj->numero) ?>"  required>
                                                            </div>

                                                            <div class="form-group-sm col-sm-6">
                                                              <label>Complemento</label>
                                                              <input name="complemento" id="complemento" type="text" placeholder="Complemento" class="form-control" value = "<?php printf($obj->complemento) ?>"  required>
                                                            </div>

                                                            <div class="form-group-sm col-sm-6">
                                                              <label>Bairro</label>
                                                              <input name="bairro" id="bairro" type="text" placeholder="Informe o bairro" class="form-control" value = "<?php printf($obj->bairro) ?>"  required>
                                                            </div>

                                                            <div class="form-group-sm col-sm-6">
                                                              <label>Cidade</label>
                                                              <input name="cidade" id="cidade" type="text" placeholder="Informe a cidade" class="form-control" value = "<?php printf($obj->cidade) ?>"  required>
                                                            </div>

                                                            <div class="form-group-sm col-sm-6">
                                                              <label>UF</label> 
                                                              <input name="estado" id="uf" type="text" class="form-control" value = "<?php printf($obj->estado) ?>"  required>                                 
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

                                                    </div>
                                                    
                                                       <!-- <div class="modal-footer">
                                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                          <button type="button" class="btn btn-primary">Save changes</button>                                                        
                                                        </div>-->

                                                      </div>
                                                    </div>
                                                  </div>

                                                  <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-sm" href="" onclick="">
                                                    <i style="color:#fff" class="glyphicon glyphicon-trash"></i>
                                                  </a>
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
                                </div>
                              </div>
                            </div>
                            <!--ABAS-->
                          </div>
                          <!-- ABAS BODY-->
                        </div>
                        <!-- /#page-wrapper -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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

            <!-- Page-Level Demo Scripts - Tables - Use for reference -->
            <script>
              $(document).ready(function() {
                $('#dataTables-example').DataTable({
                  responsive: true
                });
              });
            </script>

          </body>

          </html>
