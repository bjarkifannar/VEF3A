<?php
	/*
	* Class: User
	*/
	class User {
		/* Properties */
		private $email;
		private $password;

		/* Constructor */
		public function __construct($userInfo) {
			setEmail($userInfo[0]);
			setPassword($userInfo[1]);
		}

		/* Methods */
		public function getEmail() {
			return $this->email;
		}

		public function setEmail($email) {
			$this->email = $email;
		}

		public function getPassword() {
			return $this->password;
		}

		public function setPassword($password) {
			$this->password = $password;
		}
	}
?>