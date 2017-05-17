	<?php 
		include 'views/head.php';
		include 'data/single.php';
	?>
	<div id="fh5co-blog">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="fh5co-blog animate-box">
						<?php if( $data['main_img'] ) { ?>
						<a href="#"><img class="img-responsive" src="<?php echo $data['main_img_link']; ?>" alt="<?php echo $data['main_img_name']; ?>"></a>
						<?php } ?>
						<div class="blog-text">
							<h3><?php echo $data['name']; ?></h3>
							<span class="posted_on">פורסם ב <?php echo $data['date']; ?></span>
							<span class="comment"><a href=""><i class="icon-speech-bubble"></i></a></span>
							<p><strong><?php echo $data['text']; ?></strong></p>
							<p><?php echo $data['long_text']; ?></p>
							<a href="#" class="btn btn-primary">כתוב תגובה</a>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'views/footer.php';?>