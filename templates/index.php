<?php
require 'Database.php'
$database = new Database;
//$database->query('SELECT * FROM posts WHERE id = :id');
//$database->bind(':id', 1);
//print_r($rows);
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
if($_POST['delete']) {
	$delete_id = $_POST['delete_id'];
	$database->query('DELETE from posts WHERE id = :id');
	$database->bind(':id', $delete_id);
	$database->execute();
}
if($post['submit']) {
	echo 'Submitted !';
	$title = $post['title'];
	$body = $post['body'];
	$id = $post['id'];
	//$database->query('INSERT INTO posts (title, body) VALUES(:title, :body)');
	$database->query('UPDATE posts SET title = :title, body = :body WHERE id = :id');
	$database->bind(':title', $title);
	$database->bind(':body', $body);
	$database->bind(':id', $id);
	$database->execute();
	/*if($database->lastInsetId()) {
		echo '<p>Post Added!</p>';
	}*/
}
$database->query('SELECT * FROM posts');
$rows = $database->resultsset();
?>
<section class="form">
	<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
		<label for="" class="label">Post ID</label>
		<input type="text" name="id" placeholder="Add a ID...">
		<label for="" class="label">Post Title</label>
		<input type="text" name="title" placeholder="Add a title...">
		<label for="" class="label">Post Body</label>
		<textarea name="body"></textarea>
		<input type="submit" name="submit" value="submit">
	</form>
</section>
<section class="post">
	<h2 class="title">Posts</h2>
	<div class="content">
		<?php
		foreach ($rows as $row) {
			?>
			<h3 class="post-title"><?php echo $row['title']; ?></h3>
			<p class="post-content"><?php echo $row['body']; ?></p>
			<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
				<input type="hidden" name="delete_id" value="<?php $row['id']; ?>">
				<input type="submit" name="delete" value="delete">
			</form>
			<?php
		}
		endforeach; ?>
	</div>
</section>
?>