<?php	
	abstract class BaseDao {
		
		private $db = null;
		
		public function setDb($db) { 
			$this->db = $db; 
		}
		
		protected function db() {
			if (empty($this->db)) {
				throw new Exception("db must be define");
			}
			return $this->db; 
		}
	}
?>
