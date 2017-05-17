<?php
	$data['rand_questions'] = Article::getRandoms(Article::QnA_cat_id);
	$data['rand_questions_html'] = '<div class="mt">';
	foreach ($data['rand_questions'] as $question) {
		$data['rand_questions_html'] .= '<div><h4><i class="icon-user"></i>';	
		$data['rand_questions_html'] .= '<a href="single.php?cat='.$question->getCatId().'&id='.$question->getId().'">'.$question->getName().'</a>';	
		$data['rand_questions_html'] .= '</h4></div>';
	}
	$data['rand_questions_html'] .= '</div>';
	$data['rand_items'] = Article::getRandoms();
	$data['rand_items_html'] = '<div class="row">';
	foreach ($data['rand_items'] as $rand_item) {
		$data['rand_items_html'] .= '<div class="col-lg-4 col-md-4">';
		$data['rand_items_html'] .= '<div class="fh5co-blog animate-box">';
		$data['rand_items_html'] .= '<a href="#"><img class="img-responsive" src="images/project-4.jpg" alt=""></a>';
		$data['rand_items_html'] .= '<div class="blog-text">';
		$data['rand_items_html'] .= '<h3><a href=""#>45 Minimal Workspace Rooms for Web Savvys</a></h3>';
		$data['rand_items_html'] .= '<span class="posted_on">Nov. 15th</span>';
		$data['rand_items_html'] .= '<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>';
		$data['rand_items_html'] .= '';
		$data['rand_items_html'] .= '';
		$data['rand_items_html'] .= '';
		$data['rand_items_html'] .= '';
		$data['rand_items_html'] .= '';
		$data['rand_items_html'] .= '';
		$data['rand_items_html'] .= '';
		$data['rand_items_html'] .= '';
		$data['rand_items_html'] .= '';
		$data['rand_items_html'] .= '';
		$data['rand_items_html'] .= '';
		$data['rand_items_html'] .= '';
		$data['rand_items_html'] .= '';
		$data['rand_items_html'] .= '';
	}
	$data['rand_items_html'] .= '</div>';
?>