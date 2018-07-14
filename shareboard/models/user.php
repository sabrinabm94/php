<?php
class UserModel extends Model {
	public function register() {
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$password = $post['password'];
		if(isset($post['submit'])) {
			if($post['name'] == '' || $post['email'] == '' || $post['password'] == '') {
				Messages::setMessage('Please fill in all fields', 'error');
				return;
			}
			$this->query('INSERT INTO users (name, email, password, register_date) VALUES(:name, :email, :password, :register_date)');
			$this->bind(':name', $post['name']);
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			$this->bind(':register_date', date("Y-m-d H:i:s"));
			$this->execute();
			if($this->lastInsertId()) {
				Messages::setMessage('Sucess login', 'sucess');
				header('Location: ' . ROOT_URL . 'users/login');
			} else {
				Messages::setMessage('Erro in your registration, try again', 'error');
			}
		}
		return;
	}
	public function login() {
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$password = $post['password'];
		if(isset($post['submit'])) {
			// Compare Login
			$this->query('SELECT * FROM users WHERE email = :email AND password = :password');
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			$row = $this->single();
			if($row) {
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = array(
					"id"	=> $row['id'],
					"name"	=> $row['name'],
					"email"	=> $row['email']
				);
				header('Location: ' . ROOT_URL . 'shares');
			} else {
				Messages::setMessage('Incorrect login', 'error');
			}
		}
		return;
	}
}