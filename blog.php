	<?php 
		include 'views/head.php';
		include 'data/blog.php';
	?>
	<div id="fh5co-blog">
		<div class="container">
			<h1><?php echo $data['category_name']; ?></h1>
			<div class="row">
				<?php echo $data['articles_html']; ?>
			</div>
		</div>
	</div>
	<?php include 'views/footer.php';?>