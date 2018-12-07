
<!DOCTYPE html>
<html lang="pt-br">
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

  <script type="text/javascript">
    
    function compararSenha( ){

      senha = document.getElementById('senha').value;
      senhaConfirm = document.getElementById('senhaConfirm').value;    

      if (senha != senhaConfirm)
      {
        document.getElementById('divSenha').className = 'form-group col-sm-6 has-error';
        document.getElementById('divsenhaConfirm').className = 'form-group col-sm-6 has-error';
        alert("Senhas diferentes!");
        return false;     
      }
      else{
        document.formUser.submit();

      }      
        /*
        document.getElementById('senha').className = 'form-control is-valid';
        document.getElementById('senhaConfirm').className = 'form-control is-valid';
        confirm_password.setCustomValidity('');
        */
    } 

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
                      <b>USUÁRIOS</b>
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
                            <form role="form" id="formUser" action="cadastro_usuario.php" method="post" onsubmit="return compararSenha();">                                                                    

                              <div class="form-group col-sm-7">
                                <label>Nome</label>
                                <input name="nome" type="text" class="form-control" placeholder="Nome Completo" required autofocus>
                              </div>

                              <div class="form-group col-sm-5">
                                <label>Usuário</label>
                                <input name="usuario" type="text" class="form-control" placeholder="Usuário" required="required">
                              </div>

                              <div class="form-group col-sm-6">
                                <label>E-mail</label>
                                <input name="email" type="email" class="form-control" placeholder="E-mail" required="required">
                              </div>

                              <div class="form-group col-sm-6">
                                <label>Perfil</label>
                                <select name="perfil" class="form-control mr-sm-2" required="required">
                                  <option>Médico</option>
                                  <option>Enfermeiro</option>
                                  <option>Téc. Enfermagem</option>
                                  <option>Administrador</option>                                        
                                </select>
                              </div>                                    

                              <div class="form-group col-sm-6" id="divSenha" required="required">
                                <label>Senha</label>
                                <input name="senha" id="senha" type="password" class="form-control is-invalid" placeholder="Senha" pattern=".{8,}" title="No mínimo 8 caracteres">
                              </div>

                              <div class="form-group col-sm-6" id="divsenhaConfirm" required="required">
                                <label>Confirmar Senha</label>
                                <input name="senhaConfirm" id="senhaConfirm" type="password" class="form-control" placeholder="Confirmar Senha" pattern=".{8,}" title="No mínimo 8 caracteres">
                              </div>

                              <div class="col-md-9">
                                <!--alinhamento dos Botões-->
                              </div>

                              <div class="col-md-3 col-sm-12 col-xs-12">
                                <button type="submit" class="btn btn-primary btn-block">SALVAR</button>
                              </div> 
                            </form>
                          </div>                                                                  
                        </div>

                        <div class="tab-pane fade" id="Consultar">
                          
                          <div class="row">

                            <form role="form">
                              <div class="form-group col-sm-12">
                                <label>Buscar por</label>                                        
                              </div>
                            </form>

                            <form role="form">                                    
                             
                              <div class="form-group col-sm-2">                                                                                 
                                <select class="form-control">
                                  <option>Nome</option>
                                  <option>Usuário</option>
                                  <option>Perfil</option>                                            
                                </select>                                        
                              </div>

                              <div class="form-group col-sm-8">                                                                            
                                <input name="" type="search" class="form-control" placeholder="Descreva o que deseja buscar">
                              </div>

                              <div class="form-group col-sm-2">                                       
                                <button class="btn btn-primary btn-block" type="button"><i class="fa fa-search"></i> Buscar</button>
                              </div>

                            </form>
                            <br>                                    
                            <!--tabelas-->
                            <div class="table-responsive col-xs-12 col-sm-12 col-md-12">
                              <label>Selecione o usuário para editar:</label>
                              <table class="table table-bordered table-striped">
                                <thead>
                                  <tr>
                                    <th>
                                      Usuário
                                    </th>
                                    <th>
                                      <small>Nome</small>
                                    </th>
                                    <th>
                                      <small>Perfil</small>
                                    </th>
                                    <th>
                                      <small>E-mail</small>
                                    </th>                                              
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th class="text-muted"></th>
                                    <td class="text-muted"></td>
                                    <td class="text-muted"></td>
                                    <td class="text-muted"></td>
                                  </tr>
                                  <tr>
                                    <th class="text-muted"></th>
                                    <td class="text-muted"></td>
                                    <td class="text-muted"></td>
                                    <td class="text-muted"></td>
                                  </tr>
                                  <tr>
                                    <th class="text-muted"></th>
                                    <td class="text-muted"></td>
                                    <td class="text-muted"></td>
                                    <td class="text-muted"></td>
                                  </tr>
                                  
                                </tbody>
                              </table>
                            </div> 

                            <form role="form">                                                                    

                              <div class="form-group col-sm-7">
                                <label>Nome</label>
                                <input name="nome" type="text" class="form-control" placeholder="Nome Completo" pattern="[a-zA-Z\s]+$" required autofocus>
                              </div>

                              <div class="form-group col-sm-5">
                                <label>Usuário</label>
                                <input name="nome" type="text" class="form-control" placeholder="Usuário" required>
                              </div>

                              <div class="form-group col-sm-6">
                                <label>E-mail</label>
                                <input name="" type="email" class="form-control" placeholder="E-mail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                              </div>

                              <div class="form-group col-sm-6">
                                <label>Perfil</label>
                                <select name="perfil" class="form-control mr-sm-2" required="required">
                                  <option>Médico</option>
                                  <option>Enfermeiro</option>
                                  <option>Téc. Enfermagem</option>
                                  <option>Administrador</option>                                        
                                </select>
                              </div>                                    

                              <div class="form-group col-sm-6" required="required">
                                <label>Senha</label>
                                <input name="" type="password" class="form-control" placeholder="Senha" pattern=".{8,}" title="No mínimo 8 caracteres">
                              </div>

                              <div class="form-group col-sm-6" required="required">
                                <label>Confirmar Senha</label>
                                <input name="" type="password" class="form-control" placeholder="Confirmar Senha" pattern=".{8,}" title="No mínimo 8 caracteres">
                              </div>
                            </form>

                            <br>

                            <div class="col-md-6 col-sm-6">
                              <!--alinhamento dos Botões-->
                            </div>

                            <div class="col-md-3 col-sm-3 col-xs-6">
                              <button type="button" class="btn btn-danger btn-block">EXCLUIR</button>
                            </div>

                            <div class="col-md-3 col-sm-3 col-xs-6">
                              <button type="button" class="btn btn-success btn-block">SALVAR</button>
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

        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>

      </body>

      </html>
