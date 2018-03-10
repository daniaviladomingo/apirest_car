<?php
	class ResponseBase {
		var $codigo;	
		var $data;
    
		public function __construct($codigo, $data) {
			$this->codigo = $codigo;		
			$this->data = $data;
		}
	}
?>
