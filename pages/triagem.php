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

  <script type="text/javascript">
    
    function compararSenha(senha, senhaConfirm){

      var senha = document.getElementById('senha').value;
      var senhaConfirm = document.getElementById('senhaConfirm').value;    

      if (senha != "" && senhaConfirm != "" && senha === senhaConfirm)
      {
        document.getElementById('senha').className = 'form-control is-valid';
        document.getElementById('senhaConfirm').className = 'form-control is-valid';
        confirm_password.setCustomValidity('');
      }
      else
      {
        document.getElementById('senha').className = 'form-control is-invalid';
        document.getElementById('senhaConfirm').className = 'form-control is-invalid';
        confirm_password.setCustomValidity("Senhas diferentes!");
      }
    }
    senha.onchange = validatePassword;
    senhaConfirm.onkeyup = validatePassword;

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
                      <b>TRIAGEM</b>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">                    

                      
                      <div class="tab-content">
                        <div class="tab-pane fade in active" id="Cadastrar">                                  
                          <div class="row">
                            <form role="form" action="cadastro_usuario.php" method="post">                                                                    

                              <div class="form-group col-sm-3">
                              	<label align="right">Data</label>
                              	<input name="data" type="data" class="form-control" required="required">
                              </div>

			                    <div class="form-group col-sm-6">
			                        <label>Criticidade</label>
			                        <select name="nivel" id="criticidade" class="form-control mr-sm-2" required>
			                            <option>Selecione o Nível</option>
			                            <option>Normal</option>
			                            <option>Atenção</option>
			                            <option>Crítico</option>
			                        </select>
			                    </div>                              

                              <div class="form-group col-sm-12">
                                <label>Nome</label>
                                <input name="nome" type="text" class="form-control" placeholder="Nome Completo" required autofocus>
                              </div>

                              <div class="form-group col-sm-6">
                                <label>CPF</label>
                                <input name="cpf" type="text" class="form-control" placeholder="CPF" required="required">
                              </div>

                              <div class="form-group col-sm-6">
                                <label>Idade</label>
                                <input name="idade" type="integer" class="form-control" placeholder="Idade" required="required">
                              </div>

                              <div class="form-group col-sm-6">
                              	<label>Doenças Infecciosas</label>
                              	<input name="doencas" type="text" class="form-control" placeholder="Doeças Contagiosas" required="required">
                              </div>

                              <div class="form-group col-sm-6">
                              	<label>Alergias</label>
                              	<input name="alergias" type="text" class="form-control" placeholder="Alergias" required="required">
                              </div>

                              <div class="form-group col-sm-6">
                              	<label>Cirurgias</label>
                              	<input name="cirurgias" type="text" class="form-control" placeholder="Cirurgias" required="required">
                              </div>

                              <div class="form-group col-sm-6">
                              	<label>Transfusão Sanguínea</label>
                              	<input name="transfusao" type="text" class="form-control" placeholder="Transfusão de Sangue" required="required">
                              </div>

                              <div class="form-group col-sm-6">
                              	<label>Medicamentos de Uso Contínuo</label>
                              	<input name="medcontinuo" type="text" class="form-control" placeholder="Medicamentos de Uso Contínuo" required="required">
                              </div>

                              <div class="form-group col-sm-6">
                              	<label>Outros</label>
                              	<input name="outros" type="text" class="form-control" placeholder="Outros" required="required">
                              </div>

                              <div class="form-group col-sm-12">
                              	<label>Observação</label><br>
                              	<textarea name="observacao" type="text" class="form-control"></textarea></br>
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
