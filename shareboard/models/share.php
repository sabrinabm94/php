<?php 	
class ShareModel extends Model {
	public function Index() {
		$this->query('SELECT * FROM shares');
		$rows = $this->resultSet();
		return $rows;
		//print_r($rows);
	}
	public function add() {
		//sanitize post
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		if(isset($post['submit'])) {
			//echo "submitted!";
			if(isset($post['title']) == '' || isset($post['body']) == '' || isset($post['link']) == '') {
				Messages::setMessage('Please fill in all fields', 'error');
				return;
			} else {
				$this->query('INSERT INTO shares(title, body, link, user_id, create_date) VALUES(:title, :body, :link, :user_id, :create_date)');
				$this->bind(':title', $post['title']);
				$this->bind(':body', $post['body']);
				$this->bind(':link', $post['link']);
				$this->bind(':user_id', 1);
				$this->bind(':create_date', date("Y-m-d H:i:s"));
				$this->execute();
				//verify
				if($this->lastInsertId()) {
					//redirect
					header('Location: ' . ROOT_URL . 'shares');
				} else {
					Messages::setMessage('Reload the page', 'error');
				}
			}
		}
		return;
	}
}
?>