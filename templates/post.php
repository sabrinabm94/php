<?php 
class Post {
	private $name;
	public function __set($name, $value) {
		echo "Setting " . $name .  " to " . $value . "</br>";
		$this->name = $value;
	}
	public function __get($name) {
		echo "Getting " . $name .  " to " . $this->name . "</br>";
	}
	public function __isset($name) {
		echo "Is " . $name .  " set " . $this->name . "</br>";
		return isset($this->name);
	}
}
$post = new Post;
$post->name = 'testing';
echo $post->name;
var_dump(isset($post->name));
?>