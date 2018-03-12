<?php
	require_once('../../../db_utils/AbstractDaoFactory.php');		
	require_once(dirname(__DIR__).'/data_source/MySqlDataSource.php');	
	require_once(dirname(__DIR__).'/dao/DaoEnum.php');
	require_once(dirname(__DIR__).'/dao/user/UserDao.php');
	require_once(dirname(__DIR__).'/dao/car/CarDao.php');
	
	class MySqlDaoFactory extends AbstractDaoFactory {
				
		protected function selectDao($type) {			
			switch ($type) {
				case DaoEnum::UserDao:
					return new UserDao();
				break;
				case DaoEnum::CarDao:
					return new CarDao();
				break;
				default:
					throw new Exception("Unknow Dao");
			}
		}
		
		protected function getDataSource() {
			return new MySqlDataSource();
		}
	}
?>
