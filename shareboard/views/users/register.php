<section class="section">
	<form method="post" action="<?php $_SERVER['PHP_SELF'] ?> " class="form">
		<h2 class="title">Register</h2>
		<label class="label">Name</label>
		<input type="text" name="name" class="form-control"/>
		<label class="label">E-mail</label>
		<input type="text" name="email" class="form-control"/>
		<label class="label">Password</label>
		<input type="password" name="password" class="form-control"/>
		<button class="btn btn-success">
			<input name="submit" value="submit" type="hidden">Submit
		</button>
		<button class="btn btn-secondary">
			<a href="<?php echo ROOT_URL; ?>" class="link">Cancel</a>
		</button>
	</form>
</section>