	<?php 
		include 'views/head.php';
		include 'data/blog.php';
	?>
	<div id="fh5co-blog">
		<div class="container">
			<div class="row">
				<?php foreach ($data['articles'] as $article) { ?>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="images/project-4.jpg" alt=""></a>
						<div class="blog-text">
							<h3><a href=""#><?php echo $article->getName(); ?></a></h3>
							<span class="posted_on"><?php echo defDate($article->getDate()); ?></span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p><?php echo $article->getText(); ?></p>
							<a href="single.php?id=<?php echo $article->getId(); ?>" class="btn btn-primary">קרא עוד</a>
						</div> 
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php include 'views/footer.php';?>