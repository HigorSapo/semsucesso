<?php

class ManagerTeam extends Team
{

	public function __construct()
	{
		parent::__construct();
	}

	public function getNotification($idPlayer, $statusPlayer)
	{
		if ($idPlayer == false || $statusPlayer == false)
			return 'Parâmetros session inexistente na função: ' . __FUNCTION__ . ' Linha: ' . __LINE__ . ' Arquivo: ' . __FILE__;

		if ($idPlayer == '' || $statusPlayer == '')
			return 'Parâmetros incorretos na função: ' . __FUNCTION__ . ' Linha: ' . __LINE__ . ' Arquivo: ' . __FILE__;

		if ($statusPlayer != 1)
			return array('without permission');

		$arrTeam = $this->getTeamIdDb($idPlayer);
		if (!is_array($arrTeam))
			return 'Time inexistente na função: ' . __FUNCTION__ . ' Linha: ' . __LINE__ . ' Arquivo: ' . __FILE__;
		
		try {
			$stmt = Conexao::getInstance()->prepare('SELECT a.id, c.nome, a.dt_registro FROM team_player AS a
													 INNER JOIN user AS c on a.id_player = c.id
													 WHERE a.id_team = 1
													 AND a.access_status = 2
													 ORDER BY a.id DESC;');

			$stmt->bindParam(':id_team', $arrTeam[0]['id']);
			$stmt->execute();
			$final_result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			
			return (!empty($final_result)) ? $final_result : array('vazio');
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}

}