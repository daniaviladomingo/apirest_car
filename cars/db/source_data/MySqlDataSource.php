<?php
	require_once('/var/www/html/db_utils/DataSourcePDO.php');

	class MySqlDataSource extends DataSourcePDO {		
		protected function driver()   { return "mysql";     }									
		protected function server()   { return "localhost"; }
		protected function db()       { return "testing";   }
		protected function charset()  { return "utf8mb4";   }
		protected function user()     { return "root";      }
		protected function password() { return "ana1636";   }
	}
?>
