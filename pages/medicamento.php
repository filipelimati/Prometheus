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

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

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
            <br/>

              <div class="row">
                <div class="col-lg-12">
                  <div class="panel panel-primary">

                    <div class="panel-heading">
                      <b>MEDICAMENTOS</b>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">

                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#Cadastrar" data-toggle="tab">Cadastrar</a>
                        </li>
                        <li><a href="#Consultar" data-toggle="tab">Consultar</a>
                        </li>
                      </ul>

                      <br>

                      <div class="tab-content">
                        <div class="tab-pane fade in active" id="Cadastrar">                                  
                          <div class="row">
                            <form role="form" action="cadastro_medicamento.php" method="post">

                              <div class="form-group col-sm-6">
                                <label>Nome</label>
                                <input name="nome" type="text" class="form-control" placeholder="Nome do Medicamento" pattern="[a-zA-Z\s]+$" required>
                              </div>

                              <div class="form-group col-sm-6">
                                <label>Laboratório</label>
                                <input name="laboratorio" type="text" class="form-control" placeholder="Laboratório" required>
                              </div>

                              <div class="form-group col-sm-12">
                                <label>Descrição</label>
                                <textarea name="descricao" class="form-control" rows="3"></textarea>
                              </div>

                              <div class="form-group col-sm-6">
                                <label>Princípio Ativo</label>
                                <input name="principioAtivo" type="text" class="form-control" placeholder="Princípio atívo da medicação" required>
                              </div>                            

                              <div class="form-group col-sm-6">
                                <label>Quantidade</label><br>
                                <input name="qtd" type="number" class="form-control" placeholder="Quantidade" required>
                              </div>

                              <div class="form-group col-sm-6">
                                <label>Tarja</label>
                                <select name="tarja" class="form-control mr-sm-2" required>
                                  <option>Vermelha (Com retenção da Receita)</option>
                                  <option>Vermelha (Sem retenção da Receita)</option>
                                  <option>Preta</option>
                                  <option>Amarela</option>
                                  <option>Sem Tarja</option>
                                </select>
                              </div>

                              <div class="form-group col-sm-6">
                                <label>Uso Contínuo</label>
                                <select name="uso" class="form-control mr-sm-6" required>
                                  <option>Sim</option>
                                  <option>Não</option>
                                </select>
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

                        <div class="tab-pane fade" id="Consultar">                        
                          <div class="row">
                            <div class="col-lg-12">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              Consulta de Cadastros:
                            </div>
                            <div class="panel-body">
                              <div class="table-responsive">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="tmed"> 
                                  <thead>
                                    <tr>
                                      <th>
                                        <b>CRM</b>
                                      </th>
                                      <th>
                                        <b>NOME</b>
                                      </th>
                                      <th>
                                        <b>ESPECIALIDADE</b>
                                      </th>
                                      <th>
                                        <b>EMAIL</b>
                                      </th>
                                      <th>
                                        <b>AÇÕES</b>
                                      </th>                                                    
                                    </tr>
                                  </thead>
                                  <tbody>

                                    <?php

                                      include_once("conexao.php");

                                      $sql = "SELECT nome,laboratorio,descricao,princ_ativo,quantidade,tarja,uso_cont FROM medicamento";

                                      $consulta = mysqli_query($conexao,$sql); 
                                      if ($resultado = $consulta){
                                        while ($obj = $resultado->fetch_object()){ 
                                          ?>
                                          <tr>
                                            <th ><?php printf($obj->nome) ?></th>
                                            <td ><?php printf($obj->laboratorio) ?></td>
                                            <td ><?php printf($obj->tarja) ?></td>
                                            <td ><?php printf($obj->quantidade) ?></td>
                                            <td>
                                            
                                              <button type="button" 
                                                class="btn btn-xs btn-warning" 
                                                data-toggle="modal" 
                                                data-target="#exampleModal"
                                                data-whateveridmedico="<?php echo $obj->idmedico; ?>"
                                                data-whatevercpf="<?php echo $obj->cpf; ?>" 
                                                data-whatevercrm="<?php echo $obj->crm; ?>" 
                                                data-whateverespecial="<?php echo $obj->especial; ?>" 
                                                data-whatevernome="<?php echo $obj->nome; ?>" 
                                                data-whateveremail="<?php echo $obj->email; ?>" 
                                                data-whateverfixo="<?php echo $obj->fixo; ?>" 
                                                data-whatevercelular="<?php echo $obj->celular; ?>" 
                                                data-whateverdataNasc="<?php echo $obj->datanasc; ?>" 
                                                data-whateversexo="<?php echo $obj->sexo; ?>" 
                                                data-whatevercep="<?php echo $obj->cep; ?>"   
                                                data-whateverlogradouro="<?php echo $obj->logradouro; ?>" 
                                                data-whatevernumero="<?php echo $obj->numero; ?>" 
                                                data-whatevercomplemento="<?php echo $obj->complemento; ?>" 
                                                data-whateverbairro="<?php echo $obj->bairro; ?>" 
                                                data-whatevercidade="<?php echo $obj->cidade; ?>" 
                                                data-whateverestado="<?php echo $obj->estado; ?>">
                                                Editar
                                              </button>

                                              <button type="button" class="btn btn-xs btn-danger">Apagar</button>
                                              
                                              <!-- Modal -->
                                              <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                
                                                <div class="modal-dialog modal-lg" role="document">
                                                  
                                                  <div class="modal-content">                                                  
                                                    <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel">Editar Médico</h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>
                                                    
                                                    <div class="modal-body">
                                                      <div class="row">
                                                        <form role="form" action="edita_med.php" method="post">

                                                          <input name="idmedico" type="hidden" class="form-control" id="idmedico" value="">

                                                          <div class="form-group col-sm-3">
                                                            <label>CPF</label>
                                                            <input name="cpf" type="text" id="cpf" class="form-control" placeholder="Digite o CPF" onkeydown="javascript: fMasc( this, mCPF );" onblur="javascrip: TestaCPF(cpf);" maxlength="14" required>
                                                          </div>
                                                          
                                                          <div class="form-group col-md-2">
                                                            <label>CRM</label>
                                                            <input name="crm" type="text" id="crm" class="form-control" placeholder="Informe o CRM" required autofocus>
                                                          </div>

                                                          <div class="form-group col-md-7">
                                                            <label>Especialidade</label>
                                                            <input name="especial" id="especial" type="text" class="form-control" placeholder="Informe a especialidade" required autofocus>
                                                          </div>
                                                          
                                                          <div class="form-group col-md-6">
                                                              <label>Nome</label>
                                                              <input name="nome" id="nome" type="text" class="form-control" placeholder="Digite seu nome" pattern="[a-zA-Z\s]+$" required>
                                                          </div>                            

                                                          <div class="form-group col-sm-6">
                                                             <label>E-mail</label>
                                                             <input name="email" id="email" type="email" class="form-control" placeholder="Digite seu e-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                                                          </div>                            

                                                          <div class="form-group col-sm-3">
                                                            <label>Telefone Residencial</label>
                                                            <input name="fixo" type="phone" class="form-control" placeholder="Informe o telefone" id="fixo" maxlength="13" onkeydown="javascript: fMasc( this, mTel );">
                                                          </div>

                                                          <div class="form-group col-sm-3">
                                                            <label>Telefone Celular</label>
                                                            <input name="celular" type="phone" class="form-control" placeholder="Informe o Celular" maxlength="14" id="celular" onkeydown="javascript: fMasc( this, mTel );">
                                                          </div>

                                                          <div class="form-group col-sm-3">
                                                            <label>Data de Nascimento</label>
                                                            <input name="dataNasc" type="date" class="form-control" placeholder="dd/mm/aaaa" id="data" required>
                                                          </div>                            

                                                          <div class="form-group col-sm-3">
                                                            <label>Sexo</label>
                                                            <select name="sexo" id="sexo" class="form-control mr-sm-2" required>
                                                              <option>Selecione</option>
                                                              <option>Masculino</option>
                                                              <option>Feminino</option>
                                                            </select>
                                                          </div>

                                                          <div class="form-group col-sm-2">
                                                            <label>CEP</label>
                                                            <input name="cep" id="cep" type="text" class="form-control" placeholder="Informe o CEP" id="cep" maxlength="10" onkeydown="javascript: fMasc( this, mCEP );" onblur="pesquisacep(this.value);" required>
                                                          </div>

                                                          <div class="form-group col-sm-8">
                                                            <label>Logradouro</label>
                                                            <input name="logradouro" id="rua" type="text" placeholder="Infome o endereço" class="form-control" required>
                                                          </div>

                                                          <div class="form-group col-sm-2">
                                                            <label>Número</label>
                                                            <input name="endNumero" id="numero" type="number" placeholder="Nº 1234" class="form-control" required>
                                                          </div>

                                                          <div class="form-group col-sm-6">
                                                            <label>Complemento</label>
                                                            <input name="complemento" id="complemento" type="text" placeholder="Complemento" class="form-control" required>
                                                          </div>

                                                          <div class="form-group col-sm-3">
                                                            <label>Bairro</label>
                                                            <input name="bairro" id="bairro" type="text" placeholder="Informe o bairro" class="form-control" required>
                                                          </div>

                                                          <div class="form-group col-sm-2">
                                                            <label>Cidade</label>
                                                            <input name="cidade" id="cidade" type="text" placeholder="Informe a cidade" class="form-control" required>
                                                          </div>                            

                                                          <div class="form-group col-sm-1">
                                                            <label>UF</label>
                                                            <input type="text" name="estado" id="estado" class="form-control mr-sm-2" required>                                
                                                          </div>

                                                          <div class="form-group col-sm-12">
                                                            <hr></hr>
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
                                                </div>
                                              </div>
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
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-lg-12 -->
              </div>
              <!-- /.row -->
            
            <!-- /.container-fluid -->
          </div>
          <!-- /#page-wrapper -->

          <!-- jQuery -->
          <script src="../vendor/jquery/jquery.min.js"></script>

          <!-- Bootstrap Core JavaScript -->
          <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

          <!-- Metis Menu Plugin JavaScript -->
          <script src="../vendor/metisMenu/metisMenu.min.js"></script>

          <!-- Custom Theme JavaScript -->
          <script src="../dist/js/sb-admin-2.js"></script>

        </body>

        </html>
