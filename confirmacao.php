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
          <center>
            <a class="navbar-brand">Sem Sucesso FS - Confirmação de Cadastro</a>
          </center>
        </div>
      </nav>

      <div class="row" id="home-team">
        <center>
          <img src="img/photo.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236">
        </center>
      </div>

      <div class="row" align="center">
        <h3 class="demo-panel-title" id="local-result"></h3> 
      </div>

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
    </div>

    <!-- jQuery (necessary for Bootstrap"s JavaScript plugins) -->
    <script src="flat/dist/js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="flat/dist/js/flat-ui.min.js"></script>
    <!-- Flat UI -->
    <script src="flat/docs/assets/js/application.js"></script>
    <!-- Alerts iziToast -->
    <script type="text/javascript" src="js/iziToast-master/dist/js/iziToast.min.js"></script>

    <script type="text/javascript">
      var query = location.search.slice(1);
      var partes = query.split('&');
      var data = {};
      partes.forEach(function (parte) {
          var chaveValor = parte.split('=');
          var chave = chaveValor[0];
          var valor = chaveValor[1];
          data[chave] = valor;
      });
      console.log(data);

      function confirmUser(data)
      {
        if (typeof(data) != 'undefined') {

          var func = {
            validar: function() {
              $.ajax({
                type: 'POST',
                dataType: 'json',
                url: 'controller/controller.php',
                async: true,
                data: {
                  args:           data,
                  arquivo:        'team/team.php', 
                  type:           'confirmUser'
                },
                beforeSend: function() {
                  
                },
                success: function(result, status, request) {
                  if (result[0] == 'ok') {
                    func.alertSuccess('Tudo certo!', 'E-mail confirmado com sucesso!', 'center');
                    $("#local-result").html("<strong>Tudo certo!</strong>E-mail confirmado com sucesso! Click <a href='index.php'>aqui</a> para ir para a página principal.");
                    return;
                  }
                  console.log(result);
                  func.alertError('Erro!', result.responseText, 'center');
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

          func.validar();
          return;
        }
        $("#local-result").html('Parâmetros incorretos ou token inválido!');
      }
      confirmUser(data);
    </script>

  </body>
</html>
