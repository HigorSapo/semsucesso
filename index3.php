<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Flat UI - Free Bootstrap Framework and Theme</title>
    <meta name="description" content="Flat UI Kit Free is a Twitter Bootstrap Framework design and Theme, this responsive framework includes a PSD and HTML version."/>

    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="flat/dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="flat/dist/css/flat-ui.css" rel="stylesheet">
    <link href="flat/docs/assets/css/demo.css" rel="stylesheet">

    <link rel="shortcut icon" href="flat/img/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="dist/js/vendor/html5shiv.js"></script>
      <script src="dist/js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row demo-row">
        <div class="col-xs-12">
          <!-- <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <a class="navbar-brand" href="#">Sem Sucesso FS</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
              <ul class="nav navbar-nav navbar-left">
                <li><a href="#fakelink">Home<span class="navbar-unread">1</span></a></li>
                <li><a href="#fakelink">Agenda de Jogos</a></li>
                <li><a href="#fakelink">Resultados</a></li>
                <li><a href="#fakelink">Sobre o Time</a></li>
                <li><a href="#fakelink">Artilharia</a></li>
                <li><a href="#fakelink">Adm</a></li>
               </ul>
            </div>
          </nav> -->

          <nav role="navigation" class="navbar navbar-inverse navbar-embossed">
            <div class="navbar-header">
              <button data-target="#bs-example-navbar-collapse-2" data-toggle="collapse" class="navbar-toggle" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a href="#" class="navbar-brand">Flat UI</a>
            </div>
            <div id="bs-example-navbar-collapse-2" class="collapse navbar-collapse">
              <form role="search" class="navbar-form navbar-left">
                <div class="form-group">
                  <input type="text" placeholder="Search" class="form-control">
                </div>
                <button class="btn btn-default" type="submit">Submit</button>
              </form>
            </div>
          </nav>

        </div>
      </div> <!-- /row -->


    </div> <!-- /container -->

    <footer>
      <div class="container">
        <!-- <div class="row">
          <div class="col-xs-7">
            <h3 class="footer-title">Site do time Sem Sucesso FS</h3>
            <p>
              Desenvolvido por Frog SI :-)
            </p>
          </div> 
        </div> -->
      </div>
    </footer>

    <script src="flat/dist/js/vendor/jquery.min.js"></script>
    <script src="flat/dist/js/vendor/video.js"></script>
    <script src="flat/dist/js/flat-ui.min.js"></script>
    <script src="flat/docs/assets/js/application.js"></script>

    <script>
      videojs.options.flash.swf = "flat/dist/js/vendors/video-js.swf"
    </script>
  </body>
</html>
