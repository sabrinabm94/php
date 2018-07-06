<?php 
class Post {
	private $name;

	public function __set($name, $value) {
		echo "Setting " . $name .  " to " . $value . "</br>";
		$this->name = $value;
	}
}
$post = new Post;
$post->name = 'testing';
echo $post->name;
var_dump(isset($post->name));
?>