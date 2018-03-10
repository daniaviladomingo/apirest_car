<?php	
	require_once('/var/www/html/db_utils/AbstractDaoFactory.php');
	require_once('../data_source/MySqlDataSource.php');
	require_once('dao/DaoEnum.php');
	require_once('dao/user/UserDao.php');
	require_once('dao/user/CarDao.php');
	
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
			return new MySqlDataSource()
		}
	}
?>
