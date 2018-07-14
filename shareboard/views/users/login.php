<section class="section">
	<form method="post" action="<?php $_SERVER['PHP_SELF'] ?> " class="form">
		<h2 class="title">Login</h2>
		<label class="label">E-mail</label>
		<input type="text" name="email" class="form-control"/>
		<label class="label">Password</label>
		<input type="password" name="password" class="form-control"/>
		<button class="btn">
			<input name="submit" value="submit" type="hidden">Submit
		</button>
	</form>
</section>
