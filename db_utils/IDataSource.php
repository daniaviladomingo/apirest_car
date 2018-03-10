<?php
	interface IDataSource {		
		public function query($query, $params = array());
		public function update($query, $params = array());		
	}
?>
