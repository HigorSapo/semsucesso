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
            <li><a href="config-team.php">Gerenciar Time</a></li>
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
                <img src="../img/perfil.png" alt="Compas" class="tile-image big-illustration">
                <div>Cristiano Ronaldo</div>
                <div>50 Gols</div>
              </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
              <div class="tile">
                <h3 class="tile-title">2° Lugar</h3>
                <img src="../img/perfil.png" alt="Compas" class="tile-image big-illustration">
                <div>Cristiano Ronaldo</div>
                <div>50 Gols</div>
              </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
              <div class="tile">
                <h3 class="tile-title">3° Lugar</h3>
                <img src="../img/perfil.png" alt="Compas" class="tile-image big-illustration">
                <div>Cristiano Ronaldo</div>
                <div>50 Gols</div>
              </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
              <div class="tile">
                <h3 class="tile-title">4° Lugar</h3>
                <img src="../img/perfil.png" alt="Infinity-Loop" class="tile-image big-illustration">
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
                <img src="../img/perfil.png" alt="Compas" class="tile-image big-illustration">
                <div>Cristiano Ronaldo</div>
                <div>50 Gols</div>
              </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
              <div class="tile">
                <h3 class="tile-title">6° Lugar</h3>
                <img src="../img/perfil.png" alt="Compas" class="tile-image big-illustration">
                <div>Cristiano Ronaldo</div>
                <div>50 Gols</div>
              </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
              <div class="tile">
                <h3 class="tile-title">7° Lugar</h3>
                <img src="../img/perfil.png" alt="Compas" class="tile-image big-illustration">
                <div>Cristiano Ronaldo</div>
                <div>50 Gols</div>
              </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
              <div class="tile">
                <h3 class="tile-title">8° Lugar</h3>
                <img src="../img/perfil.png" alt="Infinity-Loop" class="tile-image big-illustration">
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
            <img src="../img/foto-sobre.jpg" alt="example-image" class="img-rounded img-responsive">
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
    <script src="../flat/dist/js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../flat/dist/js/flat-ui.min.js"></script>
    <!-- Flat UI -->
    <script src="../flat/docs/assets/js/application.js"></script>
    <!-- Alerts iziToast -->
    <script type="text/javascript" src="../js/iziToast-master/dist/js/iziToast.min.js"></script>

    <script type="text/javascript">

      
      
    </script>

  </body>
</html>
