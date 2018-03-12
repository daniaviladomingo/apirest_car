<?php	
	abstract class AbstractDaoFactory{
		
		public function getDao($type) {
			$dao = $this->selectDao($type);
			$dao->setDb($this->getDataSource());
			return $dao;
		}
		
		abstract protected function selectDao($type);
		
		abstract protected function getDataSource();
	}
?>
