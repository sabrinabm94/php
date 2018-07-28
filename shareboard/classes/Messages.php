<?php  
class Messages {
	public static function setMessage($text, $type) {
		if($type == 'error') {
			$_SESSION['errorMsg'] = $text;
		} else {
			$_SESSION['sucessMsg'] = $text;
		}
	}
	public static function display() {
		if(isset($_SESSION['errorMsg'])) {
			echo '<span class="alert alert-danger">' . $_SESSION['errorMsg'] . '</span>';
			unset($_SESSION['errorMsg']);
		}
		if(isset($_SESSION['sucessMsg'])) {
			echo '<span class="alert alert-sucess">' . $_SESSION['sucessMsg'] . '</span>';
			unset($_SESSION['sucessMsg']);
		}
	}
}
?>