<?php
	require_once('../ws_utils.php');
	require_once('../response_data/ResponseCar.php');

	if ($_SERVER['REQUEST_METHOD'] == "GET") {
		
		# take parameters
		$id_user = $_GET['id_user'];
		$password = $_GET['password'];
		
		if (!isAnyParameterEmpty($id_user, $password)) {
		
			# connect DB
			$db = connectBD();
			
			if (validateCredential($db, $id_user, $password)) {		
				# query DB
				$result = $db->query("SELECT 
										cars.id AS id, 
										cars_brand.name AS brand, 
										model 
									FROM 
										cars, 
										cars_brand 
									WHERE 
										cars.brand = cars_brand.id");
	
				# build response		
				$cars = array();
						
				while ($row = $result->fetch_assoc()) {
					$id        = $row['id'];
					$brand     = $row['brand'];
					$model     = $row['model'];			
			
					$car = new ResponseCar($id, $brand, $model);
				
					array_push($cars, $car);
				}			
	
				response($cars);
			}
		
			# close DB
			closeConnectionDB($db);
		}
	}
?>
