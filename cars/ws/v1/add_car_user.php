<?php
	require_once('../ws_utils.php');
	require_once('../../db/dao_factory/MySqlDaoFactory.php');	

	if ($_SERVER['REQUEST_METHOD'] == "GET") {
		
		# take parameters
		$id_user = $_GET['id_user'];	
		$password = $_GET['password'];
		$id_car = $_GET['id_car'];	
				
		if (!isAnyParameterEmpty($id_user, $password, $id_car)) {
			$mysqlfactory = new MySqlDaoFactory();
			if (validateCredential($mysqlfactory->getDao(DaoEnum::UserDao)->validateCredential($id_user, $password))) {
				response($mysqlfactory->getDao(DaoEnum::CarDao)->addUserCar($id_user, $id_car));
			}		
		}
	}
?>
