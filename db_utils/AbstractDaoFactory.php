<?php	
	abstract class AbstractDaoFactory{
		
		public function getDao($type) {
			$dao = selectDao($type);
			$dao->setDb(getDataSource());
		}
		
		abstract protected function selectDao($type);
		
		abstract protected function getDataSource();
	}
?>
