<?php
	interface IUserDao {
		public function login($user);
		public function validateCredential($id_user, $password);
	}
?>
