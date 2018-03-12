<?php	
	require_once('../../../db_utils/DataSourcePDO.php');

	class MySqlDataSource extends DataSourcePDO {		
		protected function driver()   { return "mysql";        }									
		protected function server()   { return "localhost";    }
		protected function db()       { return "clean_cars";   }
		protected function charset()  { return "utf8mb4";      }
		protected function user()     { return "root";         }
		protected function password() { return "ana1636";      }
	}
?>
