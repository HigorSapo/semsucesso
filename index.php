<?php
  session_start();

  if (isset($_SESSION['info-player']))
    header('Location: player/');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sem Sucesso FS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="flat/dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="flat/dist/css/flat-ui.css" rel="stylesheet">

    <link rel="shortcut icon" href="flat/dist/img/photo.ico">

    <link rel="stylesheet" href="js/iziToast-master/dist/css/iziToast.min.css">

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
            <li><a href="#home-team">Home<span class="navbar-unread">1</span></a></li>
            <li><a href="#agenda-team">Agenda de Jogos</a></li>
            <li><a href="#resultados-team">Resultados</a></li>
            <li><a href="#altilharia-team">Artilharia</a></li>
            <li><a href="#sobre-team">Sobre o Time</a></li>
            <li><a href="#" onclick="openRegister();">Cadastre-se</a></li>
            <li><a href="#" onclick="openLogin();">Login</a></li>
          </ul>
        </div>
      </nav>
      
      <div class="row" id="home-team">
        <center>
          <img src="img/photo.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236">
        </center>
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

      <div class="row" id="resultados-team">
      <h3 class="demo-panel-title">Resultados dos Jogos</h3>
        <div>
          <h4>TIME A</h4>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Quadros</th>
                <th>Sem Sucesso</th>
                <th>TIME A</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1° Quadro</td>
                <td>5</td>
                <td>5</td>
              </tr>
              <tr>
                <td>2° Quadro</td>
                <td>5</td>
                <td>5</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div>
          <h4>TIME B</h4>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Quadros</th>
                <th>Sem Sucesso</th>
                <th>TIME B</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1° Quadro</td>
                <td>5</td>
                <td>5</td>
              </tr>
              <tr>
                <td>2° Quadro</td>
                <td>5</td>
                <td>5</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="row" id="altilharia-team">
        <center>
          <h3 class="demo-panel-title">Artilharia</h3>
        </center>
        <div class="col-lg-12">
          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
              <div class="tile">
                <h3 class="tile-title">1° Lugar</h3>
                <img src="img/perfil.png" alt="Compas" class="tile-image big-illustration">
                <div>Cristiano Ronaldo</div>
                <div>50 Gols</div>
              </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
              <div class="tile">
                <h3 class="tile-title">2° Lugar</h3>
                <img src="img/perfil.png" alt="Compas" class="tile-image big-illustration">
                <div>Cristiano Ronaldo</div>
                <div>50 Gols</div>
              </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
              <div class="tile">
                <h3 class="tile-title">3° Lugar</h3>
                <img src="img/perfil.png" alt="Compas" class="tile-image big-illustration">
                <div>Cristiano Ronaldo</div>
                <div>50 Gols</div>
              </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
              <div class="tile">
                <h3 class="tile-title">4° Lugar</h3>
                <img src="img/perfil.png" alt="Infinity-Loop" class="tile-image big-illustration">
                <div>Cristiano Ronaldo</div>
                <div>50 Gols</div>
              </div>
            </div>
            
          </div> <!-- /row -->
        </div>

        <div class="col-lg-12">
          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
              <div class="tile">
                <h3 class="tile-title">5° Lugar</h3>
                <img src="img/perfil.png" alt="Compas" class="tile-image big-illustration">
                <div>Cristiano Ronaldo</div>
                <div>50 Gols</div>
              </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
              <div class="tile">
                <h3 class="tile-title">6° Lugar</h3>
                <img src="img/perfil.png" alt="Compas" class="tile-image big-illustration">
                <div>Cristiano Ronaldo</div>
                <div>50 Gols</div>
              </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
              <div class="tile">
                <h3 class="tile-title">7° Lugar</h3>
                <img src="img/perfil.png" alt="Compas" class="tile-image big-illustration">
                <div>Cristiano Ronaldo</div>
                <div>50 Gols</div>
              </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
              <div class="tile">
                <h3 class="tile-title">8° Lugar</h3>
                <img src="img/perfil.png" alt="Infinity-Loop" class="tile-image big-illustration">
                <div>Cristiano Ronaldo</div>
                <div>50 Gols</div>
              </div>
            </div>
            
          </div> <!-- /row -->
        </div>
      </div> <!-- /row -->

      <div class="row" id="sobre-team">
      <center><h3 class="demo-panel-title">Sobre</h3></center>

        <div class="demo-type-example">
          <center>
            <img src="img/foto-sobre.jpg" alt="example-image" class="img-rounded img-responsive">
            <p>O time Sem Sucesso FS foi fundado no ano de 2017 por um grupo de amigos. Não subestime o time pelo nome, dentro de quadra o time faz muito "Sucesso".</p>
          </center>
        </div>

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
            <h4 class="modal-title">Cadastre-se</h4>
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
    <script src="flat/dist/js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="flat/dist/js/flat-ui.min.js"></script>
    <!-- Flat UI -->
    <script src="flat/docs/assets/js/application.js"></script>
    <!-- Alerts iziToast -->
    <script type="text/javascript" src="js/iziToast-master/dist/js/iziToast.min.js"></script>

    <script type="text/javascript">

      function openLogin()
      {
        $("#modal-login").modal("show");
      }

      function openRegister()
      {
        $("#modal-register").modal("show"); 
      }

      var statusFrmTeam = 'team';
      function openFrm( args )
      {
        switch (args) {
          case 'name-team':
            $("#frm-team").show();
            $("#frm-name-team").hide();
            statusFrmTeam = 'team'
            break;
          case 'team':
            $("#frm-name-team").show();
            $("#frm-team").hide();
            statusFrmTeam = 'nameTeam'
            break;
          default:

            break;
        }
      }

      function is_email(email)
      {
          er = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2,3}/; 
          if( er.exec(email) ) {
              return true;
          }
          return false;
      }

      $("#bt-access").click(function(){
        var login = $("#login-user").val();
        var key   = $("#key-user").val();

        var func = {
          validFields: function() {
            if (login == "") {
                func.alertWarning('Atenção!', 'O campo Login está vazio!', 'center');    
              return;
            }
            if (login.length <= 3) {
                func.alertWarning('Atenção!', 'O login do atleta tem que ser maior que 3 digitos!', 'center');    
              return;
            }
            if (key == "") {
                func.alertWarning('Atenção!', 'O campo Senha está vazio!', 'center');    
              return;
            }
            if (key.length <= 4) {
                func.alertWarning('Atenção!', 'A senha do atleta tem que ser maior que 4 digitos!', 'center');    
              return;
            }
            func.access();
          },
          access: function() {
            $.ajax({
              type: 'POST',
              dataType: 'json',
              url: 'controller/controller.php',
              async: true,
              data: {
                login:          login,
                key:            key,
                arquivo:        'access/access.php', 
                type:           'access'
              },
              beforeSend: function() {
                $("#bt-access").attr('disabled', true);
              },
              success: function(result, status, request) {
                console.log(result);
                var res = result[0];

                switch (res) {
                  case 'vazio':
                    func.alertWarning('Atenção!', 'Login ou senha estão incorretos', 'center');
                    break;
                  case 'without accesse':
                    func.alertWarning('Atenção!', 'Seu acesso foi bloqueado!', 'center');
                    break;
                  case 'token not validation':
                    func.alertWarning('Atenção!', 'Antes de acessar o sistema é preciso confirmar o cadastro que foi enviado no seu e-mail!', 'center');
                    break;
                  case 'ok':
                    window.location.href = 'player';
                    break;
                  default:
                    func.alertError('Atenção!', 'Ocorreu um erro ao acessar o sistema', 'center');
                    break;
                }
                  
              },
              error: function(request, status, erro) {
                func.alertError('Erro!', request.responseText, 'center');    
              },
              complete: function() {
                $("#bt-access").attr('disabled', false);
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
        func.validFields();

      });

      $("#bt-save-user").click(function(){
        var name      = $("#name-user").val();
        var login     = $("#login-user-register").val();
        var key       = $("#key-user-register").val();
        var email     = $("#email-user").val();
        var team      = $("#sel-team").val();
        var nameTeam  = $("#name-team").val();

        var func = {
          valid: function() {
            if (name == "") {
                func.alertError('Atenção!', 'O campo Nome está vazio!', 'center');    
              return;
            }
            if (name.length <= 4) {
                func.alertError('Atenção!', 'O nome do atleta tem que ser maior que 4 digitos!', 'center');    
              return;
            }
            if (login == "") {
                func.alertError('Atenção!', 'O campo Login está vazio!', 'center');    
              return;
            }
            if (login.length <= 3) {
                func.alertError('Atenção!', 'O login do atleta tem que ser maior que 3 digitos!', 'center');    
              return;
            }
            if (key == "") {
                func.alertError('Atenção!', 'O campo Senha está vazio!', 'center');    
              return;
            }
            if (key.length <= 4) {
                func.alertError('Atenção!', 'A senha do atleta tem que ser maior que 4 digitos!', 'center');    
              return;
            }
            if (email == "") {
                func.alertError('Atenção!', 'O campo E-mail está vazio!', 'center');    
              return;
            }
            if (!is_email(email)) {
                func.alertError('Atenção!', 'O e-mail está inválido!', 'center');    
              return;
            }
            if (statusFrmTeam == 'team' && team == 0) {
              func.alertError('Atenção!', 'Escolha um time!', 'center');    
              return;
            }
            if (statusFrmTeam == 'nameTeam') {
              if (nameTeam == "") {
                  func.alertError('Atenção!', 'O campo Nome do time está vazio!', 'center');    
                return;
              }
              if (nameTeam.length <= 4) {
                func.alertError('Atenção!', 'O nome do time tem que ser maior que 4 digitos!', 'center');    
                return;
              }
            }
            func.save();
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
          },
          save: function() {
            $.ajax({
              type: 'POST',
              dataType: 'json',
              url: 'controller/controller.php',
              async: true,
              data: {
                name:           name,
                login:          login,
                key:            key,
                email:          email,
                team:           team,
                nameTeam:       nameTeam,
                statusFrmTeam:  statusFrmTeam,
                arquivo:        'team/team.php', 
                type:           'saveUser'
              },
              beforeSend: function() {
                $("#bt-save-user").attr('disabled', true);
              },
              success: function(result, status, request) {
                console.log(result);
                var res = result[0];

                switch (res) {
                  case 'login exists':
                    func.alertWarning('Atenção!', 'Esse login já existe!', 'center');
                    break;
                  case 'email exists':
                    func.alertWarning('Atenção!', 'Esse e-mail já existe!', 'center');
                    break;
                  case 'team exists':
                    func.alertWarning('Atenção!', 'Esse time já existe!', 'center');
                    break;
                  case 'ok':
                    func.alertSuccess('Atenção!', 'Cadastro feito com sucesso! Confirme seu cadastro no seu e-mail!', 'center');
                    bilderFieldTeam();
                    break;
                }
                  
              },
              error: function(request, status, erro) {
                func.alertError('Erro!', request.responseText, 'center');    
              },
              complete: function() {
                $("#bt-save-user").attr('disabled', false);
              }
            });
          }
        };

        func.valid();

      });
      function bilderFieldTeam()
      {
        var func = {
          getTeam: function() {
            $.ajax({
              type: 'POST',
              dataType: 'json',
              url: 'controller/controller.php',
              async: true,
              data: {
                arquivo:        'team/team.php', 
                type:           'getTeam'
              },
              beforeSend: function() {
                
              },
              success: function(result, status, request) {
                func.bilderFieldTeam(result);
              },
              error: function(request, status, erro) {
                func.alertError('Erro!', request.responseText, 'center');    
              },
              complete: function() {
                
              }
            });
          },
          bilderFieldTeam: function(result) {
            if (result[0] != 'vazio') {
              var conteudo = "<option value='0'>Escolha um time</option>";

              for (var i = 0; i < result.length; i++) {
                conteudo += "<option value='" + result[i].id + "'>" + result[i].name_team + "</option>";
              }

              $('#sel-team').html(conteudo);
              return;
            }
            console.log(result);
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
        func.getTeam();
      }
      bilderFieldTeam();
      
    </script>

  </body>
</html>
