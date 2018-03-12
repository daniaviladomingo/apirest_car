<?php
	require_once('IUserDao.php');	
	require_once('../../../db_utils/BaseDao.php');	
	
	class UserDao extends BaseDao implements IUserDao {
		
		public function login($user) {
			return $this->db()->query("SELECT id, password FROM users WHERE name = ?", array($user));
		}
		
		public function validateCredential($id_user, $password) {
			return $this->db()->query("SELECT id FROM users WHERE id = ? AND password = ?", array($id_user, $password));
		}
	}
?>
