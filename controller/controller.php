<?php

session_start();

include_once("../class/db/conexao.php");
include_once("../class/PHPMailer-master/PHPMailerAutoload.php");
include_once("../class/email/email.php");

class Controller
{
	private $parametros;
	private $parametrosFiles;
	private $sessionParam;
	private $dtTime;
	private $autenticacao;

	public function __construct($parametros, $parametrosFiles, $sessionParam)
	{
		$this->parametros 		= $parametros;
		$this->parametrosFiles 	= $parametrosFiles;
		$this->sessionParam 	= $sessionParam;
		$this->dtTime 			= date('Y-m-d H:i:s');
		
		$this->direcionarArquivo($parametros->arquivo);
	}

	private function direcionarArquivo($nomeArquivo)
	{
		switch ($nomeArquivo)
		{
			case 'team/team.php':
				$this->funcTeam($nomeArquivo);
				break;
			case 'access/access.php':
				$this->funcAccess($nomeArquivo);
				break;
			case 'manager-team/managerTeam.php':
				$this->funcManagerteam($nomeArquivo);
				break;
			default:
				echo 'parametros incorretos-> ' . $nomeArquivo . ' Linha: ' . __LINE__;
		}
	}

	private function funcTeam($nomeArquivo)
	{
		$this->openFile($nomeArquivo);
		$objTeam = new Team();

		switch ($this->parametros->type) {
			case 'saveUser':
				$res = $objTeam->saveUser(
											$this->parametros->name, 
											$this->parametros->login,
											$this->parametros->key,
											$this->parametros->email,
											$this->parametros->team,
											$this->parametros->nameTeam,
											$this->parametros->statusFrmTeam
										 );
				echo (is_array($res)) ? json_encode($res) : $res;
				break;
			case 'confirmUser':
				$res = $objTeam->confirmUser($this->parametros->args);
				echo (is_array($res)) ? json_encode($res) : $res;
				break;
			case 'getTeam':
				$res = $objTeam->getTeamAllIdNameDb();
				echo (is_array($res)) ? json_encode($res) : $res;
				break;
			
			default:
				echo 'parametros incorretos-> ' . $this->parametros->type . ' Linha: ' . __LINE__;
				break;
		}
	}

	private function funcAccess($nomeArquivo)
	{
		$this->openFile($nomeArquivo);
		$objAccess = new Access();

		switch ($this->parametros->type) {
			case 'access':
				$res = $objAccess->getAccessPlayer($this->parametros->login, $this->parametros->key);
				echo (is_array($res)) ? json_encode($res) : $res;							
				break;
			
			default:
				# code...
				break;
		}
	}

	private function funcManagerteam($nomeArquivo)
	{
		$this->openFile('team/team.php');
		$this->openFile($nomeArquivo);
		$objManager = new ManagerTeam();

		switch ($this->parametros->type) {
			case 'getNotification':
				$res = $objManager->getNotification($this->sessionParam['id'], $this->sessionParam['status_user']);
				echo (is_array($res)) ? json_encode($res) : $res;
				break;
		}
	}

	private function openFile($nomeArquivo)
	{
		if(file_exists('../class/' . $nomeArquivo))
		{
			include_once('../class/' . $nomeArquivo);
		}		
	}

	private function clearInject($text)
	{
		$text = str_replace('script', '|', $text);
		$text = preg_replace('/[\'\"<>=()]/', '|', $text);
		return $text;
	}

}

// Parâmetros de confirmação de usuário
$results = (isset($results)) ? (object) $results : false;

// Parâmetros passado pelo js
$parametros = (isset($_REQUEST)) ? (object) $_REQUEST : false;

$parametrosFiles = (isset($_FILES)) ? (object) $_FILES : false;

// Passa a session como parametro
$sessionParam = array
				(
					'login' => (isset($_SESSION['info-player']['login'])) ? $_SESSION['info-player']['login'] : false,
					'id' => (isset($_SESSION['info-player']['id'])) ? $_SESSION['info-player']['id'] : false,
					'status_user' => (isset($_SESSION['info-player']['status_user'])) ? $_SESSION['info-player']['status_user'] : false
				);

// Objeto Controller
$controller = new Controller($parametros, $parametrosFiles, $sessionParam);
