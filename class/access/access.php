<?php

class Access
{
	
	public function getAccessPlayer($login, $key)
	{
		if ($login == '' || $key == '')
			return 'Parâmetro incorreto na função: ' . __FUNCTION__ . ' Linha: ' . __LINE__ . ' Arquivo: ' . __FILE__;

		$key = md5($key);
		try {
			$stmt = Conexao::getInstance()->prepare('SELECT 
															id, 
															login, 
															email, 
															status_user, 
															status_access 
													 FROM user
													 WHERE login = :login
													 AND senha 	 = :senha
													 ');

			$stmt->bindParam(':login', $login);
			$stmt->bindParam(':senha', $key);
			$stmt->execute();
			$final_result = $stmt->fetchAll(PDO::FETCH_ASSOC);

			return $this->validAccess($final_result);
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}

	private function validAccess($player)
	{
		if (empty($player))
			return array('vazio');
		
		if ($player[0]['status_user'] != 1 && $player[0]['status_user'] != 2)
			return array('without accesse');

		if ($player[0]['status_access'] !='1')
			return array('token not validation');

		$this->openSession($player);
		return array('ok');
	}

	private function openSession($player)
	{
		$_SESSION['info-player'] = $player[0];
	}

}