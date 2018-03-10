<?php
	interface ICarDao {
		
		public function getUserCars($id_user);
		
		public function getCars();
		
		public function deleteUserCar($id_user, $id_car);
		
		public function addUserCar($id_user, $id_car);
	}
?>
