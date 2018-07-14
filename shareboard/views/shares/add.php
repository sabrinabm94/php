<form method="post" action="<?php $_SERVER['PHP_SELF'] ?> " class="form">
	<h2 class="title">Add Post</h2>
	<label class="label">Title</label>
	<input type="text" name="title" class="form-control"/>
	<label class="label">Body</label>
	<textarea name="body" class="form-control"></textarea>
	<label class="label">Link</label>
	<input type="text" name="link" class="form-control"/>
	<button class="btn btn-success">
		<input name="submit" value="submit" type="hidden">Submit
	</button>
	<button class="btn btn-secondary">
		<a href="<?php echo ROOT_URL; ?>" class="link">Cancel</a>
	</button>
</form>