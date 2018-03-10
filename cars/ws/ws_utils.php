<?php	
	ini_set('display_errors', 'On');
	require_once('constants.php');		
	require_once('response_data/ResponseBase.php');

	function isAnyParameterEmpty() {		
		foreach (func_get_args() as &$parameter) {	
			if (empty($parameter)) {
				response(null, ERROR_MISSING_PARAMETERS);
				return true;
			}
		}		
		return false;
	}
	
	function validateCredential($credentials) {
		if (empty($credentials)) {
			response(null, ERROR_VALIDATE_CREDENTIAL);
			return false;
		}
		return true;
	}
	
	// Reponse function		    
	function response($data, $error_code = 0) {
		$response = new ResponseBase($error_code, $data);
		header('Content-Type:application/json');
		header('Accept-Charset:utf-8');
		echo json_encode($response, JSON_NUMERIC_CHECK);
		exit;
	}	
?>
