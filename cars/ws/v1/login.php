<?php
	require_once('../ws_utils.php');	
	require_once('../../db/dao_factory/MySqlDaoFactory.php');	
	
	if ($_SERVER['REQUEST_METHOD'] == "GET") {
		
		# take parameters
		$user = $_GET['user'];		
		
		if (!isAnyParameterEmpty($user)) {		
			$mysqlfactory = new MySqlDaoFactory();
			response($mysqlfactory->getDao(DaoEnum::UserDao)->login($user));
		}
	}
?>
