<?php
	require_once('IDataSource.php');

	abstract class DataSourcePDO implements IDataSource {
		
		private $dbh = null;
				
		abstract protected function driver();
		abstract protected function server();
		abstract protected function db();
		abstract protected function charset();
		protected function user() { return ""; }
		protected function password() { return ""; }
		
		protected function connect() {
			try {
				$driver = $this->driver();				
				$server = $this->server();
				$db = $this->db();
				$charset = $this->charset();
				$user = $this->user();
				$password = $this->password();				
				
				$dsn = "$driver:host=$server;dbname=$db;charset=$charset";
				$this->dbh = new PDO($dsn, $user, $password);
				$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (PDOException $e) {				
				$this->dbh = null;
			}
		}
		
		public function update($query, $params = array()) {
			$this->connect();
			if (!empty($query) && $this->dbh != null) {
				$stmt = $this->dbh->prepare($query);
				$stmt->execute($params);
				return $stmt->rowCount();
			} else {
				return -1;
			}
		}
		
		public function query($query, $params = array()) {
			$this->connect();
			if (!empty($query) && $this->dbh != null) {
				$stmt = $this->dbh->prepare($query);
				$stmt->execute($params);				
				return $stmt->fetchAll(PDO::FETCH_ASSOC);
			} else {				
				return -1;
			}
		}
	}
?>
