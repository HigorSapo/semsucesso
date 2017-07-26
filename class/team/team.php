<?php

class Team extends Email
{
	private $name;
	private $login;
	private $key;
	private $email;
	private $team;
	private $nameTeam;
	private $statusFrmTeam;
	public  $dtTime;

	public function __construct()
	{
		parent::__construct();
		$this->dtTime = date('Y-m-d H:i:s');
	}

	public function saveUser($name, $login, $key, $email, $team, $nameTeam, $statusFrmTeam)
	{
		if ($name == '' || $login == '' || $key == '' || $email == '' || $statusFrmTeam == '')
			return 'Parâmetros incorretos na função: ' . __FUNCTION__ . ' Linha: ' . __LINE__ . ' Arquivo: ' . __FILE__;

		$this->name 			= $name;
		$this->login 			= $login; 
		$this->key 				= $key;
		$this->email 			= $email;
		$this->team 			= $team;
		$this->nameTeam 		= $nameTeam;
		$this->statusFrmTeam 	= $statusFrmTeam;

		$resValidUser = $this->validUserExists();
		if ($resValidUser->login != 'ok')
			return array('login exists');
		if ($resValidUser->email != 'ok')
			return array('email exists');
		if ($resValidUser->team != 'ok')
			return array('team exists');

		if ($this->statusFrmTeam == 'nameTeam'){
			$statusUser = 1; // ADM TEAM
		} else {
			$statusUser = 2; // SLAVE TEAM
		}

		$idUser = '';
		$token  = md5(uniqid() . time());
		try {
			$key = md5($this->key);
			$stmt = Conexao::getInstance()->prepare('INSERT INTO user
													 (
													 	nome,
													 	login,
													 	email,
													 	senha,
													 	status_user,
													 	token,
													 	dt_registro
													 )
													 VALUES
													 (
													 	:nome,
													 	:login,
													 	:email,
													 	:senha,
													 	:status_user,
													 	:token,
													 	:dt_registro
													 )');

			$stmt->bindParam(':nome', $this->name);
			$stmt->bindParam(':login', $this->login);
			$stmt->bindParam(':email', $this->email);
			$stmt->bindParam(':senha', $key);
			$stmt->bindParam(':status_user', $statusUser);
			$stmt->bindParam(':token', $token);
			$stmt->bindParam(':dt_registro', $this->dtTime);
			
			$stmt->execute();

			$idUser = Conexao::getInstance()->lastInsertId();
			
		} catch (Exception $e) {
			return $e->getMessage();
		}

		$idTeam 			= $this->team;
		if ($statusUser == 1) {
			$res = $this->saveTeam($idUser, $idUser, $this->nameTeam, 'sem foto');
			if (!is_array($res))
				return 'Erro ao gravar time na função: ' . __FUNCTION__ . ' Linha: ' . __LINE__ . ' Arquivo: ' . __FILE__;
			$idTeam = $res['idTeam'];
		}

		$res = $this->saveTeamPlayer($idTeam, $idUser, $statusUser);
		if (!is_array($res))
			return 'Erro ao grava o jogador no time na função: ' . __FUNCTION__ . ' Linha: ' . __LINE__ . ' Arquivo: ' . __FILE__;
		
		$resEmail = $this->confirmUserEmail($this->email, $idUser, $token);
		
		if ($resEmail == 'ok')
			return array('ok');
		return $resEmail;
	}

	private function saveTeamPlayer($idTeam, $idUser, $statusUser)
	{
		if ($idTeam == '' || $idUser == '' || $statusUser == '')
			return 'Parâmetros incorretos na função: ' . __FUNCTION__ . ' Linha: ' . __LINE__ . ' Arquivo: ' . __FILE__;

		try {
			$gol = 0;
			$stmt = Conexao::getInstance()->prepare('INSERT INTO team_player
													 (
													 	id_team,
													 	id_player,
													 	gols_player,
													 	access_status,
													 	dt_registro
													 )
													 VALUES
													 (
													 	:id_team,
													 	:id_player,
													 	:gols_player,
													 	:access_status,
													 	:dt_registro
													 )');

			$stmt->bindParam(':id_team', $idTeam);
			$stmt->bindParam(':id_player', $idUser);
			$stmt->bindParam(':gols_player', $gol);
			$stmt->bindParam(':access_status', $statusUser);
			$stmt->bindParam(':dt_registro', $this->dtTime);

			$stmt->execute();
			
			return array('ok');
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}

	private function saveTeam($idUser, $idUserMaster, $nameTeam, $photoName = 'sem foto')
	{
		if ($idUser == '' || $idUserMaster == '' || $nameTeam == '')
			return 'Parâmetros incorretos na função: ' . __FUNCTION__ . ' Linha: ' . __LINE__ . ' Arquivo: ' . __FILE__;

		try {
			$stmt = Conexao::getInstance()->prepare('INSERT INTO team
													 (
													 	id_user,
													 	id_user_master_team,
													 	name_team,
													 	photo_team,
													 	dt_creation
													 )
													 VALUES
													 (
													 	:id_user,
													 	:id_user_master_team,
													 	:name_team,
													 	:photo_team,
													 	:dt_creation
													 )');

			$stmt->bindParam(':id_user', $idUser);
			$stmt->bindParam(':id_user_master_team', $idUserMaster);
			$stmt->bindParam(':name_team', $nameTeam);
			$stmt->bindParam(':photo_team', $photoName);
			$stmt->bindParam(':dt_creation', $this->dtTime);
			$stmt->execute();

			$lastId = Conexao::getInstance()->lastInsertId();
			return array('idTeam' => $lastId);
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}

	private function validUserExists()
	{
		$loginDb = $this->getLoginDb($this->login);
		$emailDb = $this->getEmailDb($this->email);

		$nameTeamDb = '';
		if ($this->statusFrmTeam == 'nameTeam')
		{
			$nameTeamDb = $this->getTeamDb($this->nameTeam);
		}

		$resValidUser = new stdClass();
		$resValidUser->login = ($loginDb[0] == 'vazio') ? 'ok' : 'existe';
		$resValidUser->email = ($emailDb[0] == 'vazio') ? 'ok' : 'existe';
		$resValidUser->team  = ($nameTeamDb == '' || $nameTeamDb[0] == 'vazio') ? 'ok' : 'existe';

		return $resValidUser;
	}

	public function getLoginDb($login)
	{
		if ($login == '')
			return 'Parâmetro incorreto na função: ' . __FUNCTION__ . ' Linha: ' . __LINE__ . ' Arquivo: ' . __FILE__;

		try {
			$stmt = Conexao::getInstance()->prepare('SELECT login FROM user
													 WHERE login = :login');

			$stmt->bindParam(':login', $login);
			$stmt->execute();
			$final_result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			
			return (!empty($final_result)) ? $final_result : array('vazio');
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}

	public function getUserByIdDb($idUser)
	{
		if ($idUser == '')
			return 'Parâmetro incorreto na função: ' . __FUNCTION__ . ' Linha: ' . __LINE__ . ' Arquivo: ' . __FILE__;

		try {
			$stmt = Conexao::getInstance()->prepare('SELECT * FROM user
													 WHERE id = :id');

			$stmt->bindParam(':id', $idUser);
			$stmt->execute();
			$final_result = $stmt->fetchAll(PDO::FETCH_ASSOC);

			return (!empty($final_result)) ? $final_result : array('vazio');
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}



	public function getEmailDb($email)
	{
		if ($email == '')
			return 'Parâmetro incorreto na função: ' . __FUNCTION__ . ' Linha: ' . __LINE__ . ' Arquivo: ' . __FILE__;

		try {
			$stmt = Conexao::getInstance()->prepare('SELECT email FROM user
													 WHERE email = :email');

			$stmt->bindParam(':email', $email);
			$stmt->execute();
			$final_result = $stmt->fetchAll(PDO::FETCH_ASSOC);

			return (!empty($final_result)) ? $final_result : array('vazio');
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}

	public function getTeamDb($nameTeam)
	{
		if ($nameTeam == '')
			return 'Parâmetro incorreto na função: ' . __FUNCTION__ . ' Linha: ' . __LINE__ . ' Arquivo: ' . __FILE__;

		try {
			$stmt = Conexao::getInstance()->prepare('SELECT name_team FROM team
													 WHERE name_team = :name_team');

			$stmt->bindParam(':name_team', $nameTeam);
			$stmt->execute();
			$final_result = $stmt->fetchAll(PDO::FETCH_ASSOC);

			return (!empty($final_result)) ? $final_result : array('vazio');
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}

	public function confirmEmail($idUser)
	{
		$status = 1;
		$token  = 0;
		try {
			$stmt = Conexao::getInstance()->prepare('UPDATE user
													 SET status_access = :status,
													 	 token = :token
													 WHERE id = :id');
			$stmt->bindParam(':status', $status);
			$stmt->bindParam(':token', $token);
			$stmt->bindParam(':id', $idUser);
			$stmt->execute();

			return array('ok');
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}

	public function confirmUser($args)
	{
		if (!isset($args['idUser']) || !isset($args['token']))
			return 'Parâmetro incorreto na função: ' . __FUNCTION__ . ' Linha: ' . __LINE__ . ' Arquivo: ' . __FILE__;
		
		if ($args['idUser'] == '' || $args['token'] == '')
			return 'Parâmetro incorreto na função: ' . __FUNCTION__ . ' Linha: ' . __LINE__ . ' Arquivo: ' . __FILE__;

		$user = $this->getUserByIdDb($args['idUser']);
		if (!is_array($user))
			return 'Erro -> : '. $user . ' . Na função' . __FUNCTION__ . ' Linha: ' . __LINE__ . ' Arquivo: ' . __FILE__;

		if ($user[0] == 'vazio')
			return 'Registro não encontrado';

		if ($args['token'] != $user[0]['token'])
			return 'Token inválido ou esse token já foi utilizado!';

		$res = $this->confirmEmail($args['idUser']);
		if (!is_array($res))
			return 'Erro ao confirmar o e-mail-> : '. $res . ' . Na função' . __FUNCTION__ . ' Linha: ' . __LINE__ . ' Arquivo: ' . __FILE__;

		return $res;
	}

	public function getTeamAllIdNameDb()
	{
		try {
			$stmt = Conexao::getInstance()->prepare('SELECT id, name_team FROM team');

			$stmt->execute();
			$final_result = $stmt->fetchAll(PDO::FETCH_ASSOC);

			return (!empty($final_result)) ? $final_result : array('vazio');
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}

	public function getTeamIdDb($idPlayer)
	{
		if ($idPlayer == '')
			return 'Parâmetro incorreto na função: ' . __FUNCTION__ . ' Linha: ' . __LINE__ . ' Arquivo: ' . __FILE__;

		try {
			$stmt = Conexao::getInstance()->prepare('SELECT * FROM team
													 WHERE id_user = :id_user');
			$stmt->bindParam(':id_user', $idPlayer);

			$stmt->execute();
			$final_result = $stmt->fetchAll(PDO::FETCH_ASSOC);

			return (!empty($final_result)) ? $final_result : array('vazio');
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}

}