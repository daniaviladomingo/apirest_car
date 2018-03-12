<?php
	require_once('ICarDao.php');
	require_once('../../../db_utils/BaseDao.php');
	
	class CarDao extends BaseDao implements ICarDao {
		
		public function getUserCars($id_user) {
			return $this->db()->query("SELECT 
										brand, 
										model 
									FROM 
										users, 
										cars_to_user, 
										cars, 
										cars_brand 
									WHERE 
										users.id              = cars_to_user.id_user AND 
										cars_to_user.id_car   = cars.id              AND 
										cars.brand            = cars_brand.id        AND 
										users.id              = ?", array($id_user));
		}
		
		public function getCars() {
			return $this->db()->query("SELECT cars.id, cars.model, cars.brand, cars_brand.name FROM cars, cars_brand WHERE cars.brand = cars_brand.id");
		}
		
		public function deleteUserCar($id_user, $id_car) {
			return $this->db()->update("DELETE FROM 
										cars_to_user 
									WHERE 
										id_user = ? AND
										id_car  = ?", array($id_user, $id_car));
		}
		
		public function addUserCar($id_user, $id_car) {
			return $this->db()->update("INSERT INTO cars_to_user (id_user, id_car) VALUES (?, ?)", array($id_user, $id_car));
		}
		
	}
?>
