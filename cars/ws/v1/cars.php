<?php
	require_once('../ws_utils.php');
	require_once('../../db/dao_factory/MySqlDaoFactory.php');

	if ($_SERVER['REQUEST_METHOD'] == "GET") {
				
		# take parameters
		$id_user = $_GET['id_user'];		
		$password = $_GET['password'];
		
		if (!isAnyParameterEmpty($id_user, $password)) {
			$mysqlfactory = new MySqlDaoFactory();
			if (validateCredential($mysqlfactory->getDao(DaoEnum::UserDao)->validateCredential($id_user, $password))) {
				response($mysqlfactory->getDao(DaoEnum::CarDao)->getCars());
			}
		}
	}
?>
