<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>Shareboard</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"> 
		<link rel="stylesheet" href="<?php echo ROOT_URL?>assets/css/style.css">
	</head>
	<header class="header">
		<nav class="nav-bar">
			<ul class="list-inline list">
				<?php if(isset($_SESSION['is_logged_in'])) { ?>
					<li class="list-item">
						<a class="link" href="<?php echo ROOT_URL; ?>">Welcome <?php echo $_SESSION['user_data']['name']; ?></a>
					</li>
					<li class="list-item">
						<a class="link" href="<?php echo ROOT_URL; ?>shares">Shares</a>
					</li>
					<li class="list-item">
						<a class="link" href="<?php echo ROOT_URL; ?>users/logout">Logout</a>
					</li>
				<?php 
					} else {
						?>
						<li class="list-item">
							<a class="link" href="<?php echo ROOT_URL; ?>">Home</a>
						</li>
						<li class="list-item">
							<a class="link" href="<?php echo ROOT_URL; ?>users/login">Login</a>
						</li>
						<li class="list-item">
							<a class="link" href="<?php echo ROOT_URL; ?>users/register">Register</a>
						</li>
						<?php
					}
				?>
			</ul>
		</nav>
	</header>
	<body>
		<div class="container">
			<?php 
			Messages::display();
			require($view); 
			?>	
		</div>
	</body>
</html> 