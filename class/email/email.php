<?php

class Email extends PHPMailer
{
	
	public function __construct()
	{
		$this->hostEmail 			= 'http://www.siwork.com.br/server/conextlan/wsdl/';
		$this->timeOutEmail			= 40;
		$this->conectEmail();		
	}

	private function conectEmail()
	{	
		//$this->SMTPDebug = 3;                               	// Enable verbose debug output
		$this->isSMTP();                                      	// Set mailer to use SMTP
		$this->Host 		= 'smtp.allka.com.br';  	// Specify main and backup SMTP servers
		$this->SMTPAuth 	= true;                             // Enable SMTP authentication
		$this->Username 	= 'semsucesso@allka.com.br';	// SMTP username
		$this->Password 	= 'semsucesso123';                       // SMTP password
		$this->SMTPSecure 	= 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$this->Port 		= 587;   // TCP port to connect to

		$this->isHTML(true);									// Set email format to HTML
	}

	public function setOrigem($emailOrigem, $nomeOrigem)
	{
		$this->setFrom($emailOrigem, $nomeOrigem);
	}

	public function setDestino($emailDestino, $nomeDestini = '')
	{
		$this->addAddress($emailDestino, $nomeDestini);
		//$mail->addReplyTo('info@example.com', 'Information');
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');
	}

	public function setArquivo($caminhoArquivo, $nomeArquivo = '')
	{
		$this->addAttachment($caminhoArquivo, $nomeArquivo);
	}

	public function setBodyEmail($assunto, $body, $subBody = '')
	{
		$this->Subject = $assunto;
		$this->Body    = $body;
		$this->AltBody = $subBody;
	}

	public function enviarEmail()
	{
		if(!$this->send()) {
		    return 'Message could not be sent. Mailer Error: ' . $this->ErrorInfo;
		}
		return 'Message has been sent';
	}

	public function confirmUserEmail($email, $idUser, $token)
	{
		$body = "<h1>Confirmação de usuário no site Sem Sucesso FS</h1>
				 <br>
				 Click <a href='http://www.semsucessofs.allka.com.br/controller/controller.php?arquivo=team/team.php&type=confirmEmail&idUser={$idUser}'>aqui</a> para confirmar o seu cadastro.";

		$body = "<!DOCTYPE html>
					<html lang=\"en\">
					  <head>
					    <meta charset=\"utf-8\">
					    <title>Sem Sucesso FS</title>
					    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
					 
					    <link rel=\"shortcut icon\" href=\"http://www.semsucessofs.allka.com.br/flat/dist/img/photo.ico\"> 
					  </head>
					  <body>
					    <style>
					      
					    </style>
					    <div class=\"container\">
					      <nav role=\"navigation\" class=\"navbar navbar-inverse navbar-embossed\" style=\"background-color: #F63131;\">
					        <div class=\"navbar-header\">
					          <center>
					            <a class=\"navbar-brand\">Sem Sucesso FS - Confirmação de Cadastro</a>
					          </center>
					        </div>
					      </nav>

					      <div class=\"row\" id=\"home-team\">
					        <center>
					          <img src=\"http://www.semsucessofs.allka.com.br/img/photo.jpg\" class=\"img-circle\" alt=\"Cinque Terre\" width=\"304\" height=\"236\">
					        </center>
					      </div>

					      <div class=\"row\" align=\"center\">
					        <h3 class=\"demo-panel-title\">Click <a href=\"http://www.semsucessofs.allka.com.br/confirmacao.php?idUser={$idUser}&token={$token}\">aqui</a> para confirmar o seu cadastro.</h3> 
					      </div>

					      <footer style=\"background-color: #F63131;\">
					        <div class=\"container\">
					          <div class=\"row\">
					            <div>
					              <center>
					                <h3 class=\"footer-title\">Sem Sucesso FS</h3>
					                <p>
					                  Desenvolvido por Frog SI :-)
					                </p>
					              </center>
					            </div> 
					          </div>
					        </div>
					      </footer>
					    </div>

					    <!-- jQuery (necessary for Bootstrap\"s JavaScript plugins) -->
					   
					    <!-- Include all compiled plugins (below), or include individual files as needed -->
					    
					    <!-- Flat UI -->
					    

					    <script type=\"text/javascript\">
					      
					    </script>

					  </body>
					</html>

				";

		$this->setOrigem('semsucesso@allka.com.br', 'Sem Sucesso FS');
		$this->setDestino($email);
		$this->setBodyEmail('Sem Sucesso FS', $body);
		$respostaEnvio 	= $this->enviarEmail(); //'Message has been sent'
		
		if ($respostaEnvio != 'Message has been sent') {
			return 'Ocorreu algum erro ao enviar o e-mail de confirmação';
		}
		return 'ok';
	}

	public function trataCaracterEspecial($txt)
	{
		$characteres = array(
		   'Š'=>'S', 		'š'=>'s', 'Ð'=>'Dj',			'Ž'=>'Z', 			'ž'=>'z', 			'À'=>'&Agrave;', 	'Á'=>'&Aacute;', 	'Â'=>'&Acirc;', 'Ã'=>'&Atilde;', 	'Ä'=>'A',
		   'Å'=>'A', 		'Æ'=>'A', 'Ç'=>'&Ccedil;', 		'È'=>'E', 			'É'=>'&Eacute;', 	'Ê'=>'&Ecirc;', 	'Ë'=>'E', 			'Ì'=>'I', 		'Í'=>'&Iacute;', 	'Î'=>'I',
		   'Ï'=>'I', 		'Ñ'=>'N', 'Ò'=>'O', 			'Ó'=>'&Oacute;', 	'Ô'=>'&Ocirc;', 	'Õ'=>'&Otilde;', 	'Ö'=>'O', 			'Ø'=>'O', 		'Ù'=>'U', 			'Ú'=>'&Uacute;',
		   'Û'=>'U', 		'Ü'=>'U', 'Ý'=>'Y', 			'Þ'=>'B', 			'ß'=>'Ss',			'à'=>'&agrave;', 	'á'=>'&aacute;', 	'â'=>'&acirc;', 'ã'=>'&atilde;', 	'ä'=>'a',
		   'å'=>'a', 		'æ'=>'a', 'ç'=>'&ccedil;', 		'è'=>'e', 			'é'=>'&eacute;', 	'ê'=>'&ecirc;', 	'ë'=>'e', 			'ì'=>'i', 		'í'=>'&iacute;', 	'î'=>'i',
		   'ï'=>'i', 		'ð'=>'o', 'ñ'=>'n', 			'ò'=>'o', 			'ó'=>'&oacute;', 	'ô'=>'&ocirc;', 	'õ'=>'&otilde;', 	'ö'=>'o', 		'ø'=>'o', 			'ù'=>'u',
		   'ú'=>'&uacute;', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 	'þ'=>'b', 			'ÿ'=>'y', 			'ƒ'=>'f'
		);
		return strtr($txt, $characteres);
	}

}