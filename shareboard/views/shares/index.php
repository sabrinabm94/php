<section class="section posts">
	<?php if(isset($_SESSION['is_logged_in'])) : ?>
	<a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/add">Add new post</a>
	<?php endif; ?>
	<div class="row">
		<?php foreach($viewmodel as $item) : ?>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="post">
					<h2 class="title"><?php echo $item['title']; ?></h3>
					<date class="date">Share date: <?php echo $item['create_date']; ?></date>
					<hr />
					<p class="text"><?php echo $item['body']; ?></p>
					<button class="btn btn-primary">
						<a class="link" href="<?php echo $item['link']; ?>" target="_blank">See more</a>
					</button>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</section>
