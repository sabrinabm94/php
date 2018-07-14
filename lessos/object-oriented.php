<?php
//class
	class User {
		public function __construct() {
			echo "Construct called! \n";
			//run all methodes declared here when the class is instantied, used for setting up default methodes.
		}
		public function register() {
			echo "User registed! \n";
		}
		// public: all methodes can acess
		// private: only methodes inside the class can acess
		// protected: private for all methodes outside the class, except the methodes that extends the classes that use this method.
		// propriets: attributs
		// methodes: one function inside a class
		public function login($username, $password) {
			//echo $username .  " is loggin in \n";
			$this->auth_user($username, $password); 
			//called another methode from this object.
		}
		public function auth_user($username, $password) {
			echo $username .  " is authenticated \n";
		}
		public function __destruct() {
			echo "Destruct called! \n";
		}
	}
	$User = new User();
	//$User -> register();
	$User -> login('Sabrina', '123456');
?>