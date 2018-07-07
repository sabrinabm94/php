<?php
class User {
	public $id;
	public $username;
	public $email;
	public $passaport;
	public function __constructor() {
		echo "Constructor called";
	}
	public function register() {
		echo "User registered";
	}
	public function login($username, $password) {
		$this->auth_user($username, $password);
	}
	public function auth_user($username, $password) {
		echo $username . " is autheticated";
	}
	public function set_id($id) {
		$this->id = $id;
	}
	public function get_id() {
		echo $this->id;
	}
	public function set_username($username) {
		$this->username = $username;
	}
	public function get_username() {
		echo $this->username;
	}
	public function set_password($password) {
		$this->password = $password;
	}
	public function get_password() {
		echo $this->password;
	}
	/*
	public function __destruct() {
		echo "Destructor called";
	}
	*/
	public static  $minPassLength = 5; //Is static because this value will be always the same for all users.
	public static function validatePassword($password) {
		if(strlen($password) >= self::$minPassLength) { //escope resolution
			return true;
		} else {
			return false;
		}
	}
}
$User = new User();
$User->register();
$User->set_id(1);
$User->set_username('Sabrina');
$User->set_password('123');
$User->login('Sabrina', '123');
$password = $User->get_password();	
if(User::validatePassword($password)) {
	echo 'Password is valid!';
} else {
	echo 'Password is not valid!';
}
echo User::$minPassLength;
?>