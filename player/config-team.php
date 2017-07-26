<?php
  session_start();

  if (!isset($_SESSION['info-player']))
    header('Location: ../');
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sem Sucesso FS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="../flat/dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="../flat/dist/css/flat-ui.css" rel="stylesheet">

    <link rel="shortcut icon" href="../flat/dist/img/photo.ico">

    <link rel="stylesheet" href="../js/iziToast-master/dist/css/iziToast.min.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="../../dist/js/vendor/html5shiv.js"></script>
      <script src="../../dist/js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <style>
      
    </style>
    <div class="container">
      <nav role="navigation" class="navbar navbar-inverse navbar-embossed" style="background-color: #F63131;">
        <div class="navbar-header">
          <button data-target="#bs-example-navbar-collapse-2" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand">Sem Sucesso FS</a>
        </div>
        <div id="bs-example-navbar-collapse-2" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Gerenciar Time</a></li>
            <li><a href="#" onclick=""><span class="glyphicon glyphicon-bullhorn"></span> 3</a></li>
            <li><a href="logoff.php" onclick=""><span class="glyphicon glyphicon-off"></span> Sair</a></li>
            
          </ul>
        </div>
      </nav>
      
      <div class="row" id="home-team">
        <center>
          <img src="../img/photo.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236">
        </center>
      </div>

      <div class="row" id="notification">
      <h3 class="demo-panel-title">Notificações de novos atletas</h3> 
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Notificação</th>
              <th>Data</th>
            </tr>
          </thead>
          <tbody id="list-new-player">
            
          </tbody>
        </table>
      </div>

      <div class="row" id="agenda-team">
      <h3 class="demo-panel-title">Agenda de Jogos</h3> 
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Adversário</th>
              <th>Data</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>TIME A</td>
              <td>25/02/2017</td>
            </tr>
            <tr>
              <td>TIME B</td>
              <td>25/02/2017</td>
            </tr>
            <tr>
              <td>TIME C</td>
              <td>25/02/2017</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
    <!-- /.container -->

    <footer style="background-color: #F63131;">
      <div class="container">
        <div class="row">
          <div>
            <center>
              <h3 class="footer-title">Sem Sucesso FS</h3>
              <p>
                Desenvolvido por Frog SI :-)
              </p>
            </center>
          </div> 
        </div>
      </div>
    </footer>

    <!-- Modal Login-->
    <div class="modal fade" id="modal-login" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Login</h4>
          </div>
          <div class="modal-body">
            
            <div class="row">
              <div class="col-md-12">
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label for="login-user" class="col-lg-2 control-label">Login</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="login-user" placeholder="Login do Atleta">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="key-user" class="col-lg-2 control-label">Senha</label>
                    <div class="col-lg-10">
                      <input type="password" class="form-control" id="key-user" placeholder="Senha do Atleta">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button type="button" class="btn btn-danger" id="bt-access">Entrar</button>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <a href="#">Esqueceu a senha?</a>
                    </div>
                  </div>
                </form>
              </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
          </div>
        </div>
        
      </div>
    </div>

    <!-- Modal Register-->
    <div class="modal fade" id="modal-register" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Notificação de novo Atleta</h4>
          </div>
          <div class="modal-body">
            
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <center>
                    <h8>Cadastra-se, crie seu time ou participe de uma equipe :-)</h8>
                  </center>
                </div>
              </div>
              <div class="col-md-12">
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label for="name-user" class="col-lg-2 control-label">Nome</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="name-user" placeholder="Nome do Atleta" maxlength="100">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="login-user-register" class="col-lg-2 control-label">Login</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="login-user-register" placeholder="Login do Atleta" maxlength="20">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="key-user-register" class="col-lg-2 control-label">Senha</label>
                    <div class="col-lg-10">
                      <input type="password" class="form-control" id="key-user-register" placeholder="Senha do Atleta" maxlength="20">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email-user" class="col-lg-2 control-label">E-mail</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="email-user" placeholder="E-mail do Atleta" maxlength="100">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button type="button" class="btn btn-danger" onclick="openFrm('name-team');">Participar de um time</button>
                      <button type="button" class="btn btn-danger" onclick="openFrm('team');">Criar um time</button>
                    </div>
                  </div>
                  <div class="form-group" id="frm-team">
                    <label for="sel-team" class="col-lg-2 control-label">Times</label>
                    <div class="col-lg-10">
                      <select class="form-control" id="sel-team">
                        <option value="0">Escolha um time</option>
                        
                      </select>
                      <p class="img-comment"><strong>OBS:</strong> Para participar do time, você tem que aguardar a aprovação do dono do time!</p>
                    </div>
                  </div>
                  <div class="form-group" id="frm-name-team" style="display: none;">
                    <label for="name-team" class="col-lg-3 control-label">Nome do time</label>
                    <div class="col-lg-9">
                      <input type="text" class="form-control" id="name-team" placeholder="Escreva o nome do seu time" maxlength="100">
                      <p class="img-comment"><strong>OBS:</strong> Você será o dono do time. Agende jogos com outros times, gerencie jogadores, aplique um logo para o seu time e insira fotos na galeria de imagens do time.</p>
                    </div>
                  </div>
                  <div align="center">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button type="button" class="btn btn-danger" id="bt-save-user">Salvar</button>
                    </div>
                  </div>
                </form>
              </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
          </div>
        </div>
        
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../flat/dist/js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../flat/dist/js/flat-ui.min.js"></script>
    <!-- Flat UI -->
    <script src="../flat/docs/assets/js/application.js"></script>
    <!-- Alerts iziToast -->
    <script type="text/javascript" src="../js/iziToast-master/dist/js/iziToast.min.js"></script>

    <script type="text/javascript">

      function getNotification()
      {
        var func = {
          get: function() {
            $.ajax({
              type: 'POST',
              dataType: 'json',
              url: '../controller/controller.php',
              async: true,
              data: {
                arquivo:        'manager-team/managerTeam.php', 
                type:           'getNotification'
              },
              beforeSend: function() {
                
              },
              success: function(result, status, request) {
                if (result[0] == 'result') {
                  func.alertError('ATENÇÃO!', 'Seu acesso não é permitido aqui!', 'center');
                  return;
                }
                
                var conteudo = '';
                for (var i = 0; i < result.length; i++) {
                  conteudo += "<tr style='cursor: pointer;' onclick='openModalNewAthlete({id:" + result[i].id + ", name:\"" + result[i].nome + "\"})'>" +
                                "<td>O atleta <b>" + result[i].nome + "</b> deseja participar do seu time!</td>" +
                                "<td>" + result[i].dt_registro.substr(8, 2) + "/" + result[i].dt_registro.substr(5, 2) + "/" + result[i].dt_registro.substr(0, 4) + "</td>" +
                              "</tr>";
                }
                $("#list-new-player").html(conteudo);
                console.log(result);
                
              },
              error: function(request, status, erro) {
                func.alertError('Erro!', request.responseText, 'center');    
              },
              complete: function() {
                
              }
            });
          },
          alertError: function(title, message, position) {
            iziToast.error({
              title: title,
              message: message,
              position: position
            });
          },
          alertWarning: function(title, message, position) {
            iziToast.warning({
              title: title,
              message: message,
              position: position
            });
          },
          alertSuccess: function(title, message, position) {
            iziToast.success({
              title: title,
              message: message,
              position: position
            });
          }
        };
        func.get();
      }
      getNotification();

      function openModalNewAthlete( args )
      {

        console.log(args);
      }

    </script>

  </body>
</html>
